@extends('layouts.userLayouts')

@section('content')

<style>
.detail-wrapper {
    padding: 40px 0;
}

.detail-card {
    background: #fff;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.06);
}

.detail-img {
    width: 100%;
    max-height: 420px;
    object-fit: contain;
}

.spec-table td {
    padding: 8px 12px;
}
.spec-table td:first-child {
    font-weight: 600;
    width: 220px;
}
</style>

<div class="page-section detail-wrapper">

    <div class="breadcrumb-custom">
        Genset /
        <a href="{{ route('user.genset.detail',$brand->slug) }}">
            {{ $brand->name }}
        </a>
        /
        <strong>{{ $spec->model }}</strong>
    </div>

    <div class="detail-card">

        <div class="row">

            <div class="col-md-6 text-center">
                <img src="{{ $spec->image_url }}"
                     class="detail-img">
            </div>

            <div class="col-md-6">

                <h2>{{ $spec->model }}</h2>
                <p><strong>Engine:</strong> {{ $spec->engine }}</p>
                <p><strong>Alternator:</strong> {{ $spec->alternator }}</p>

                <hr>

                <h5>Output</h5>
                <table class="table spec-table">
                    <tr>
                        <td>PRP (KVA)</td>
                        <td>{{ $spec->prp_kva }}</td>
                    </tr>
                    <tr>
                        <td>ESP (KVA)</td>
                        <td>{{ $spec->esp_kva }}</td>
                    </tr>
                    <tr>
                        <td>PRP (KW)</td>
                        <td>{{ $spec->prp_kw }}</td>
                    </tr>
                    <tr>
                        <td>ESP (KW)</td>
                        <td>{{ $spec->esp_kw }}</td>
                    </tr>
                    <tr>
                        <td>Fuel (L/H)</td>
                        <td>{{ $spec->fuel }}</td>
                    </tr>
                </table>

                <hr>

                <h5>Open Type</h5>
                <table class="table spec-table">
                    <tr>
                        <td>Dimension (L x W x H)</td>
                        <td>{{ $spec->l_open }} x {{ $spec->w_open }} x {{ $spec->h_open }} mm</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>{{ $spec->kg_open }} kg</td>
                    </tr>
                </table>

                <hr>

                <h5>Silent Type</h5>
                <table class="table spec-table">
                    <tr>
                        <td>Dimension (L x W x H)</td>
                        <td>{{ $spec->l_silent }} x {{ $spec->w_silent }} x {{ $spec->h_silent }} mm</td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>{{ $spec->kg_silent }} kg</td>
                    </tr>
                </table>

            </div>

        </div>

    </div>

</div>

@endsection