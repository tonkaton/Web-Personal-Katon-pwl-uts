<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WebKaton</title>
</head>
<body class="antialiased">
    <marquee height="40">Web Personal Katon</marquee>

    <center>  
        <a href="{{url('/')}}">HOME</a> 
        <a href="{{url('about')}}">ABOUT</a> 
        <a href="{{url('contact')}}">CONTACT</a> 
        <a href="{{url('portofolio')}}">PORTOFOLIO</a> 
        <a href="{{url('post')}}">POST</a>

        @if (Route::has('login'))
            @auth
            @else
                <a href="{{ route('login') }}">LOGIN</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">REGISTER</a>
                @endif
            @endauth
        @endif
    </center>
</body>
</html>