<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('favicon.png') }}" type="image/x-icon">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sewa Mobil Online') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="{{ URL::asset('style/style.css') }}" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div>
          <div class="sidebar p-4" id="sidebar">
                <img src="{{ URL::asset('favicon.png') }}" width="36px" style="float: left;"> 
                <h5 style="margin-top: 1rem;margin-left: 40px;"><strong>Sakura Rent Car</strong></h5>
            <li style="clear: left;">
              <a class="text-black" href="">
                <i class="bi bi-windows mr-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a class="text-black" href="{{ URL::to('/mobil') }}">
                <i class="bi bi-car-front mr-2"></i>
                Manajemen Mobil
              </a>
            </li>
            <li>
              <a class="text-black" href="{{ URL::to('/peminjaman-mobil') }}">
                <i class="bi bi-activity mr-2"></i>
                Peminjaman Mobil
              </a>
            </li>
            <li>
              <a class="text-black" href="{{ URL::to('/pengembalian-mobil') }}">
              <i class="bi bi-arrow-repeat mr-2"></i>
                Pegembalian Mobil
              </a>
            </li>
            <li>
                <a class="text-black" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="bi bi-x mr-2"></i>
                        Keluar
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
              </a>
            </li>
          </div>
        </div>
        <section class="p-4" id="main-content">
          <div class="mt-5">
              @yield('content')
          </div>
        </section>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script>
    document.getElementById("sidebar").classList.toggle("active-sidebar");
    document.getElementById("main-content").classList.toggle("active-main-content");
</script>