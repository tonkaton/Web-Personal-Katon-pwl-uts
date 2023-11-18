<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @yield('title')
        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

    <!-- Navbar -->
    <header>
       <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <a class="navbar-brand" href="{{ route('posts.index') }}">CorpKaton</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-collapse collapse justify-content-between">
            <p align="right">
            <ul class="nav navbar-nav navbar-right">
                <li class="nav-right">
                    <a class="nav-link" href="{{url('/')}}">HOME</a>
                </li>
                <li class="nav-right">
                    <a class="nav-link" href="{{url('about')}}">ABOUT</a>
                </li>
                <li class="nav-right">
                    <a class="nav-link" href="{{url('contact')}}">CONTACT</a>
                </li>
                <li class="nav-right">
                    <a class="nav-link" href="{{url('portofolio')}}">PORTOFOLIO</a> 
                </li>
                <li class="nav-right">
                    <a class="nav-link" href="{{url('post')}}">POST</a>
                </li>
                </p>
                @if (Route::has('login'))
                        @auth
                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
                        </li>
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">REGISTER</a>
                                </li>
                            @endif
                        @endauth
                    @endif
            </div>
            </nav>
        <nav class="navbar">
            <div class="container-fluid">
                
                
                <div style="color: white !important; display: flex; flex-grow: 1; text-align: right;">
                    
                    
 
                    
                    

                    
                </div>
            </div>
        </nav>
    </header>

    <!-- Body -->
    <body>
        @yield('content')
    </body>
    <br>
    
    <!-- Footer -->
    <footer class="footer mt-auto py-3 bg-dark">
        <div class="container d-lg-flex justify-content-between">
            <span class="text-light">CorpKaton  © 2023</span>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"  integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</html>