<ul class="flex gap-4">
    @foreach ($menuItems as $routePath => $item)
        <x-footer.nav-item :href="route($routePath)">{{ $item }}</x-footer.nav-item>
    @endforeach
</ul>
