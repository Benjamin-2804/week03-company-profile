<nav class="bg-white shadow-sm sticky top-0 z-50" role="navigation" aria-label="Main navigation">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">

            {{-- Brand --}}
            <a href="{{ route('home') }}" class="text-xl font-bold text-primary-700 tracking-tight">
                TechCore
            </a>

            {{-- Desktop nav links --}}
            <ul class="hidden md:flex md:gap-8 items-center">
                <li>
                    <a href="{{ route('home') }}"
                       class="{{ request()->routeIs('home') ? 'text-primary-600 font-semibold border-b-2 border-primary-600 pb-1' : 'text-neutral-700 hover:text-primary-600 transition-colors duration-150' }}">
                        Home
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                       class="{{ request()->routeIs('about') ? 'text-primary-600 font-semibold border-b-2 border-primary-600 pb-1' : 'text-neutral-700 hover:text-primary-600 transition-colors duration-150' }}">
                        About
                    </a>
                </li>
                <li>
                    <a href="{{ route('services') }}"
                       class="{{ request()->routeIs('services') ? 'text-primary-600 font-semibold border-b-2 border-primary-600 pb-1' : 'text-neutral-700 hover:text-primary-600 transition-colors duration-150' }}">
                        Services
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                       class="{{ request()->routeIs('contact') ? 'bg-primary-600 text-white px-4 py-2 rounded-lg font-semibold' : 'bg-primary-600 text-white px-4 py-2 rounded-lg font-semibold hover:bg-primary-700 transition-colors duration-150' }}">
                        Contact Us
                    </a>
                </li>
            </ul>

            {{-- Hamburger button (mobile only) --}}
            <button
                id="hamburger-btn"
                class="md:hidden p-2 rounded-md text-neutral-700 hover:text-primary-600 hover:bg-neutral-100 focus:outline-none focus:ring-2 focus:ring-primary-500"
                aria-expanded="false"
                aria-controls="mobile-menu">
                <span class="sr-only">Toggle navigation</span>
                {{-- Hamburger icon --}}
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile menu --}}
    <ul id="mobile-menu"
        class="hidden flex-col gap-4 px-4 pb-4 md:hidden bg-white border-t border-neutral-100">
        <li class="pt-3">
            <a href="{{ route('home') }}"
               class="{{ request()->routeIs('home') ? 'text-primary-600 font-semibold' : 'text-neutral-700 hover:text-primary-600' }} block py-1">
                Home
            </a>
        </li>
        <li>
            <a href="{{ route('about') }}"
               class="{{ request()->routeIs('about') ? 'text-primary-600 font-semibold' : 'text-neutral-700 hover:text-primary-600' }} block py-1">
                About
            </a>
        </li>
        <li>
            <a href="{{ route('services') }}"
               class="{{ request()->routeIs('services') ? 'text-primary-600 font-semibold' : 'text-neutral-700 hover:text-primary-600' }} block py-1">
                Services
            </a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
               class="{{ request()->routeIs('contact') ? 'text-primary-600 font-semibold' : 'text-neutral-700 hover:text-primary-600' }} block py-1">
                Contact Us
            </a>
        </li>
    </ul>
</nav>
