<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<section class="flex gap-8 justify-center items-center p-9 font-medium text-xl border-b-black border">
    <div>
        <a href="/" class="text-2xl text-blue-900 font-bold">
            Ecommerce
        </a>
    </div>
    <x-menu></x-menu>
    <div>
        <form method="GET" action="#">
            <input type="text" name="search" placeholder="Find Products"
                class="bg-transparent placeholder-black font-semibold text-sm border border-solid border-black p-2 rounded-md">
        </form>
    </div>
    <div class="flex gap-5 justify-between items-center">
        @auth
        <span class="hover:text-red-800">Welcome, {{ auth()->user()->name }}!</span>
        <form method="POST" action="/logout">
            @csrf
            <button type="submit">
                Log Out
            </button>
        </form>
        @if (auth()->user()->is_admin)
        <a href="/admin">Dashboard</a>
        @endif
        @else
        <a href="/register">
            Register
        </a>
        <a href="/login">
            Log In
        </a>
        @endauth
    </div>
</section>