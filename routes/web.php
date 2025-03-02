<?php

use Illuminate\Support\Facades\Route;

$courses = [
    [
        'title' => 'Course 1',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, sed.',
        'lessons_count' => 21,
        'length' => '2h 30min',
    ],
    [
        'title' => 'Course 2',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, sed.',
        'lessons_count' => 18,
        'length' => '1h 40min',
    ],
    [
        'title' => 'Course 3',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, sed.',
        'lessons_count' => 16,
        'length' => '1h 20min',
    ],
    [
        'title' => 'Course 4',
        'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatem, sed.',
        'lessons_count' => 10,
        'length' => '40min',
    ],
];

Route::get(
    '/',
    fn() => view('index', ['courses' => $courses])
)->name('home');

Route::get(
    '/courses',
    fn() =>
    view('courses', ['courses' => $courses])
)->name('courses');

Route::get(
    '/course',
    fn() =>
    view('course', ['course' => $courses[0]])
)->name('course');

Route::view('/contacts', 'contacts')->name('contacts');
Route::view('/login', 'login')->name('login');
Route::view('/register', 'register')->name('register');
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');
