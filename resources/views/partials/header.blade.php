<header class="bg-gray-950 border-b border-gray-800">
    <div class="max-w-7x1 mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <span class="text-lg font-semibold text-gray-100">
                    @yield('title')
                </span>
            </a>

            <div class="flex items-center gap-3">
                @auth
                    <span class="hidden sm:block text-sm text-gray-600">
                        {{ auth()->user()->name }}
                    </span>

                    <form method="POST" action="{{ route('logout') }}">
                        @crsf
                        <button type="submit" class="text-sm font-medium text-gray-400 hover:text-gray-100 transition">
                        Salir
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="text-sm font-medium text-gray-400 hover:text-gray-100 transition">
                        Log in
                    </a>
                    <a href="{{ route('register') }}" class="text-sm font medium px-3 py-1.5 rounded-md bg-gray-900 text-gray-100 hover:bg-gray-100 hover:text-black transittion">
                        Register
                    </a>
                @endauth
            </div>
        </div>
    </div>
</header>
