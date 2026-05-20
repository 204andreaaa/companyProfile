@php
    $configuredNames = preg_split('/\r\n|\r|\n|,/', $globalSettings?->contact_footer_names ?? '');
    $contactFooterNames = collect($configuredNames)
        ->map(fn ($name) => trim($name))
        ->filter()
        ->values();

    if ($contactFooterNames->isEmpty()) {
        $contactFooterNames = $footerBrands->pluck('name')->filter()->values();
    }

    $brandsByName = $footerBrands->keyBy(fn ($brand) => mb_strtolower($brand->name));
@endphp

@if ($contactFooterNames->isNotEmpty())
    <div class="contact-footer-names">
        @foreach ($contactFooterNames as $name)
            @php
                $brand = $brandsByName->get(mb_strtolower($name));
            @endphp

            @if ($brand)
                <a href="{{ route('user.genset.detail', $brand->slug) }}">{{ $name }}</a>
            @else
                <span>{{ $name }}</span>
            @endif
        @endforeach
    </div>
@endif
