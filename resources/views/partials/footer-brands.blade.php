<div class="brands text-center">
    <div class="fw-bold mb-2">Powered by</div>

    <div class="brand-footer-wrapper">
        @foreach ($footerBrands as $brand)
            @php
                $logo = $brand->logo
                    ? asset('storage/' . $brand->logo)
                    : asset('genset-website/img/brand/' . $brand->slug . '.png');
            @endphp

            <a href="{{ route('user.genset.detail', $brand->slug) }}" class="brand-footer-item">
                <img src="{{ $logo }}" alt="{{ $brand->name }}">
            </a>
        @endforeach
    </div>
</div>
