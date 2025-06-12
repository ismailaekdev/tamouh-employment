@use('App\Enums\Locale')
@use('Illuminate\Support\Facades\Route')

<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="#">
                {{-- Logo --}}
                Hello
                {{-- <img src="{{ locale() === 'ar' ? asset('assets/logos/chridari-logo-ar.svg') : asset('assets/logos/chridari-logo.svg') }}" class="h-6 sm:h-9" alt="{{ __('Chri Dari') }}" /> --}}
            </a>
            <div class="flex items-center | lg:order-2">
                {{-- Language Button --}}
                <button
                    type="button"
                    data-dropdown-toggle="language-dropdown"
                    class="inline-flex items-center text-gray-800 hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-2.5 py-2.5 mr-2 focus:outline-none | lg:px-5 | rtl:mr-0 rtl:ml-2"
                >
                    <svg class="size-6 text-blue-600 mr-2 | rtl:mr-0 rtl:ml-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 0 0 8.716-6.747M12 21a9.004 9.004 0 0 1-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 0 1 7.843 4.582M12 3a8.997 8.997 0 0 0-7.843 4.582m15.686 0A11.953 11.953 0 0 1 12 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0 1 21 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0 1 12 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 0 1 3 12c0-1.605.42-3.113 1.157-4.418" />
                    </svg>

                    {{ Locale::from(locale())->getNativeLabel() }}
                    <svg class="ml-1 w-4 h-4 | rtl:mr-1 rtl:ml-0" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>
                {{-- Language Dropdown --}}
                @if (Route::currentRouteName())
                    <div class="hs-dropdown-menu hidden bg-white shadow-md rounded-lg p-2">
                        <ul>
                            @foreach (Locale::cases() as $locale)
                                <li>
                                    <a href="#"
                                        class="flex justify-start items-center gap-x-3 py-2 px-4 text-sm text-gray-700 hover:bg-gray-100">
                                        {{-- <img src="{{ asset('images/'.$locale->getFlag().'.svg') }}" class="w-6 h-6 object-cover" alt="{{ $locale->getNativeLabel() }}" /> --}}
                                        <span>{{ $locale->getNativeLabel() }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{-- Main Button --}}
                <a href="#" class="hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 focus:outline-none | md:block | lg:px-5 py-2 lg:py-2.5">
                    {{ __('Contact Us') }}
                </a>
                {{-- Burger Menu --}}
                <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">{{ __('Open main menu') }}</span>
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                    <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </div>
            <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu">
                <ul class="flex flex-col mt-4 font-medium | lg:flex-row lg:space-x-8 lg:mt-0 | rtl:space-x-reverse">
                    <li>
                        Home
                    </li>
                    <li>
                        Services
                    </li>
                    <li>
                        About
                    </li>
                    {{-- <li>
                        <x-nav-link href="{{ route('front.homepage')}}" :active="request()->routeIs('front.homepage')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('front.projects')}}" :active="request()->routeIs('front.projects')">
                            {{ __('New Projects') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('front.promoters')}}" :active="request()->routeIs('front.promoters')">
                            {{ __('Our Promoters') }}
                        </x-nav-link>
                    </li>
                    <li>
                        <x-nav-link href="{{ route('front.blog')}}" :active="request()->routeIs('front.blog')">
                            {{ __('Blog') }}
                        </x-nav-link>
                    </li>
                    <li class="block md:hidden">
                        <x-nav-link href="{{ route('front.contact') }}" :active="request()->routeIs('front.contact')">
                            {{ __('Contact Us') }}
                        </x-nav-link>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>
</header>