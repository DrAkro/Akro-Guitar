<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Cashier') }}</title>

    <!-- Fonts -->

    <!-- Tambahkan SweetAlert2 -->
    
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Optional Bootstrap Icons (for sidebar icons) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Font Awesome for Guitar Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f5f5f5;
            color: #333;
            margin: 0;
        }

        #sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 250px;
            background-color: black;
            color: #fff;
            padding-top: 20px;
            transition: all 0.3s ease;
            z-index: 1000;
            height: 100vh;
        }

        #sidebar a {
            color: #ddd;
            text-decoration: none;
            font-size: 18px;
            padding: 12px 20px;
            display: block;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        #sidebar a i {
            margin-right: 12px;
            font-size: 22px;
        }

        #sidebar a:hover {
            background-color: #495057;
            border-radius: 5px;
            color: #007bff;
        }

        .navbar-brand {
            font-size: 22px;
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
            color: chocolate;
        }

        .container-fluid {
            margin-left: 250px;
            transition: margin-left 0.3s ease;
            padding: 20px;
        }

        /* Responsive Sidebar */
        @media (max-width: 768px) {
            #sidebar {
                width: 0;
                padding: 0;
            }

            .container-fluid {
                margin-left: 0;
            }

            #sidebar.active {
                width: 250px;
                padding-top: 20px;
            }

            .navbar-toggler {
                display: block;
            }
        }

        .guitar-button {
            background-color: #007bff;
            color: white;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .guitar-button:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        .guitar-button i {
            margin-right: 8px;
        }

        /* Additional styling for the navbar */
        .navbar {
            background-color: chocolate;
            border-bottom: 1px solid #ddd;
            border-radius: 20px;
            padding: 0.8px;
          
        }

        .navbar-nav .nav-item .nav-link {
            color: #333;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #007bff;
        }
    </style>
</head>

<body class="d-flex">
    <div id="app" class="d-flex w-100">

        <!-- Sidebar -->
        <div id="sidebar">
            <a class="navbar-brand mb-3" href="{{ url('') }}">
                <i class="fas fa-guitar" style="font-size: 30px;text-align : center"></i> {{ config('app.name', 'Laravel') }}
            </a>
            <hr>

            @auth
    
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                    <i class="bi bi-house-door-fill"></i>

                        <i class="bi bi-dot"></i>
                        Beranda
                    </a>
                </li>
            </ul>
            
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('items.index') }}">
                        <i class="bi bi-box-seam-fill"></i>
                        <i class="bi bi-dot"></i>
                        Barang
                    </a>
                </li>
            </ul>
            
            @hasrole('admin')
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('customers.index') }}">
                        <i class="bi bi-person-fill"></i>
                        <i class="bi bi-dot"></i>
                        Pelanggan
                    </a>
                </li>
            </ul>
            
            @endhasrole

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('transactions.index') }}">
                    <i class="bi bi-cart-fill"></i>

                        <i class="bi bi-dot"></i>
                        Transaksi
                    </a>
                </li>
            </ul>
            
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('promos.index') }}">
                    <i class="bi bi-tag-fill"></i>

                        <i class="bi bi-dot"></i>
                     Promo
                    </a>
                </li>
            </ul>
            
            @endauth

            <!-- Authentication Links -->
            @guest
            @if (Route::has('login'))
            <a class="nav-link" href="{{ route('login') }}">
                <i class="bi bi-box-arrow-in-right"></i> {{ __('Login') }}
            </a>
            @endif

            @if (Route::has('register'))
            <a class="nav-link" href="{{ route('register') }}">
                <i class="bi bi-pencil-square"></i> {{ __('Register') }}
            </a>
            @endif
            @endguest
        </div>

        <!-- Main Content -->
        <div class="container-fluid">
         
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
                <!-- Search Form -->
               
                <!-- Navbar Toggler for Mobile -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}" onclick="toggleSidebar()">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Logout Button in Navbar -->
                @auth
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="{{ Route('login') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="bi bi-box-arrow-right"></i> {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                @endauth
            </nav>

            <main class="py-4">
                <div class="container mt-4">
                    @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div>
                        @yield('content')
                    </div>
                </div>
            </main>
        </div>
    </div>
   



   
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if(session('error'))
            Swal.fire({
                icon: 'error',
                title: 'Transaksi Gagal!',
                text: {!! json_encode(session('error')) !!}, 
                confirmButtonColor: '#d33',
                confirmButtonText: 'OK'
            });
        @endif

        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: {!! json_encode(session('success')) !!},
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        @endif
    });
</script>


<script>
        function toggleSidebar() {
            document.getElementById('sidebar').classList.toggle('active');
        }
    </script>
    @if ($errors->any())
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            Swal.fire({
                icon: 'error',
                title: 'Terjadi Kesalahan!',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonColor: '#d33',
                confirmButtonText: 'OK'
            });
        });
    </script>
@endif

</html>
