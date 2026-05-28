@extends('layouts.userLayouts')

@section('content')
<div class="page-section detail-page blog-detail-page">
    <div class="detail-page-inner">

    {{-- BREADCRUMB --}}
    <div class="breadcrumb-custom mb-3">
        <a href="{{ route('blog') }}">Blog</a>
        / <strong>{{ $post->title }}</strong>
    </div>

    {{-- IMAGE --}}
    <div class="detail-media-box">
        <img
            src="{{ $post->image_path
                ? asset('storage/'.$post->image_path)
                : asset('genset-website/imgGenset/1.jpg') }}"
            class="detail-media-img"
            alt="{{ $post->title }}">
    </div>

    {{-- TITLE --}}
    <div class="blog-title mb-2">
        {{ $post->title }}
    </div>

    {{-- META --}}
    <p class="text-muted mb-3">
        Diposting pada {{ $post->created_at->format('d M Y') }}
    </p>

    {{-- CONTENT --}}
    <div class="blog-content">
        {!! $post->body !!}
    </div>
    @include('partials.footer-brands')
    </div>
</div>
@endsection
