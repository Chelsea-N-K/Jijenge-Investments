<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Jijenge Investments</title>

    <style type="text/css">
        h4 {
            font-family: sans-serif;
            margin: 100px auto;
            text-align: center;
            font-size: large;
            max-width: 300px;
            position: relative;
            color: #0cc170;
        }

        h4::before {
            content: "";
            display: block;
            width: 75px;
            height: 2px;
            background: #0cc170;
            position: absolute;
            left: 0;
            top: 50%;
            z-index: auto;
        }

        h4::after {
            content: "";
            display: block;
            width: 75px;
            height: 2px;
            background: #0cc170;
            position: absolute;
            right: 0;
            top: 50%;
            z-index: auto;
        }

    </style>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/welcome.css">

</head>

<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-transparent" style="height: 70px">
    <div class="container">
        <a class="navbar-brand" href="#" style="color: #000000; font-size: xx-large"><strong>Jijenge Investments</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse w-100 order-3 dual-collapse2">
            <div class="navbar-nav ml-auto">
                @if (Route::has('login'))
                    @auth
                        @can('admin')
                            <a class="nav-item nav-link" style="color: #000000; font-size: large" href="{{ url('admin/home') }}">
                                <strong>Admin Home</strong>
                            </a>
                        @endcan
                        <a class="nav-item nav-link" style="color: #000000; font-size: large" href="{{ url('/home') }}">
                            <strong>Home</strong>
                        </a>
                    @else
                        <a class="nav-item nav-link" href="#" style="color: #000000; font-size: large">Contact</a>

                        <a class="nav-item nav-link" style="color: #000000; font-size: large" href="{{ route('login') }}">
                            <strong>Training</strong>
                        </a>
                    @endauth
                @endif
            </div>
        </div>
    </div>
</nav>

<div class="bg">
    <div class="row m-0 h-100">
        <div class="col-lg-6 my-auto" align="center">
            <h1 style="font-family: 'Helvetica'; font-size: 400%">Jijenge <br> Investments</h1>
            <h1 style="font-family: 'Brush Script MT'; font-size: 400%; font-style: italic">The future lies in your hands</h1>
        </div>
        <div class="col-lg-6 my-auto">
            <!-- Default form contact -->
            <form class="text-center p-5 float-right" method="POST" action="{{ route('register') }}" style="width: 27rem; border-radius: 15px 15px 15px 15px;">
                @csrf

                <p class="h4 mb-4" style="color: #0b2e13; font-size: xx-large"><strong>Register with Us</strong></p>

                <!-- Name -->
                <input type="text" id="name" name="name" class="form-control mb-4 @error('name') is-invalid @enderror" placeholder="Name" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Email -->
                <input type="email" id="email" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="E-mail" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Phonenumber -->
                <input type="tel" id="phone_number" name="phone_number" class="form-control mb-4 @error('phone_number') is-invalid @enderror" placeholder="Phone Number" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <!-- Password -->
                <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                       <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>

                <!-- Confirm Password -->
                <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                <br>

                <!-- Send button -->
                <button class="btn btn-block" style="background-color: #0cc170; color: white;" type="submit"><strong>Register</strong></button>

            </form>
            <!-- Default form contact -->
        </div>
    </div>
</div>

<div class="row m-0">
    <div class="section_title" style="background-color: #bfecd5; height: 100vh; text-align: center">
        <div style="margin-top: 50px">
            <h4 style="color: #0cc170;"><span><strong>ABOUT US</strong></span></h4>
            <p class="mid_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible;
                        animation-duration: 1s; animation-delay: 0.5s; font-size: 200%; margin: 50px">Economic growth can be encouraged through the use of sound investments at the business level.</p>
            <p class="last_text wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible;
                        animation-duration: 1s; animation-delay: 0.6s; font-size: 200%; margin: 50px">We empower individuals to participate in common forms of investment including financial markets
                (e.g. stocks and bonds), credit (e.g. loans or bonds), assets (e.g. commodities or artwork), and real estate.
            </p>
        </div>
    </div>
