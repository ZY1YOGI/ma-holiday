<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session()->get('theme') }}" data-theme="{{ session()->get('theme') }}">
<head>
    {{-- Charset --}}
    <meta charset="UTF-8" />
    {{-- ViewPort --}}
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- CSRF Token --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    {{-- Author --}}
    <meta name="author" content="Youssef Amjad" />
    <link rel="author" href="https://www.facebook.com/ZY1YOGi" />
    {{-- Description --}}
    <meta name="description" content="{{ $description }}" />
    {{-- Keywords --}}
    <meta name="keywords" content="{{ $keywords }}" />
    {{-- Title --}}
    <title>{{ config('app.name') . ' | ' . $title }}</title>
    {{-- Icon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon" />
    {{-- Fonts Google --}}
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap" />
    {{-- Robots --}}
    <meta name="robots" content="index, follow" />
    {{-- Manifest --}}
    <link rel="manifest" href="{{ asset('manifest.json') }}" />
    {{-- Application Name --}}
    <meta name="application-name" content="{{ config('app.name') }}" />
    {{-- Theme --}}
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#0E1422" />
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#E4E9F7" />
    {{-- Aosjs --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    {{-- Alpinejs --}}
    <script src="https://unpkg.com/alpinejs@3.13.3/dist/cdn.min.js" defer></script>
    {{-- Scripts And Styls --}}
    @vite(['resources/css/app.css', 'resources/ts/app.ts'])
</head>
<body class="antialiased text-black bg-body-light dark:bg-body-dark dark:text-white">
    {{ $slot }}
</body>
</html>
