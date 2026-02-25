<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>
body {
    font-family: DejaVu Sans, sans-serif;
    font-size: 9px;
    margin: 20px;
}

/* ================= HEADER ================= */
.header {
    width: 100%;
    border-bottom: 2px solid #0dcaf0;
    padding-bottom: 10px;
    margin-bottom: 15px;
}

.header-table {
    width: 100%;
}

.header-table td {
    border: none;
    vertical-align: middle;
}

.logo-left img,
.logo-right img {
    max-height: 60px;
}

.header-title {
    text-align: center;
}

.header-title h2 {
    margin: 0;
    font-size: 16px;
    font-weight: bold;
}

.header-title small {
    font-size: 11px;
    color: #555;
}

/* ================= TABLE ================= */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #000;
    padding: 4px;
    text-align: center;
}

thead th {
    background: #17b6cc;
    color: #000;
    font-weight: bold;
}
</style>

</head>

<body>

<!-- ================= HEADER ================= -->
<div class="header">

<table class="header-table">
<tr>

    <!-- BRAND LOGO -->
    <td width="25%" class="logo-left">
        @if($brand->logo)
            <img src="{{ public_path('storage/'.$brand->logo) }}">
        @endif
    </td>

    <!-- TITLE -->
    <td width="50%" class="header-title">
        <h2>Brosur Spesifikasi Seri {{ $brand->name }}</h2>
        <small>Diesel Generator Specification Catalog</small>
    </td>

    <!-- COMPANY LOGO -->
    <td width="25%" class="logo-right" style="text-align:right;">
        <img src="{{ public_path('genset-website/imgGenset/logo.png') }}">
    </td>

</tr>
</table>

</div>

<!-- ================= TABLE ================= -->
<table>

<thead>

<tr>
    <th rowspan="3">Image</th>
    <th rowspan="3">Model</th>
    <th rowspan="3">Engine</th>
    <th rowspan="3">Alternator</th>

    <th colspan="4">
        Output<br>
        400/230V 50Hz 1500rpm
    </th>

    <th rowspan="3">
        100% Load<br>
        Fuel Consumption (L/h)
    </th>

    <th colspan="4">OPEN TYPE</th>
    <th colspan="4">SILENT TYPE</th>
</tr>

<tr>
    <th colspan="2">KVA</th>
    <th colspan="2">KW</th>

    <th colspan="3">L x W x H (mm)</th>
    <th>Weight</th>

    <th colspan="3">L x W x H (mm)</th>
    <th>Weight</th>
</tr>

<tr>
    <th>PRP</th>
    <th>ESP</th>
    <th>PRP</th>
    <th>ESP</th>

    <th>L</th>
    <th>W</th>
    <th>H</th>
    <th>(Kg)</th>

    <th>L</th>
    <th>W</th>
    <th>H</th>
    <th>(Kg)</th>
</tr>

</thead>

<tbody>
@foreach($brand->specs as $spec)
<tr>

    <!-- IMAGE -->
    <td>
        @php
            $imageUrl = $spec->image_url;
            $imagePath = public_path(parse_url($imageUrl, PHP_URL_PATH));
        @endphp

        @if(file_exists($imagePath))
            <img src="{{ $imagePath }}" height="45">
        @endif
    </td>

    <td>{{ $spec->model }}</td>
    <td>{{ $spec->engine }}</td>
    <td>{{ $spec->alternator }}</td>

    <td>{{ $spec->prp_kva }}</td>
    <td>{{ $spec->esp_kva }}</td>
    <td>{{ $spec->prp_kw }}</td>
    <td>{{ $spec->esp_kw }}</td>

    <td>{{ $spec->fuel }}</td>

    <td>{{ $spec->l_open }}</td>
    <td>{{ $spec->w_open }}</td>
    <td>{{ $spec->h_open }}</td>
    <td>{{ $spec->kg_open }}</td>

    <td>{{ $spec->l_silent }}</td>
    <td>{{ $spec->w_silent }}</td>
    <td>{{ $spec->h_silent }}</td>
    <td>{{ $spec->kg_silent }}</td>

</tr>
@endforeach
</tbody>

</table>

</body>
</html>