<?php

namespace App\Http\Controllers;

use App\Models\CompanyProfile;
use App\Models\CompanyValue;
use App\Models\VisionMission;
use App\Models\Gallery;
use App\Models\HomepageSetting;
use App\Models\HomepageService;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
        $homepage = HomepageSetting::orderBy('id')->first();
        $services = HomepageService::where('is_active', true)
        ->orderBy('order')
        ->get();
        $visionMission = VisionMission::latest()->first();

        // HANYA gallery yang is_active = 1
        $galleries = Gallery::where('is_active', true)
            ->latest()          // kalau mau berdasarkan created_at, bisa diganti ->orderBy('id','desc')
            ->get();
        
        return view('user.home', [
            'homepage'      => $homepage,
            'services'      => $services,
            'visionMission' => $visionMission,
            'galleries'     => $galleries,

        ]);
    }

    
        public function about()
    {
        $profile = CompanyProfile::first();

        return view('user.about', [
            'profile' => $profile
        ]);
    }

    public function blog()
    {
        $posts = Post::where('status', 'published')
            ->latest()
            ->paginate(6);

        return view('user.blog', compact('posts'));
    }

    // BLOG DETAIL
    public function blogDetail($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('status', 'published')
            ->firstOrFail();

        return view('user.blog-detail', compact('post'));
    }

}
