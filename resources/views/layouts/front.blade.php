<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', locale()) }}"@if(locale() === 'ar') dir="rtl"@endif>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {{-- Title Tag --}}
        <title>@yield('title', __('Communication Agency in Marrakech - Web Solutions Experts')) | {{ config('app.name') }}</title>
        {{-- Meta Description --}}
        <meta name="description" content="@yield('description', __('Leading communication agency in Marrakech, offering expert web solutions to help your business grow online. Discover our services today!'))">
        {{-- Meta Robots: --}}
        <meta name="robots" content="index, follow">
        {{-- Open Graph Tags (for social media optimization) --}}
        <meta property="og:title" content="@yield('og_title', __('Communication Agency in Marrakech - Web Solutions Experts')) | {{ config('app.name') }}">
        <meta property="og:description" content="@yield('og_description', __('Leading communication agency in Marrakech, offering expert web solutions to help your business grow online. Discover our services today!'))">
        <meta property="og:image" content="@yield('og_image', url('assets/logos/alter-web-logo.svg'))">
        <meta property="og:image:alt" content="{{ config('app.name') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:locale" content="{{ app()->getLocale() }}">

        {{-- Favicon --}}
        <link rel="icon" type="image/svg" href="{{ asset('assets/favicons/alter-web-favicon.svg') }}">

        {{-- Google fonts --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=@if(locale() === 'ar'){{ Str::replace(' ', '+', config('app.arabic_font_family')) }}@else{{ Str::replace(' ', '+', config('app.latin_font_family')) }}@endif:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        {{-- Vite JS and CSS --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @yield('headScripts')
    </head>
    <body @class([
            'antialiased',
            'font-'.Str::slug(config('app.latin_font_family')) => locale() !== 'ar',
            'font-'.Str::slug(config('app.arabic_font_family')) => locale() === 'ar',
    ])>
        {{-- Header --}}
        @include('layouts.header')

        {{-- Main Content --}}
        @yield('content')

        @yield('bodyScripts')
    </body>
</html>