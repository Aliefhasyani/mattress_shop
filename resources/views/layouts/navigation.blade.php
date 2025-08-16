<style>
    /* Navbar Styles */
    .navbar {
        background: linear-gradient(135deg, #f8f4ee 0%, #f1e8dc 100%);
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        border-bottom: 1px solid #e3d9c8;
        position: relative;
        z-index: 50;
    }

    .navbar::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, #b8860b, #d4af37, #b8860b);
        opacity: 0.7;
    }

    .nav-container {
        max-width: 1400px;
        padding: 0 2rem;
    }

    .nav-logo img {
        height: 2.8rem;
        transition: all 0.3s ease;
        filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

    .nav-logo:hover img {
        transform: scale(1.05) rotate(-2deg);
        filter: drop-shadow(0 4px 8px rgba(0,0,0,0.15));
    }

    .nav-link {
        color: #5a3d2b !important;
        font-weight: 500;
        padding: 0.75rem 1.25rem;
        margin: 0 0.5rem;
        border-radius: 8px;
        transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
        position: relative;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-size: 0.9rem;
    }

    .nav-link:hover {
        color: #3e2723 !important;
        background: rgba(212, 175, 55, 0.1);
        transform: translateY(-2px);
    }

    .nav-link.active {
        color: #fff !important;
        background: linear-gradient(135deg, #b8860b 0%, #d4af37 100%);
        font-weight: 600;
        box-shadow: 0 4px 12px rgba(184, 134, 11, 0.3);
    }

    .nav-link.active::after {
        content: '';
        position: absolute;
        bottom: -8px;
        left: 50%;
        transform: translateX(-50%);
        width: 60%;
        height: 3px;
        background: #d4af37;
        border-radius: 3px;
    }

    .user-dropdown {
        color: #5a3d2b;
        font-weight: 500;
        padding: 0.75rem 1.5rem;
        border-radius: 8px;
        transition: all 0.3s ease;
        background: rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(5px);
        border: 1px solid rgba(184, 134, 11, 0.2);
        box-shadow: 0 2px 8px rgba(0,0,0,0.05);
    }

    .user-dropdown:hover {
        background: rgba(212, 175, 55, 0.2);
        box-shadow: 0 4px 12px rgba(184, 134, 11, 0.2);
    }

    .dropdown-menu {
        border: none;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        border-radius: 10px;
        padding: 0.5rem 0;
        margin-top: 0.5rem;
        background: rgba(255, 248, 240, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(184, 134, 11, 0.15);
        overflow: hidden;
    }

    .dropdown-item {
        color: #5a3d2b;
        padding: 0.75rem 1.75rem;
        transition: all 0.2s ease;
        font-weight: 500;
        position: relative;
    }

    .dropdown-item:hover {
        background: linear-gradient(90deg, rgba(184, 134, 11, 0.1), transparent);
        color: #3e2723;
        padding-left: 2rem;
    }

    .dropdown-item::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 3px;
        background: #d4af37;
        transform: scaleY(0);
        transition: transform 0.2s ease;
    }

    .dropdown-item:hover::before {
        transform: scaleY(1);
    }

    .dropdown-divider {
        border-color: rgba(184, 134, 11, 0.2);
    }

    .mobile-menu-button {
        color: #5a3d2b;
        background: rgba(255, 255, 255, 0.3);
        border: 1px solid rgba(184, 134, 11, 0.2);
        border-radius: 8px;
        padding: 0.5rem;
        transition: all 0.3s ease;
    }

    .mobile-menu-button:hover {
        background: rgba(212, 175, 55, 0.2);
    }

    .mobile-menu {
        background: linear-gradient(135deg, #f8f4ee 0%, #f1e8dc 100%);
        box-shadow: inset 0 10px 15px -10px rgba(0,0,0,0.1);
    }

    .mobile-nav-link {
        color: #5a3d2b;
        padding: 1rem 2rem;
        border-left: 4px solid transparent;
        transition: all 0.3s ease;
        font-weight: 500;
    }

    .mobile-nav-link:hover {
        background: rgba(212, 175, 55, 0.1);
        padding-left: 2.5rem;
    }

    .mobile-nav-link.active {
        border-left-color: #d4af37;
        color: #b8860b;
        font-weight: 600;
        background: rgba(212, 175, 55, 0.1);
    }

    .user-info-mobile {
        border-bottom: 1px solid rgba(184, 134, 11, 0.2);
        padding: 1.5rem 2rem;
        background: rgba(255, 255, 255, 0.3);
    }

    .user-name {
        color: #3e2723;
        font-weight: 600;
        font-size: 1.1rem;
    }

    .user-email {
        color: #8b7355;
        font-size: 0.9rem;
    }
</style>

<nav x-data="{ open: false }" class="navbar">
    <!-- Primary Navigation Menu -->
    <div class="nav-container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="shrink-0 flex items-center nav-logo">
                    <a href="{{ route('home') }}">
                        <img src="{{ asset('storage/mattresses/download (1).png') }}" class="h-10 w-auto" alt="Mattress Image" />
                    </a>
                </div>

                <!-- Navigation Links -->
                @if(Auth::check() && Auth::user()->role === 'admin')
                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>
                    
                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
                            {{ __('Products') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                            {{ __('About') }}
                        </x-nav-link>
                    </div>

                @elseif(Auth::check())
                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
                            {{ __('Products') }}
                        </x-nav-link>
                    </div>
                    
                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                            {{ __('About') }}
                        </x-nav-link>
                    </div>

                @else
                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                            {{ __('Home') }}
                        </x-nav-link>
                    </div>

                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
                            {{ __('Products') }}
                        </x-nav-link>
                    </div>
                    
                    <div class="hidden space-x-1 sm:-my-px sm:ms-10 sm:flex">
                        <x-nav-link :href="route('about')" :active="request()->routeIs('about')">
                            {{ __('About') }}
                        </x-nav-link>
                    </div>
                @endif
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center user-dropdown px-4 py-2 text-sm leading-5 font-medium rounded-md focus:outline-none transition ease-in-out duration-150">
                            @if(Auth::check())
                                <div class="flex items-center">
                                    <span class="mr-2">{{ Auth::user()->name }}</span>
                                    <svg class="fill-current h-4 w-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @else
                                <div class="flex items-center">
                                    <span class="mr-2">Account</span>
                                    <svg class="fill-current h-4 w-4 transform transition-transform" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            @endif
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        @if(Auth::check() && Auth::user()->role === 'admin')
                            <x-dropdown-link :href="route('profile.edit')">
                                <i class="fas fa-user-circle mr-2 text-gold-500"></i> {{ __('Profile') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('admin.dashboard')">
                                <i class="fas fa-tachometer-alt mr-2 text-gold-500"></i> {{ __('Admin Dashboard') }}
                            </x-dropdown-link>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt mr-2 text-gold-500"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @elseif(Auth::check())
                            <x-dropdown-link :href="route('profile.edit')">
                                <i class="fas fa-user-circle mr-2 text-gold-500"></i> {{ __('Profile') }}
                            </x-dropdown-link>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    <i class="fas fa-sign-out-alt mr-2 text-gold-500"></i> {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        @else
                            <x-dropdown-link :href="route('register')">
                                <i class="fas fa-user-plus mr-2 text-gold-500"></i> {{ __('Register') }}
                            </x-dropdown-link>
                            <x-dropdown-link :href="route('login')">
                                <i class="fas fa-sign-in-alt mr-2 text-gold-500"></i> {{ __('Log in') }}
                            </x-dropdown-link>
                        @endif
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md mobile-menu-button focus:outline-none transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden mobile-menu">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                <i class="fas fa-home mr-3 text-gold-500"></i> {{ __('Home') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('products')" :active="request()->routeIs('products')">
                <i class="fas fa-bed mr-3 text-gold-500"></i> {{ __('Products') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('about')" :active="request()->routeIs('about')">
                <i class="fas fa-info-circle mr-3 text-gold-500"></i> {{ __('About') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4 user-info-mobile">
                @if(Auth::check())
                    <div class="user-name">
                        <i class="fas fa-user-circle mr-2 text-gold-500"></i> {{ Auth::user()->name }}
                    </div>
                    <div class="user-email">{{ Auth::user()->email }}</div>
                @else
                    <div class="user-name">
                        <i class="fas fa-user mr-2 text-gold-500"></i> Guest
                    </div>
                @endif
            </div>

            <div class="mt-3 space-y-1">
                @if(Auth::check())
                    <x-responsive-nav-link :href="route('profile.edit')">
                        <i class="fas fa-user-edit mr-3 text-gold-500"></i> {{ __('Profile') }}
                    </x-responsive-nav-link>
                    @if(Auth::user()->role === 'admin')
                        <x-responsive-nav-link :href="route('admin.dashboard')">
                            <i class="fas fa-tachometer-alt mr-3 text-gold-500"></i> {{ __('Admin Dashboard') }}
                        </x-responsive-nav-link>
                    @endif
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-responsive-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            <i class="fas fa-sign-out-alt mr-3 text-gold-500"></i> {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                @else
                    <x-responsive-nav-link :href="route('login')">
                        <i class="fas fa-sign-in-alt mr-3 text-gold-500"></i> {{ __('Login') }}
                    </x-responsive-nav-link>
                    <x-responsive-nav-link :href="route('register')">
                        <i class="fas fa-user-plus mr-3 text-gold-500"></i> {{ __('Register') }}
                    </x-responsive-nav-link>
                @endif
            </div>
        </div>
    </div>
</nav>