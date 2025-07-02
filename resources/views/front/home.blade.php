@extends('layouts.front')

@section('content')
    <div class="relative overflow-hidden g-no-repeat bg-cover bg-center bg-gray-500 bg-blend-multiply rtl-bg-flip" style="background-image: url({{ asset('images/hero-home.jpg') }});">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between py-8  lg:py-16">
                <div class="max-w-2xl text-center">
                    <h1 class="mb-6 text-2xl md:text-4xl font-extrabold tracking-tight text-gray-200 sm:text-5xl lg:text-6xl">
                        {{ __('Your Trusted UAE Manpower Partner') }}
                    </h1>
                    <p class="mb-8 text-base md:text-xl leading-relaxed text-gray-300">
                        {{ __('Reliable manpower solutions for civil, mechanical, and industrial sectors, serving both local and international clients.') }}
                    </p>
                </div>
                <div class="flex justify-center gap-4">
                    <div class="text-center">
                        <a class="inline-flex justify-center items-center gap-x-2 text-center bg-primary-700 hover:bg-primary-800 shadow-lg shadow-transparent border border-transparent text-white text-sm font-medium rounded-full focus:outline-hidden py-3 px-6" href="#">
                            {{ __('Get Started') }}
                            <svg class="shrink-0 size-4 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </a>
                    </div>
                    <a href="{{ route('front.contact') }}" class="py-3 px-6 text-sm inline-flex items-center justify-center rounded-full border-2 border-white bg-transparent font-medium text-white transition-colors hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2">
                        {{ __('Contact Us') }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center sm:py-8 lg:px-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">{{ __('What We Deliver') }}</h2>
            <p class="text-gray-500 sm:text-xl">{{ __('Smart staffing solutions tailored to your industry needs.') }}</p>
            <div class="mt-8 lg:mt-12 space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                <div>
                    <svg class="mx-auto mb-4 w-12 h-12 text-primary-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd" />
                    </svg>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Skilled Workforce') }}</h3>
                    <p class="mb-4 text-gray-500">{{ __('From labourers to hospitality staff, ready for deployment.') }}</p>
                </div>
                <div>
                    <svg class="mx-auto mb-4 w-12 h-12 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z"></path>
                        <path fill-rule="evenodd" d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm3 4a1 1 0 000 2h.01a1 1 0 100-2H7zm3 0a1 1 0 000 2h3a1 1 0 100-2h-3zm-3 4a1 1 0 100 2h.01a1 1 0 100-2H7zm3 0a1 1 0 100 2h3a1 1 0 100-2h-3z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Full-Service Support') }}</h3>
                    <p class="mb-4 text-gray-500">{{ __('Recruitment, visa, payroll & accommodation under one roof.') }}</p>
                </div>
                <div>
                    <svg class="mx-auto mb-4 w-12 h-12 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <h3 class="mb-2 text-xl font-bold">{{ __('UAE Expertise') }}</h3>
                    <p class="mb-4 text-gray-500">{{ __('Serving top companies in Abu Dhabi, Dubai & beyond.') }}</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="gap-16 items-center py-4 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-8 lg:px-6">
            <div class="font-light text-gray-500 sm:text-lg">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">{{ __('About Us') }}</h2>
                <p class="mb-4">
                    {{ __('Tamouh Employment LLC, led by Engr. Mohamed El Bahrawy, has grown from humble beginnings into one of the UAE\'s most trusted names in manpower supply and recruitment. With operations in Abu Dhabi, Dubai, and other Emirates, we specialize in connecting businesses with the right talent, at the right time.') }}
                </p>
                <p>
                    {{ __('From laborers to hospitality professionals, we provide skilled manpower across various sectors, tailored to each client\'s specific needs. Our services cover short, medium, and long-term contract staffing, ensuring flexibility and quality in every placement.') }}
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 mt-8">
                <img class="w-full rounded-lg" src="{{ asset('images/about-1.jpg') }}" alt="{{ __('UAE manpower supply') }}">
                <img class="mt-4 w-full lg:mt-10 rounded-lg" src="{{ asset('images/about-2.jpg') }}" alt="{{ __('UAE employment agency') }}">
            </div>
        </div>
    </section>

    <section>
        <div class="max-w-5xl px-4 xl:px-0 py-4 lg:pt-8 lg:py-8 mx-auto">
            <div class="mb-4 lg:mb-8">
                <h2 class=" font-semibold text-2xl md:text-4xl md:leading-tight">{{ __('Connecting Ambition with Opportunity') }}</h2>
                <p class="mt-1 text-gray-500">
                    {{ __('Our mission is to deliver world-class staffing solutions by connecting the right talent with the right opportunities. We strive to be the UAE\'s most innovative and reliable recruitment partner by building lasting, successful relationships with our clients, workforce, and associates, locally and globally.') }}
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 lg:items-center">
                <div class="aspect-w-16 aspect-h-9 lg:aspect-none">
                    <img class="w-full object-cover rounded-xl" src="{{ asset('images/vision.jpg') }}" alt="{{ __('UAE manpower supply') }}">
                </div>

                <div>
                    <div class="mb-4">
                        <h3 class="text-primary-700 text-xs font-medium uppercase">
                            {{ __('How We Work') }}
                        </h3>
                    </div>

                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-primary-600 font-semibold text-xs uppercase rounded-full">
                                    1
                                </span>
                            </div>
                        </div>

                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm lg:text-base text-gray-500">
                                <span class="font-bold">{{ __('Client Needs Analysis:') }}</span>
                                {{ __('We start by understanding your staffing requirements, project scope, and preferred candidate profiles.') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-primary-600 font-semibold text-xs uppercase rounded-full">
                                    2
                                </span>
                            </div>
                        </div>

                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm lg:text-base text-gray-500">
                                <span class="font-bold">{{ __('Talent Sourcing & Screening:') }}</span>
                                {{ __('Our team sources and filters skilled candidates-locally and internationally-based on qualifications and experience.') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-primary-600 font-semibold text-xs uppercase rounded-full">
                                    3
                                </span>
                            </div>
                        </div>

                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm md:text-base text-gray-500">
                                <span class="font-bold">{{ __('Deployment & Logistics:') }}</span>
                                {{ __('We handle visas, accommodation, payroll, and transportation, ensuring workers are ready to join your site on time.') }}
                            </p>
                        </div>
                    </div>

                    <div class="flex gap-x-5 ms-1">
                        <div class="relative last:after:hidden after:absolute after:top-8 after:bottom-0 after:start-4 after:w-px after:-translate-x-[0.5px] after:bg-neutral-800">
                            <div class="relative z-10 size-8 flex justify-center items-center">
                                <span class="flex shrink-0 justify-center items-center size-8 border border-neutral-800 text-primary-600 font-semibold text-xs uppercase rounded-full">
                                    4
                                </span>
                            </div>
                        </div>

                        <div class="grow pt-0.5 pb-8 sm:pb-12">
                            <p class="text-sm md:text-base text-gray-500">
                                <span class="font-bold">{{ __('Ongoing Support:') }}</span>
                                {{ __('We maintain close communication to ensure satisfaction and provide quick replacements or adjustments when needed.') }}
                            </p>
                        </div>
                    </div>

                    <a class="text-white group inline-flex items-center gap-x-2 py-2 px-3 bg-primary-700 font-medium text-sm rounded-full focus:outline-hidden" href="tel:+97124433622">
                        <svg class="shrink-0 size-4 rtl:-rotate-90" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                            <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 group-hover:delay-100 transition" d="M14.05 2a9 9 0 0 1 8 7.94"></path>
                            <path class="opacity-0 group-hover:opacity-100 group-focus:opacity-100 transition" d="M14.05 6A5 5 0 0 1 18 10"></path>
                        </svg>
                        {{ __('Learn More') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center sm:py-8 lg:px-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 ">
                {{ __('Why Choose Us?') }}
            </h2>
            <p class="text-gray-500 sm:text-xl lg:px-48">
                {{ __('We connect you with the right workforce quickly and reliably, supporting your business growth across government and private sectors.') }}
            </p>
            <div class="mt-8 lg:mt-16 mb-8 space-y-8 md:grid md:grid-cols-2 md:gap-12 md:space-y-0">
                <div>
                    <div class="inline-flex justify-center items-center mb-6 w-24 h-24 rounded-lg bg-primary-100 ">
                        <svg class="mx-auto w-16 h-16 text-primary-600" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                            <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold ">
                        {{ __('Trusted Workforce Network') }}
                    </h3>
                    <p class="mb-4 text-gray-500 ">
                        {{ __('Over 5000 skilled professionals ready to meet your staffing needs across multiple industries.') }}
                    </p>
                </div>
                <div>
                    <div class="inline-flex justify-center items-center mb-6 w-24 h-24 bg-purple-100 rounded-lg ">
                        <svg class="mx-auto w-16 h-16 text-purple-600 " fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M9.504 1.132a1 1 0 01.992 0l1.75 1a1 1 0 11-.992 1.736L10 3.152l-1.254.716a1 1 0 11-.992-1.736l1.75-1zM5.618 4.504a1 1 0 01-.372 1.364L5.016 6l.23.132a1 1 0 11-.992 1.736L4 7.723V8a1 1 0 01-2 0V6a.996.996 0 01.52-.878l1.734-.99a1 1 0 011.364.372zm8.764 0a1 1 0 011.364-.372l1.733.99A1.002 1.002 0 0118 6v2a1 1 0 11-2 0v-.277l-.254.145a1 1 0 11-.992-1.736l.23-.132-.23-.132a1 1 0 01-.372-1.364zm-7 4a1 1 0 011.364-.372L10 8.848l1.254-.716a1 1 0 11.992 1.736L11 10.58V12a1 1 0 11-2 0v-1.42l-1.246-.712a1 1 0 01-.372-1.364zM3 11a1 1 0 011 1v1.42l1.246.712a1 1 0 11-.992 1.736l-1.75-1A1 1 0 012 14v-2a1 1 0 011-1zm14 0a1 1 0 011 1v2a1 1 0 01-.504.868l-1.75 1a1 1 0 11-.992-1.736L16 13.42V12a1 1 0 011-1zm-9.618 5.504a1 1 0 011.364-.372l.254.145V16a1 1 0 112 0v.277l.254-.145a1 1 0 11.992 1.736l-1.735.992a.995.995 0 01-1.022 0l-1.735-.992a1 1 0 01-.372-1.364z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-4 text-2xl font-bold">
                        {{ __('Complete Staffing Solutions') }}
                    </h3>
                    <p class="mb-4 text-gray-500">
                        {{ __('We handle accommodation, transport, and support, so your workforce stays focused and productive.') }}
                    </p>
                </div>
            </div>
            <p class="text-center">
                <a href="" class="inline-flex items-center font-medium text-primary-700 hover:text-primary-800">
                    {{ __('Explore our Services') }}
                    <svg class="ml-1 w-5 h-5 rtl:rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                </a>
            </p>
        </div>
    </section>

    <section class="bg-white">
        <div class="py-4 px-4 mx-auto max-w-screen-xl text-center lg:py-8 lg:px-6">
            <div class="mx-auto max-w-screen-sm">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">{{ __('Chairman\'s Message') }}</h2>
            </div>
            <div>
                <blockquote>
                    <p class="text-gray-500 text-sm md:text-xl md:leading-normal text-justify rtl:md:text-right md:text-left mb-4">
                        "{{ __('We believe that the strength of every company large or small is directly proportional to the quality and efficiency of its employees. We adhere to this principle in our own company. Such values have helped us to grow to the level of one of the most dependable Manpower service provider in UAE in a short period. The depth of our infrastructure enables us to recruit highly qualified personnel, locally and internationally.') }}
                    </p>
                    <p class="text-gray-500 text-sm md:text-xl md:leading-normal text-justify rtl:md:text-right md:text-left mb-4">
                        {{ __('Through Tamouh Employment LLC you can enjoy a single point of responsibility for your project requirements with the highest quality standards and industry leading techniques. Our entire team is committed to our core values, which enables us to facilitate full satisfaction to our clients and partners.') }}
                    </p>
                    <p class="text-gray-500 text-sm md:text-xl md:leading-normal text-justify rtl:md:text-right md:text-left mb-4">
                        {{ __('We thank you for your patronage in the past and looking forward to be at your service in future.') }}"
                    </p>
                    <div class="flex items-center gap-x-4 mt-6 justify-center md:justify-end">
                        {{-- <img class="size-10 rounded-full shadow-lg border-gray-300 border" src="{{ asset('images/ceo.jpg') }}" alt="{{ __('Engr. Mohamed El Bahrawy') }}"> --}}
                        <p class="md:text-lg">
                            <span class="font-semibold text-primary-800">{{ __('Engr. Mohamed El Bahrawy') }},</span> <span class="text-neutral-500">{{ __('CEO') }}</span>
                        </p>
                    </div>
                </blockquote>
            </div>
    </section>

    <section class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">{{ __('Certified for Excellence') }}</h2>
            <p class="text-gray-500 sm:text-xl">{{ __('Tamouh Employment is ISO-certified, reflecting our commitment to quality and reliability in manpower services across the UAE.') }}</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-2">
            <div class="h-full bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="flex flex-col justify-center items-center overflow-hidden rounded-t-xl">
                    <img class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-contain" src="{{ asset('images/ISO-9001-2015.jpg') }}" alt="">
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="{{ asset('pdf/ISO-9001-2015.pdf') }}" download>
                        {{ __('Download') }}
                    </a>
                </div>
            </div>

            <div class="h-full bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="flex flex-col justify-center items-center overflow-hidden rounded-t-xl">
                    <img class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-contain" src="{{ asset('images/ISO-14001-2015.jpg') }}" alt="">
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="{{ asset('pdf/ISO-14001-2015.pdf') }}" download>
                        {{ __('Download') }}
                    </a>
                </div>
            </div>

            <div class="h-full bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="flex flex-col justify-center items-center overflow-hidden rounded-t-xl">
                    <img class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-contain" src="{{ asset('images/ISO-45001-2018.jpg') }}" alt="">
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="{{ asset('pdf/ISO-45001-2018.pdf') }}" download>
                        {{ __('Download') }}
                    </a>
                </div>
            </div>

            <div class="h-full bg-white border border-gray-200 shadow-2xs rounded-xl">
                <div class="flex flex-col justify-center items-center overflow-hidden rounded-t-xl">
                    <img class="w-full h-[300px] md:h-[400px] lg:h-[500px] object-contain" src="{{ asset('images/ICV-Certificate.jpg') }}" alt="">
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-2xs hover:bg-gray-50 focus:outline-hidden focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" href="{{ asset('pdf/ICV-Certificate.pdf') }}" download>
                        {{ __('Download') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-6">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">{{ __('Our Success Partners') }}</h2>
            <p class="text-gray-500 sm:text-xl">{{ __('Trusted by leading companies across the UAE for reliable and efficient manpower solutions.') }}</p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-5 gap-x-6">
            <img class="py-3 lg:py-5 w-24 h-auto md:w-20 lg:w-32 mx-auto" src="{{ asset('images/logos/specoiii.png') }}" alt="specoiii logo" />
            <img class="py-3 lg:py-5 w-24 h-auto md:w-20 lg:w-32 mx-auto" src="{{ asset('images/logos/nbhi.png') }}" alt="nbhi logo" />
            <img class="py-3 lg:py-5 w-24 h-auto md:w-20 lg:w-32 mx-auto" src="{{ asset('images/logos/ccc.png') }}" alt="ccc logo" />
            <img class="py-3 lg:py-5 w-24 h-auto md:w-20 lg:w-32 mx-auto" src="{{ asset('images/logos/nurol.png') }}" alt="Nurol LLC logo" />
            <img class="py-3 lg:py-5 w-24 h-auto md:w-20 lg:w-32 mx-auto" src="{{ asset('images/logos/raq.png') }}" alt="RAQ LLC logo" />
        </div>
    </section>
@endsection
