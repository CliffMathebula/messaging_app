<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OneCollab Messenger </title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div id="app">
        <header class="bg-white" x-data="{ isOpen: false }">
            <nav class="container px-8 py-4 mx-auto md:flex md:justify-between md:items-center">
                <div class="flex items-center justify-between">
                    <a class="text-xl font-bold text-gray-900 md:text-2xl" href="#">OneCollab Messenger</a>
                    <!-- Mobile menu button -->
                    <div @click="isOpen = !isOpen" class="flex md:hidden">
                        <button type="button" class="text-gray-800 hover:text-gray-400 focus:outline-none focus:text-gray-400" aria-label="toggle menu">
                            <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                                <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                                </path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div :class="isOpen ? 'flex' : 'hidden'" class="flex-col mt-2 space-y-4 md:flex md:space-y-0 md:flex-row md:items-center md:space-x-10 md:mt-0">
                    <a class="text-gray-800 transform hover:text-yellow-400" href="/">Home</a>
                    <a class="text-gray-800 transform hover:text-yellow-400" href="/">About Us</a>
                        <!-- <a class="px-4 py-2 text-center 
                        text-white border bg-gradient-to-b 
                        from-yellow-300 to-yellow-500 rounded-2xl hover:shadow-xl" href="#" onclick="toggleModal('modal-id')">Contact
                        Us</a> -->
                        <!-- Authentication Links -->
                    @guest
                    @if (Route::has('login'))
                    <a class="px-4 py-2 text-center 
                     text-white border bg-gradient-to-b 
                     from-green-400 to-yellow-500 rounded-2xl hover:shadow-xl" href="{{ route('login') }}">{{ __('Login') }}</a>
                    @endif
                    @if (Route::has('register'))
                    <a class="px-4 py-2 text-center 
                     text-white border bg-gradient-to-b 
                     from-green-400 to-yellow-500 rounded-2xl hover:shadow-xl" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                    @else
                    <a class="text-center 
                    text-gray-800 transform hover:text-yellow-400" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <a class="px-4 py-2 text-center 
                         text-white border bg-gradient-to-b 
                         from-rose-500 to-yellow-500 rounded-2xl hover:shadow-xl" href="{{ route('logout') }}" onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                </li>
                @endguest
            </nav>
        </header>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    
  <!-- footer -->
  <footer class="text-white bg-gray-100">
    <div class="container flex items-center px-5 py-8 mx-auto ">
      <p class="text-sm text-black">
        &copy; <span id="year"></span>
        <a href="#" class="ml-1 text-black" target="https://github.com/CliffMathebula/">Cliff Mathebula</a>
      </p>
    </div>
  </footer>

  <script type="text/javascript">
    function toggleModal() {
      document.getElementById('modal-id').classList.toggle("hidden");
    }
    document.getElementById("year").innerHTML = new Date().getFullYear();
  </script>
  
</body>

</html>