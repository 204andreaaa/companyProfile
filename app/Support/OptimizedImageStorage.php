<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class OptimizedImageStorage
{
    public static function store(UploadedFile $file, string $directory, array $options = []): string
    {
        $disk = $options['disk'] ?? 'public';
        $maxWidth = (int) ($options['max_width'] ?? 1920);
        $maxHeight = (int) ($options['max_height'] ?? 1920);
        $quality = (int) ($options['quality'] ?? 82);

        $imageInfo = @getimagesize($file->getRealPath());

        if (!$imageInfo || empty($imageInfo['mime'])) {
            return $file->store($directory, $disk);
        }

        $mime = strtolower($imageInfo['mime']);

        if (in_array($mime, ['image/svg+xml', 'image/bmp'], true)) {
            return $file->store($directory, $disk);
        }

        $source = self::createImageResource($mime, $file->getRealPath());

        if (!$source) {
            return $file->store($directory, $disk);
        }

        [$targetWidth, $targetHeight] = self::resizeDimensions(
            imagesx($source),
            imagesy($source),
            $maxWidth,
            $maxHeight
        );

        $canvas = imagecreatetruecolor($targetWidth, $targetHeight);

        if (in_array($mime, ['image/png', 'image/webp', 'image/gif'], true)) {
            imagealphablending($canvas, false);
            imagesavealpha($canvas, true);
            $transparent = imagecolorallocatealpha($canvas, 0, 0, 0, 127);
            imagefilledrectangle($canvas, 0, 0, $targetWidth, $targetHeight, $transparent);
        }

        imagecopyresampled(
            $canvas,
            $source,
            0,
            0,
            0,
            0,
            $targetWidth,
            $targetHeight,
            imagesx($source),
            imagesy($source)
        );

        $extension = self::extensionFromMime($mime, $file->getClientOriginalExtension());
        $path = trim($directory, '/').'/'.Str::uuid().'.'.$extension;

        $binary = self::encodeImage($canvas, $mime, $quality);

        imagedestroy($source);
        imagedestroy($canvas);

        if ($binary === null) {
            return $file->store($directory, $disk);
        }

        Storage::disk($disk)->put($path, $binary);

        return $path;
    }

    protected static function createImageResource(string $mime, string $path): mixed
    {
        return match ($mime) {
            'image/jpeg', 'image/jpg' => @imagecreatefromjpeg($path),
            'image/png' => @imagecreatefrompng($path),
            'image/webp' => function_exists('imagecreatefromwebp') ? @imagecreatefromwebp($path) : false,
            'image/gif' => @imagecreatefromgif($path),
            default => false,
        };
    }

    protected static function encodeImage($canvas, string $mime, int $quality): ?string
    {
        ob_start();

        $encoded = match ($mime) {
            'image/jpeg', 'image/jpg' => imagejpeg($canvas, null, max(30, min($quality, 95))),
            'image/png' => imagepng($canvas, null, 8),
            'image/webp' => function_exists('imagewebp') ? imagewebp($canvas, null, max(30, min($quality, 95))) : false,
            'image/gif' => imagegif($canvas),
            default => false,
        };

        $binary = $encoded ? ob_get_clean() : null;

        if (!$encoded) {
            ob_end_clean();
        }

        return $binary;
    }

    protected static function resizeDimensions(int $width, int $height, int $maxWidth, int $maxHeight): array
    {
        if ($width <= 0 || $height <= 0) {
            return [1, 1];
        }

        $ratio = min($maxWidth / $width, $maxHeight / $height, 1);

        return [
            max(1, (int) round($width * $ratio)),
            max(1, (int) round($height * $ratio)),
        ];
    }

    protected static function extensionFromMime(string $mime, string $fallback): string
    {
        return match ($mime) {
            'image/jpeg', 'image/jpg' => 'jpg',
            'image/png' => 'png',
            'image/webp' => 'webp',
            'image/gif' => 'gif',
            default => strtolower($fallback ?: 'jpg'),
        };
    }
}
