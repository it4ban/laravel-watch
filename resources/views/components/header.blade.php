@php
    $menuItems = $menuItems->reject(fn($label, $routePath) => in_array($routePath, ['terms', 'privacy']));
@endphp

<header class="fixed inset-x-0 bg-white border-b border-gray-300">
    <div class="container flex items-center justify-between p-4">
        <x-logo />

        <x-nav :$menuItems />
    </div>
</header>
