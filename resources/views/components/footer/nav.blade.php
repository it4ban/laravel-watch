@php
    $menuItems = collect(config('watch.nav_items'))->reject(
        fn($label, $routePath) => in_array($routePath, ['login', 'register']),
    );
@endphp

<ul class="flex gap-4">
    @foreach ($menuItems as $routePath => $item)
        <x-footer.nav-item :href="route($routePath)">{{ $item }}</x-footer.nav-item>
    @endforeach
</ul>
