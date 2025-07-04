@extends('layouts.front')
@section('title', __('Services'))
@section('content')
    <div class="relative overflow-hidden g-no-repeat bg-cover bg-center bg-gray-500 bg-blend-multiply rtl-bg-flip" style="background-image: url({{ asset('images/hero-services.jpg') }});">
        <div class="container mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col items-center justify-between py-8  lg:py-16">
                <div class="max-w-2xl text-center">
                    <h1 class="mb-6 text-2xl md:text-4xl font-extrabold tracking-tight text-gray-200 sm:text-5xl lg:text-6xl">
                        {{ __('Our services') }}
                    </h1>
                    <p class="mb-8 text-base md:text-xl leading-relaxed text-gray-300">
                        {{ __('Tamouh Employment LLC delivers flexible, reliable manpower and HR solutions for businesses across the UAE and beyond.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">{{ __('Smart Workforce Solutions') }}</h2>
                <p class="font-light text-gray-500 sm:text-xl">{{ __('Trusted manpower and HR services across the UAE for every industry.') }}</p>
            </div>
            <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 md:gap-8 xl:gap-8 md:space-y-0">
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Manpower Supply') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Get fully sponsored skilled workers across sectors, ready to join your team fast.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Recruitment Services') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Hire top local and international talent with streamlined sourcing and placement.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                            <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Project Staffing') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Easily scale up for any project with flexible, contract-based workforce solutions.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Visa Processing') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Ensure fast, compliant visa handling for smooth onboarding and legal peace of mind.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Payroll Management') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Simplify salary payments with secure, accurate, and fully compliant processing.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Staff Accommodation') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Provide your workers with clean, managed housing, meals, and transport included.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('HR Outsourcing') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Let us manage your HR tasks so you can focus on growing your business.') }}</p>
                </div>
                <div class="p-6 bg-white rounded shadow">
                    <div class="flex justify-center items-center mb-4 w-10 h-10 rounded bg-primary-100 lg:h-12 lg:w-12">
                        <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <h3 class="mb-2 text-xl font-bold">{{ __('Executive Search') }}</h3>
                    <p class="font-light text-gray-500">{{ __('Find qualified leaders and specialists who align with your company goals.') }}</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
                <div>
                    <img class="rounded-xl" src="{{ asset('images/services-1.jpg') }}" alt="{{ __('UAE manpower supply') }}">
                </div>
                <div class="mt-5 sm:mt-10 lg:mt-0">
                    <div class="space-y-6 sm:space-y-8">
                        <div class="space-y-2 md:space-y-4">
                            <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                                {{ __('Civil Manpower Supply – Onshore / Offshore') }}
                            </h2>
                            <p class="text-gray-500">
                                {{ __('We deliver highly skilled civil workers, laborers, supervisors, foremen, and craftsmen, ready for both short- and long-term infrastructure and construction projects.') }}
                            </p>
                        </div>
                        <ul class="space-y-2 sm:space-y-4">
                            <li class="flex gap-x-3">
                                <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        {{ __('labourers') }}
                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        {{ __('Masonry, Carpentry, Steel Fixers') }}
                                    </span>
                                </div>
                            </li>

                            <li class="flex gap-x-3">
                                <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        {{ __('Supervisors, Foremen, Helpers') }}
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
            <div class="md:grid md:grid-cols-2 md:items-center md:gap-12 xl:gap-32">
                <div class="mt-5 sm:mt-10 lg:mt-0 md:order-1">
                    <div class="space-y-6 sm:space-y-8">
                        <div class="space-y-2 md:space-y-4">
                            <h2 class="font-bold text-3xl lg:text-4xl text-gray-800">
                                {{ __('Civil Manpower Supply – Onshore / Offshore') }}
                            </h2>
                            <p class="text-gray-500">
                                {{ __('Our mechanical teams bring deep industry knowledge to every job, from pipelines and fabrication to welding and electrical installation.') }}
                            </p>
                        </div>
                        <ul class="space-y-2 sm:space-y-4">
                            <li class="flex gap-x-3">
                                <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        {{ __('Mechanical Workers & Foremen') }}
                                    </span>
                                </div>
                            </li>
                            <li class="flex gap-x-3">
                                <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        {{ __('Pipe Fitters, Fabricators, Multi-Welders') }}
                                    </span>
                                </div>
                            </li>
                            <li class="flex gap-x-3">
                                <span class="mt-0.5 size-5 flex justify-center items-center rounded-full bg-blue-50 text-blue-600">
                                    <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                </span>
                                <div class="grow">
                                    <span class="text-sm sm:text-base text-gray-500">
                                        {{ __('Electricians, Fire Watchers, Helpers') }}
                                    </span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:order-2 mt-4 md:mt-auto">
                    <img class="rounded-xl" src="{{ asset('images/mechanical-electricians-firewatchers-helpers.jpg') }}" alt="Features Image">
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="text-center text-gray-900">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 lg:text-5xl">
                    {{ __('Trusted Labor for Every Project') }}
                </h2>
            </div>
            <div class="grid gap-6 mt-12 lg:mt-14 lg:gap-12 md:grid-cols-3">
                <div class="flex mb-2 md:flex-col md:mb-0">
                    <img class="mr-4 w-auto h-36 md:w-full md:h-auto rounded-lg" src="{{ asset('images/services-3.jpg') }}" alt="{{ __('Skilled Masons & Carpenters') }}" />
                    <div>
                        <h3 class="text-xl font-bold md:mt-4 mb-2.5 text-gray-900">
                            {{ __('Skilled Masons & Carpenters') }}
                        </h3>
                        <p class="text-gray-500">
                            {{ __('Experienced in blockwork, plastering, and formwork — ready to meet construction demands on time.') }}
                        </p>
                    </div>
                </div>
                <div class="flex mb-2 md:flex-col md:mb-0">
                    <img class="mr-4 w-auto h-36 md:w-full md:h-auto rounded-lg" src="{{ asset('images/services-4.jpg') }}" alt="{{ __('Steel Fixers & Riggers') }}" />
                    <div>
                        <h3 class="text-xl font-bold md:mt-4 mb-2.5 text-gray-900">
                            {{ __('Steel Fixers & Riggers') }}
                        </h3>
                        <p class="text-gray-500">
                            {{ __('Efficient and safety-trained laborers for heavy-duty site work and structural support.') }}
                        </p>
                    </div>
                </div>
                <div class="flex md:flex-col">
                    <img class="mr-4 w-auto h-36 md:w-full md:h-auto rounded-lg" src="{{ asset('images/services-5.jpg') }}" alt="{{ __('Helpers You Can Rely On') }}" />
                    <div>
                        <h3 class="text-xl font-bold md:mt-4 mb-2.5 text-gray-900">
                            {{ __('Helpers You Can Rely On') }}
                        </h3>
                        <p class="text-gray-500">
                            {{ __('General site workers available for all tasks — fast, dependable, and ready to mobilize.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="py-4 px-4 mx-auto max-w-screen-xl lg:px-12 sm:text-center lg:py-8">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900">
				{{ __('Building Strong Foundations Together') }}
			</h2>
            <div class="gap-4 mt-8 sm:grid sm:grid-cols-4 sm:mt-12">
                <img class="col-span-2 mb-4 sm:mb-0 rounded-lg" src="{{ asset('images/wide-1.jpg') }}" alt="content gallery 1">
                <img class="hidden col-span-1 sm:block rounded-lg" src="{{ asset('images/square-1.jpg') }}" alt="content gallery 2">
                <img class="hidden col-span-1 sm:block rounded-lg" src="{{ asset('images/square-2.jpg') }}" alt="content gallery 3">
                <img class="hidden col-span-1 sm:block rounded-lg" src="{{ asset('images/square-3.jpg') }}" alt="content gallery 4">
                <img class="col-span-2 rounded-lg" src="{{ asset('images/wide-2.jpg') }}" alt="content gallery 5">
                <img class="hidden col-span-1 sm:block rounded-lg" src="{{ asset('images/square-5.jpg') }}" alt="content gallery 6">
            </div>
        </div>
    </section>
@endsection
