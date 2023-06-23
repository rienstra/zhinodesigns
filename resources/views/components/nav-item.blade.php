@props(['route', 'isActive' => false])

@php
    $currentRouteName = request()->route()->getName();
    $rootRoute = str($currentRouteName)
        ->before('.')
        ->toString();

    $isActive = $rootRoute === $route || request()->routeIs($route);
    $route = route($route);
@endphp

<a href="{{ $route }}" @class([
    'block border-l-4 border-transparent py-2 pr-4 text-base font-regular',
    'text-gray-600 underline' => $isActive,
    'text-gray-600' => ! $isActive,
])>
    {{ $slot }}
</a>
