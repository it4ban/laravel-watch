@php
    $menuItems = $menuItems->reject(fn($label, $routePath) => in_array($routePath, ['login', 'register']));
@endphp

<footer class="bg-purple-600">
    <div class="flex flex-col gap-8 container py-10 px-4">
        <div class="flex items-center gap-8 justify-between">
            <x-footer.nav :$menuItems />
            <x-footer.social />
        </div>
        <div class="text-center">
            <x-footer.copyright />
        </div>
    </div>
</footer>
