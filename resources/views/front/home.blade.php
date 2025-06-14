@extends('layouts.front')

@section('content')
    <div class="relative overflow-hidden g-no-repeat bg-cover bg-center bg-gray-500 bg-blend-multiply rtl-bg-flip" style="background-image: url({{ asset('images/hero-home.webp') }});">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between py-8  lg:py-16">
                <div class="max-w-2xl text-center ">
                    <h1 class="mb-6 text-2xl md:text-4xl font-extrabold tracking-tight text-gray-200 sm:text-5xl lg:text-6xl">
                        {{ __('Empowering UAE Workforces') }}
                    </h1>
                    <p class="mb-8 text-base md:text-xl leading-relaxed text-gray-300">
                        {{ __('Reliable manpower solutions for civil, mechanical, and industrial sectors, serving both local and international clients.') }}
                    </p>
                </div>
                <div class="flex justify-center gap-4">
                    <div class="text-center">
                        <a class="inline-flex justify-center items-center gap-x-2 text-center bg-blue-600 hover:bg-blue-700 shadow-lg shadow-transparent border border-transparent text-white text-sm font-medium rounded-full focus:outline-hidden py-3 px-6" href="#">
                            {{ __('Get Started') }}
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </div>
                    <a href="{{ route('front.contact') }}" class="py-3 px-6 text-sm inline-flex items-center justify-center rounded-full border-2 border-white bg-transparent font-medium text-white transition-colors hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2">
                        {{ __('Contact Us') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
