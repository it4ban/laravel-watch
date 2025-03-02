@php
    $menuItems = collect(config('watch.nav_items'))->reject(
        fn($label, $routePath) => in_array($routePath, ['terms', 'privacy']),
    );
@endphp

<nav>
    <ul class="flex gap-8">
        @foreach ($menuItems as $routePath => $item)
            <x-nav.item :href="route($routePath)" :is-active="request()->routeIs($routePath)">{{ $item }}</x-nav.item>
        @endforeach
    </ul>
</nav>
