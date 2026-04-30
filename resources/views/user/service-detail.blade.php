@extends('layouts.userLayouts')

@section('content')
    <div class="page-section">

        <h2 class="page-title-elegant">
            {{ $service->name }}
        </h2>

        <div class="row align-items-center">

            <div class="col-md-6">
                <div class="shadow rounded overflow-hidden">
                    <img src="{{ $service->image_url }}" class="w-100" style="height:400px; object-fit:cover;">

                </div>
            </div>

            <div class="col-md-6">

                <p class="text-muted fs-5">
                    {{ $service->short_description }}
                </p>

                <div class="mt-3">
                    {!! $service->description !!}
                </div>

            </div>

        </div>
        @include('partials.footer-brands')

    </div>
@endsection
