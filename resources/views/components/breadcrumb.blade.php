@props(['items', 'color' => 'primary'])
@php
    $colorClass = match($color) {
        'primary' => 'text-primary',
        'warning' => 'text-warning',
        'success' => 'text-success',
        'danger' => 'text-danger',
        default => 'text-primary',
    };
    $activeClass = 'fw-bold '.$colorClass;
@endphp
<nav aria-label="breadcrumb" class="mb-3">
    <ol class="breadcrumb bg-white bg-opacity-75 px-3 py-2 rounded-3 shadow-sm align-items-center" style="backdrop-filter: blur(2px);">
        @foreach ($items as $item)
            @if (!$loop->last)
                <li class="breadcrumb-item">
                    <a href="{{ $item['url'] }}" class="fw-semibold {{ $colorClass }} text-decoration-none">{!! $item['label'] !!}</a>
                </li>
            @else
                <li class="breadcrumb-item active {{ $activeClass }}" aria-current="page">{!! $item['label'] !!}</li>
            @endif
        @endforeach
    </ol>
</nav>
