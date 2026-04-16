<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Support\OptimizedImageStorage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id')->get();
        return view('admin.service.index', compact('services'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }


    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'type' => $request->type,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'is_active' => $request->is_active,
        ];

        // HANDLE IMAGE
        if ($request->hasFile('image')) {

            // hapus image lama
            if ($service->image && Storage::exists('public/' . $service->image)) {
                Storage::delete('public/' . $service->image);
            }

            $data['image'] = OptimizedImageStorage::store($request->file('image'), 'services', [
                'max_width' => 1600,
                'max_height' => 1200,
                'quality' => 84,
            ]);
        }

        $service->update($data);

        return back()->with('success', 'Service updated!');
    }


}
