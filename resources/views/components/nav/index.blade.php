<nav>
    <ul class="flex gap-8">
        @foreach ($menuItems as $routePath => $item)
            <x-nav.item :href="route($routePath)">{{ $item }}</x-nav.item>
        @endforeach
    </ul>
</nav>
