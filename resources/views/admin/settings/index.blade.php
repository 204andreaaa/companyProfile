@extends('layouts.admin')

@section('content')

<div class="section-body">

    <div class="section-header mb-4">
        <h1 class="h3">Website Settings</h1>
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <form action="{{ route('admin.settings.update') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <!-- LEFT COLUMN -->
                    <div class="col-lg-8 col-md-12">

                        <!-- LOGO -->
                        <div class="mb-4">
                            <label class="font-weight-bold">Logo</label><br>

                            @if($settings->logo_url)
                                <div class="mb-3">
                                    <img src="{{ $settings->logo_url }}"
                                        style="max-height:80px; width:auto; object-fit:contain;">
                                </div>
                            @endif

                            <input type="file" name="logo" class="form-control">
                        </div>

                        <!-- WHATSAPP -->
                        <div class="mb-4">
                            <label class="font-weight-bold">WhatsApp Number</label>
                            <input type="text"
                                   name="whatsapp_number"
                                   class="form-control"
                                   value="{{ $settings->whatsapp_number }}">
                        </div>

                        <!-- Tamplate Pesan WHATSAPP -->
                        <div class="mb-3">
                            <label>WhatsApp Message Template</label>
                            <textarea
                                name="wa_template"
                                id="wa_template"
                                class="form-control summernote"
                            >{{ old('wa_template', $settings->wa_template ?? '') }}</textarea>

                            <small class="text-muted">
                                Gunakan placeholder: {name}, {brand}, {model}, {note}
                            </small>
                        </div>

                        <!-- NAME ADDRESS -->
                        <div class="mb-4">
                            <label class="font-weight-bold">Location Name</label>
                            <input type="text"
                                name="location_name"
                                class="form-control"
                                value="{{ $settings->location_name }}"> 
                        </div>

                        <!-- ADDRESS -->
                        <div class="mb-4">
                            <label class="font-weight-bold">Address</label>
                            <textarea name="address"
                                      class="form-control"
                                      rows="3">{{ $settings->address }}</textarea>
                        </div>

                        <!-- CONTACT FOOTER BRAND NAMES -->
                        <div class="mb-4">
                            <label class="font-weight-bold">Contact Footer Brand Names</label>
                            <textarea name="contact_footer_names"
                                      class="form-control"
                                      rows="4"
                                      placeholder="Kubota&#10;Perkins&#10;Mitsubishi&#10;MTU&#10;Himoinsa">{{ old('contact_footer_names', $settings->contact_footer_names ?? '') }}</textarea>
                            <small class="text-muted">
                                Satu nama per baris. Kalau dikosongkan, footer Contact otomatis memakai nama brand aktif dari menu Genset.
                            </small>
                        </div>

                        <!-- THEME COLORS -->
                        <div class="mb-4">
                            <label class="font-weight-bold">Website Theme Colors</label>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="small text-muted mb-1">Navbar Color Start</label>
                                    <input type="color"
                                           name="navbar_color_start"
                                           class="form-control"
                                           value="{{ old('navbar_color_start', $settings->navbar_color_start ?? '#5aa1e3') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="small text-muted mb-1">Navbar Color End</label>
                                    <input type="color"
                                           name="navbar_color_end"
                                           class="form-control"
                                           value="{{ old('navbar_color_end', $settings->navbar_color_end ?? '#2f6fb1') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="small text-muted mb-1">Button Color</label>
                                    <input type="color"
                                           name="button_color"
                                           class="form-control"
                                           value="{{ old('button_color', $settings->button_color ?? '#b91c1c') }}">
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="small text-muted mb-1">Button Text Color</label>
                                    <input type="color"
                                           name="button_text_color"
                                           class="form-control"
                                           value="{{ old('button_text_color', $settings->button_text_color ?? '#ffffff') }}">
                                </div>
                            </div>
                            <small class="text-muted">
                                Warna ini berlaku untuk navbar dan tombol utama di website.
                            </small>
                        </div>

                        <!-- MAP ZOOM -->
                        <div class="mb-4">
                            <label class="font-weight-bold">Map Zoom Level</label>
                            <select name="map_zoom" class="form-control">
                                @for($i=14;$i<=19;$i++)
                                    <option value="{{ $i }}"
                                        {{ $settings->map_zoom == $i ? 'selected' : '' }}>
                                        Zoom {{ $i }}
                                    </option>
                                @endfor
                            </select>
                        </div>

                        <!-- BUTTON -->
                        <div class="mt-4">
                            <button class="btn btn-primary px-4">
                                Update Settings
                            </button>
                        </div>

                    </div>

                </div>

            </form>

        </div>
    </div>


    <!-- HISTORY CARD -->
    <div class="card mt-4 shadow-sm border-0">
        <div class="card-body">

            <h6 class="mb-3">History</h6>

            <div class="row text-center text-md-left">

                <div class="col-md-6 mb-3 mb-md-0">
                    <strong>Created</strong><br>
                    <span class="text-muted">
                        {{ optional($settings->created_at)->format('d M Y H:i') ?? '-' }}
                    </span>
                </div>

                <div class="col-md-6">
                    <strong>Last Updated</strong><br>
                    <span class="text-muted">
                        {{ optional($settings->updated_at)->format('d M Y H:i') ?? '-' }}
                    </span>
                </div>

            </div>

        </div>
    </div>

</div>

@endsection
@push('scripts')
@if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
                timer: 1500,
                showConfirmButton: false
            });
        </script>
    @endif
@endpush
