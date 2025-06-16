@extends('layouts.front')

@section('title', __('Your Workforce Partner Awaits'))
@section('description', __('Get in touch with Tamouh Employment for manpower supply, recruitment services, and staffing support across the UAE. We\'re here to assist employers and job seekers alike.'))
@section('og_title', __('Your Workforce Partner Awaits'))
@section('og_description', __('Get in touch with Tamouh Employment for manpower supply, recruitment services, and staffing support across the UAE. We\'re here to assist employers and job seekers alike.'))

@section('content')

    <div class="max-w-7xl px-4 sm:px-6 lg:px-8 py-4 lg:py-8 mx-auto">
        <div class="mb-6 sm:mb-10 max-w-2xl text-center mx-auto">
            <h2 class="font-medium text-black text-2xl sm:text-4xl">
                {{ __('Let\'s Work Together') }}
            </h2>
            <p class="text-gray-500 sm:text-xl">
                {{ __('Whether you\'re hiring or job-hunting, our team is ready to support you every step of the way.') }}
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 lg:items-center gap-6 md:gap-8 lg:gap-12">
            <div class="aspect-w-16 aspect-h-6 lg:aspect-h-14 overflow-hidden bg-gray-100 rounded-2xl">
                <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl" src="{{ asset('images/contact.jpg') }}" alt="{{ __('Contact Tamouh Employment') }}">
            </div>

            <div class="space-y-8 lg:space-y-16">
                <div>
                    <h3 class="mb-5 font-semibold text-black">
                        {{ __('Our address') }}
                    </h3>

                    <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                        <div class="flex gap-4">
                            <svg class="shrink-0 size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>

                            <div class="grow">
                                <p class="text-sm text-gray-600">
                                    {{ __('United Arab Emirates') }}
                                </p>
                                <address class="mt-1 text-black not-italic">
                                    {{ __('Building No 6, 9th Floor, Office 901') }}<br>
                                    {{ __('Barqa An Nisil St, Al Nahyan, Abu Dhabi') }}
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="mb-5 font-semibold text-black">
                        {{ __('Our contacts') }}
                    </h3>

                    <div class="grid sm:grid-cols-2 gap-4 sm:gap-6 md:gap-8 lg:gap-12">
                        <div class="flex gap-4">
                            <svg class="shrink-0 size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path>
                                <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
                            </svg>

                            <div class="grow">
                                <p class="text-sm text-gray-600">
                                    {{ __('Email us') }}
                                </p>
                                <p>
                                    <a class="relative inline-block font-medium text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-green-400 hover:before:bg-red-400 focus:outline-hidden focus:before:bg-red-400" href="mailto:info.tamouh@gmail.com">
                                        info.tamouh@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>

                        <div class="flex gap-4">
                            <svg class="shrink-0 size-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                            </svg>

                            <div class="grow">
                                <p class="text-sm text-gray-600">
                                    {{ __('Call us') }}
                                </p>
                                <p>
                                    <a dir="ltr" class="relative inline-block font-medium text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-green-400 hover:before:bg-red-400 focus:outline-hidden focus:before:bg-red-400" href="tel:++97126331559">
                                        +971 2 6331 559
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-w-7xl px-4 sm:px-6 lg:px-8 py-4 lg:py-8 mx-auto">
        <div class="max-w-2xl lg:max-w-5xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl">
                    {{ __('Where Connections Begin') }}
                </h1>
                <p class="mt-1 text-gray-600">
                    {{ __('Our doors are open in the heart of Abu Dhabi, drop by, meet our team, and take the next step toward reliable recruitment solutions.') }}
                </p>
            </div>
            <div id="map" class="w-full h-[500px] mt-8 rounded-lg"></div>
        </div>
    </div>

@endsection

@section('bodyScripts')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        const map = L.map('map').setView([24.46346782, 54.3859619], 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        L.marker([24.46346782, 54.3859619]).addTo(map)
            .bindPopup('Tamouh Employement LLC SPC - Abu Dhabi, UAE')
            .openPopup();
    </script>
@endsection
