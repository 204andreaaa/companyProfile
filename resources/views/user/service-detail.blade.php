@extends('layouts.userLayouts')

@section('content')
    <div class="page-section detail-page service-detail-page">
        <div class="detail-page-inner">

        <h2 class="page-title-elegant">
            {{ $service->name }}
        </h2>

        <div class="row detail-content-row">

            <div class="col-lg-6">
                <div class="detail-media-box">
                    <img src="{{ $service->image_url }}" class="detail-media-img" alt="{{ $service->name }}">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="detail-copy">

                <p class="text-muted fs-5">
                    {{ $service->short_description }}
                </p>

                <div class="mt-3">
                    {!! $service->description !!}
                </div>

                </div>
            </div>

        </div>
        @include('partials.footer-brands')
        </div>

    </div>
@endsection