</div>

<!-- Footer -->
<div class="footer-custom">
    <div class="bg-footer">
        <!-- Grid row -->
        <div class="row m-0 ">
            <!-- Grid column -->
            <div class="col-md-6" style="background-color:transparent;">
                <!-- Default form contact -->
                <div>
                    <h1 class="" style="font-size: 250%; color: #0cc170; text-align: left"><strong>GET IN TOUCH</strong></h1><hr style="margin-left: 5px; width: 250px; background-color: #0cc170">
                    <p style="font-size: 150%">
                        I love to listen and I am eagerly waiting to talk to you regarding your concerns. Get in touch with us if you have any queries and I will get back to you as soon as possible.
                    </p>
                </div>
                <form class="text-center p-5 bg-transparent" action="#!" style="border-radius: 15px 15px 15px 15px;">
                    <div>
                        <!-- First Name -->
                        <input type="text" id="name" name="name" class="form-control mb-4 border" style="color: black; border-style: solid; border-width: 5px; border-color: #bfecd5" placeholder="Name" required>

                        <!-- Email -->
                        <input type="email" id="email" name="email" class="form-control mb-4 border" style="color: black; border-style: solid; border-width: 5px; border-color: #bfecd5" placeholder="E-mail" required>
                    </div>

                    <!-- Phonenumber -->
                    <textarea id="message" class="form-control mb-4 border" style="color: black; border-style: solid; border-width: 5px; border-color: #bfecd5" placeholder="Enter Message" rows="3" required></textarea>

                    <!-- Send button -->
                    <button class="btn btn-block"  style="background-color: #0cc170; color: white" type="submit"><strong>Send Message</strong></button>

                </form>
                <!-- Default form contact -->
            </div>
        </div>
    </div>
</div>
<!-- Footer -->
<!-- Copyright -->

<div class="footer-copyright text-center py-3" style="background-color: black; color: white">
    <div class="row m-0">
        <div class="col-md-4 my-auto">
            <span style="font-size: large; font-family: sans-serif">Jijenge Investments <br>
                The Future Lies In Your Hands
            </span>
        </div>
        <div class="col-md-4">
            <div class="row h-20 m-5">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                    <div class="row h-20 m-5">
                        <div class="col-md-4">
                            <i class="fas fa-phone" style="font-size: 300%"></i>
                        </div>
                        <div class="col-md-8 my-auto">
                            <div style="font-size: 125%;font-weight: bold;">
                                CALL ME
                            </div>
                            <div style="font-size: 125%">
                                0728600576
                            </div>
                        </div>
                    </div>

                    <div class="row h-20 m-5">
                        <div class="col-md-4">
                            <i class="far fa-envelope" style="font-size: 350%"></i>
                        </div>
                        <div class="col-md-8 my-auto">
                            <div style="font-size: 125%;font-weight: bold;">
                                MAIL US
                            </div>
                            <div style="font-size: 125%">
                                ijijenge@gmail.com
                            </div>
                        </div>
                    </div>
                    <!-- Grid row -->

                </div>
            </div>
        </div>
        <div class="col-md-4 my-auto">
            <a href="https://www.facebook.com/Jijenge-investments-109255720822089/" style="font-size: 250%"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/p/CBNtm19APKM/?igshid=um5um0dpnj4b" style="font-size: 250%"><i class="m-2 fab fa-instagram"></i></a>
            <a href="https://twitter.com/JijengeI?s=08" style="font-size: 250%"><i class="m-2 fab fa-twitter"></i></a>
        </div>
    </div>
    <span style="font-size: medium">Copyright © 2020 <a href="#">Jijenge Investments</a>. All Rights Reserved | ijijenge@gmail.com</span>
</div>

<!-- Copyright -->
<script src="/js/app.js"></script>
<script>
    $(window).scroll(function(){
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 90);
    });
</script>
</body>
</html>
