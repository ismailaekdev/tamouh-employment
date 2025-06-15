@use('App\Enums\Locale')
@use('Illuminate\Support\Facades\Route')

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="{{ route('front.home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('images/logo.svg') }}" class="h-8 md:h-10" alt="{{ config('app.name') }}" />
        </a>
        <div class="flex items-center | lg:order-2">
            {{-- Language Button --}}
            <button type="button" data-dropdown-toggle="language-dropdown" class="inline-flex items-center text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2.5 py-2.5 mr-2 focus:outline-none | lg:px-5 | rtl:mr-0 rtl:ml-2">
                <svg class="size-6 text-primary-600 mr-2 | rtl:mr-0 rtl:ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                </svg>

                {{ Locale::from(locale())->getNativeLabel() }}
                <svg class="ml-1 w-4 h-4 | rtl:mr-1 rtl:ml-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            {{-- Language Dropdown --}}
            @if (Route::currentRouteName())
                <div class="hidden z-50 my-4 w-36 text-center text-base list-none bg-white rounded divide-y divide-gray-100 shadow" id="language-dropdown">
                    <ul class="py-1" role="none">
                        @foreach (Locale::cases() as $locale)
                            <li>
                                <a href="{{ route(Route::currentRouteName(), array_merge(Route::current()->parameters(), ['locale' => $locale->value], [])) }}" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">
                                    <div class="inline-flex items-center">
                                        {{ $locale->getNativeLabel() }}
                                    </div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {{-- Burger Menu --}}
            <button data-collapse-toggle="navbar-language" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-language" aria-expanded="false">
                <span class="sr-only">{{ __('Open main menu') }}</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1 rtl:text-right" id="navbar-language">
            <ul class="flex flex-col mt-4 font-medium gap-4 | lg:flex-row lg:gap-x-8 lg:mt-0">
                <li>
                    <x-nav-link href="{{ route('front.home') }}" :active="request()->routeIs('front.home')">
                        {{ __('Home') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="#" :active="false">
                        {{ __('Services') }}
                    </x-nav-link>
                </li>
                <li>
                    <x-nav-link href="{{ route('front.contact') }}" :active="request()->routeIs('front.contact')">
                        {{ __('Contact') }}
                    </x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>
