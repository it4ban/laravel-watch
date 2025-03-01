@php
    $menuItems = collect([
        'home' => 'Home',
        'courses' => 'Courses',
        'contacts' => 'Contacts',
        'login' => 'Login',
        'register' => 'Register',
        'terms' => 'Terms',
        'privacy' => 'Privacy',
    ]);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <x-header :$menuItems />

    <main class="h-screen grid place-items-center text-7xl font-bold">
        {{ $slot }}
    </main>

    <x-footer :$menuItems />
</body>

</html>
