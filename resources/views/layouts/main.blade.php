<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>WO JeWePe</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/wo-logo.png')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{asset('/assets/css/fontawesome-all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/meanmenu.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('/assets/css/responsive.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
</head>
<style>
.main-menu {
    background-color: #ffffff; 
    padding: 10px;
}

#mobile-menu ul {
    list-style-type: none;
    padding: 0;
}

#mobile-menu ul li {
    display: inline-block;
    margin-right: 20px;
    margin-top: 25px;
}

#mobile-menu ul li a {
    text-decoration: none; 
    color: #bf9270;
    font-weight: bold; 
    padding: 10px 10px; 
    display: block; 
    text-align: center; 
}
</style>
<body>
    {{-- Navbar --}}
    <header>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-xl-3 col-lg-3">
                    <div class="logo">
                        <a href="/" style="margin-left: 30px;">
                            <img src="{{asset('assets/img/wo-logo.png')}}" alt="logo" style="width: 70px" />
                        </a>
                    </div>
                </div>
                <br>
                <div class="col-xl-6 col-lg-6">
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                    <div class="main-menu">
                        <nav id="mobile-menu">
                            <ul>
                                <li>
                                    <a href="/">Home</a>
                                </li>
                                <li>
                                    <a href="/kontak">Contact</a>
                                </li>
                                <li>
                                    <a href="/pesan">Pesan</a>
                                </li>
                                <li>
                                    <a href="/history">History</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                {{-- Login, Register, Logout --}}
                <div class="col-xl-3 col-lg-3">
                    @if(Auth::check())
                    <div class="dropdown d-inline-block ms-auto">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style="margin-left: 90px;">
                            <img src="{{asset('assets/img/icon/user.svg')}}" alt="User Icon"
                                style="margin-right: 10px; width:20px;" />
                            Halo, {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="/logout" style="color: #bf9270;">Keluar</a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <div class="header-right">
                        <div class="header-button f-right">
                            <a href="/login" class="c-btn2">Login</a>
                        </div>
                        <div class="header-button f-right">
                            <a href="/register" class="c-btn1">Register</a>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
    </header>
    {{-- Main Content --}}
    <main>@yield('container')</main>
    {{-- Footer --}}
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
            background-color: #ffffff;
        }

        .main-content {
            flex: 1;
            padding: 20px;
        }

        .footer-style {
            background-color: #ffffff;
            padding: 20px;
            margin-top: auto;
        }

        .footer-style .container {
            text-align: center;
        }
    </style>

<footer class="footer-style footer-04-style">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 text-md-start text-center mb-4 mb-md-0">
                <p class="mb-0">Copyright &copy; 2024 WO JeWePe. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>


    <script src="/assets/js/jquery.counterup.min.js"></script>
    <script src="/assets/js/jquery.scrollUp.min.js"></script>
    <script src="/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="/assets/js/jquery.meanmenu.min.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/jquery.appear.js"></script>
    <script src="/assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>
</html>