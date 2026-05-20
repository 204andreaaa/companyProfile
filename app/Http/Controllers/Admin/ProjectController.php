<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Support\OptimizedImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::with('images')
            ->orderBy('sort_order')
            ->orderByDesc('id')
            ->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $data = $this->validatedData($request);
        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['is_active'] = $request->boolean('is_active');

        $project = Project::create($data);
        $this->storeImages($request, $project);

        return back()->with('success', 'Project berhasil ditambahkan.');
    }

    public function update(Request $request, Project $project)
    {
        $data = $this->validatedData($request, $project->id);
        $data['slug'] = $data['slug'] ?: Str::slug($data['title']);
        $data['sort_order'] = (int) ($data['sort_order'] ?? 0);
        $data['is_active'] = $request->boolean('is_active');

        $project->update($data);
        $this->storeImages($request, $project);

        return back()->with('success', 'Project berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        foreach ($project->images as $image) {
            Storage::disk('public')->delete($image->image_path);
        }

        $project->delete();

        return back()->with('success', 'Project berhasil dihapus.');
    }

    public function destroyImage(ProjectImage $image)
    {
        Storage::disk('public')->delete($image->image_path);
        $image->delete();

        return back()->with('success', 'Gambar project berhasil dihapus.');
    }

    protected function validatedData(Request $request, ?int $ignoreId = null): array
    {
        $slugRule = 'nullable|string|max:255|unique:projects,slug';
        if ($ignoreId) {
            $slugRule .= ','.$ignoreId;
        }

        return $request->validate([
            'title' => 'required|string|max:255',
            'slug' => $slugRule,
            'description' => 'nullable|string',
            'location' => 'nullable|string|max:255',
            'sort_order' => 'nullable|integer|min:0',
            'images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:15360',
        ]);
    }

    protected function storeImages(Request $request, Project $project): void
    {
        if (!$request->hasFile('images')) {
            return;
        }

        $nextOrder = (int) $project->images()->max('sort_order');

        foreach ($request->file('images') as $file) {
            $nextOrder++;

            $project->images()->create([
                'image_path' => OptimizedImageStorage::store($file, 'projects', [
                    'max_width' => 1600,
                    'max_height' => 1200,
                    'quality' => 84,
                ]),
                'sort_order' => $nextOrder,
            ]);
        }
    }
}
