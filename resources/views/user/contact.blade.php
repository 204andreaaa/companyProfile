@extends('layouts.userLayouts')
@section('content')
    <!-- ===== PAGE CONTENT ===== -->
    <div class="page-section">
        <div class="row g-4">

            <!-- CONTACT FORM -->
            <div class="col-md-7">
                <div class="contact-title">CONTACT US</div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form class="contact-form" action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="subject" placeholder="Subject" required>
                    <textarea name="message" placeholder="Message" required></textarea>
                    <button type="submit" class="btn-submit mt-2">Submit</button>
                </form>
            </div>

            <!-- MAP -->
            <div class="col-md-5">
                <div class="contact-title">FIND US</div>
                    <div class="map-box">
                        @if($settings?->map_embed_url)
                            <iframe
                                src="{{ $settings->map_embed_url }}"
                                width="100%"
                                height="100%"
                                style="border:0;"
                                loading="lazy">
                            </iframe>
                        @else
                            <div class="text-muted">Map not configured.</div>
                        @endif
                    </div>

                <div class="address">
                    <strong>
                    {!! nl2br(e($settings?->address)) !!}    
                    </strong><br>
                </div>
            </div>
        </div>
    </div>
@endsection
