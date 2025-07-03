   {{-- <div class="w-full h-[100px] overflow-hidden">
    <a href="/dashboard"><img src="{{ asset('images/coba.png') }}" alt="Header" class="w-full h-full object-cover"></a>
</div> --}}

<nav x-data="{ open: false }" class="bg-white ">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <img src="{{ asset('images/logo_3.jpg') }}" alt="Logo" class="h-[60px] w-auto">
                    </a>
                </div>
                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{('Dashboard') }}
                    </x-nav-link>
                    <x-nav-link href="/volunteer" :active="request()->is('volunteer')">
                        {{('Volunteer') }}
                     </x-nav-link>

                    <x-nav-link href="/perlombaan" :active="request()->is('perlombaan')">
                        {{('Perlombaan') }}
                    </x-nav-link>

                    <x-nav-link href="/magang" :active="request()->is('magang')">
                        {{ ('Tempat Magang') }}
                    </x-nav-link>

                    <x-nav-link href="/kampus" :active="request()->is('kampus')">
                        {{ ('Event Internal') }}
                    </x-nav-link>

                    <x-nav-link href="/lainya" :active="request()->is('lainya')">
                        {{ ('Lainya') }}
                    </x-nav-link>

                    <x-nav-link href="/bookmark" :active="request()->is('bookmark')">
                        {{('Bookmark') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Responsive Navigation Menu -->
 <div 
    x-show="open" 
    x-transition:enter="transition transform ease-out duration-300"
    x-transition:enter-start="translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition transform ease-in duration-300"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="translate-x-full"
    class="fixed top-0 right-0 w-64 h-full bg-white z-50 shadow-lg sm:hidden"
    @click.away="open = false">

   <!-- Tombol Close (X) -->
    <div class="flex justify-left p-4">
        <button @click="open = false" class="text-gray-600 hover:text-gray-900 focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{('Dashboard') }}
            </x-responsive-nav-link>
              <x-responsive-nav-link href="/volunteer" :active="request()->is('volunteer')">
        {{('Volunteer') }}
    </x-responsive-nav-link>

    <x-responsive-nav-link href="/perlombaan" :active="request()->is('perlombaan')">
        {{('Perlombaan') }}
    </x-responsive-nav-link>

    <x-responsive-nav-link href="/magang" :active="request()->is('magang')">
        {{('Tempat Magang') }}
    </x-responsive-nav-link>

    <x-responsive-nav-link href="/kampus" :active="request()->is('kampus')">
        {{('Event Internal') }}
    </x-responsive-nav-link>

    <x-responsive-nav-link href="/lainya" :active="request()->is('lainya')">
        {{('Lainnya') }}
    </x-responsive-nav-link>

    <x-responsive-nav-link href="/bookmark" :active="request()->is('bookmark')">
        {{('Bookmark') }}
    </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
