
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jijenge Investments</title>

    <style type="text/css">
        h5 {
            font-family: sans-serif;
            margin: auto;
            margin-bottom: 50px;
            text-align: center;
            font-size: large;
            max-width: 250px;
            position: relative;
        }

        h5::before {
            content: "";
            display: block;
            width: 55px;
            height: 1px;
            background: #000;
            position: absolute;
            left: 0;
            top: 50%;
            z-index: auto;
        }

        h5::after {
            content: "";
            display: block;
            width: 55px;
            height: 1px;
            background: #000;
            position: absolute;
            right: 0;
            top: 50%;
            z-index: auto;
        }

    </style>

    <!-- Bootstrap core CSS -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/welcome.css" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar">
    <div class="container-fluid">
        <a class="navbar-brand">
            <img src="/img/logo.png" alt="Jijenge Logo" class="brand-image img-size-32 img-circle elevation-1" style="opacity: .8;">
            <strong class="ml-1">Jijenge</strong>Investments
        </a>
        @if (Route::has('login'))
            @auth
                @can('admin')
                    <a class="btn btn-primary" href="{{ url('admin/home') }}">
                        <strong>Home</strong>
                    </a>
                @else
                    <a class="btn btn-primary" href="{{ url('/home') }}">
                        <strong>Home</strong>
                    </a>
                @endcan
            @else
                <a class="btn btn-flat btn-primary" href="{{ route('login') }}">Training</a>
            @endauth
        @endif
    </div>
</nav>

<!-- Masthead -->
<header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h1 style="font-family: 'Helvetica'; font-size: 400%">Jijenge <br> Investments</h1>
                <h1 style="font-family: 'Brush Script MT'; font-size: 400%; font-style: italic">The future lies in your hands</h1>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <div class="form-row">
                    <div class="col-12 col-md-12">
                        <a href="{{ route('register') }}" class="btn btn-lg btn-f blue-gradient">Sign up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Icons Grid -->
<section class="features-icons text-center" style="background-color: #ffffff">
    <div class="container">
        <div class="mt-0" style="margin-top: 0px; margin-bottom: 50px">
            <h5><span><strong>ABOUT US</strong></span></h5>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-video m-auto text-primary"></i>
                    </div>
                    <h3>Trainings</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-book-open m-auto text-primary"></i>
                    </div>
                    <h3>Presentation</h3>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <div class="features-icons-icon d-flex">
                        <i class="fas fa-question m-auto text-primary"></i>
                    </div>
                    <h3>Consultation</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcases -->
<section class="showcase" style="background-color: #d8dcd6">
    <div class="p-0">
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img showcase-zoom"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Trainings</h2>
                <p class="lead mb-0">We hold trainings on a weekly basis on Zoom to discuss various topics on investments, thus encouraging economic growth at business levels!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img docs showcase-docs"></div>
            <div class="col-lg-6 my-auto showcase-text">
                <h2>Presentation</h2>
                <p class="lead mb-0">We provide free documentation that you can access at your own free time that will help broaden your knowledge on investments!</p>
            </div>
        </div>
        <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img showcase-question"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                <h2>Consultations</h2>
                <p class="lead mb-0">In case you might have a question on any issue regarding investments, you can send us an email and we will get back to you!</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">Ready to get started? Sign up now!</h2>
            </div>
            <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                <div class="form-row">
                    <div class="col-12 col-md-12">
                        <a href="{{ route('register') }}" class="btn  btn-lg btn-primary">Sign up!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="footer bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                <ul class="list-inline mb-2">
                    <li class="list-inline-item">
                        <a href="#">About</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Contact</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Terms of Use</a>
                    </li>
                    <li class="list-inline-item">&sdot;</li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                </ul>
                <p class="text-muted small mb-4 mb-lg-0">&copy; Copyright © 2020. <a href="#">Jijenge Investments</a>. All Rights Reserved | ijijenge@gmail.com.</p>
            </div>
            <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item mr-3">
                        <a href="https://www.facebook.com/Jijenge-investments-109255720822089/">
                            <i class="fab fa-facebook fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mr-3">
                        <a href="https://twitter.com/JijengeI?s=08">
                            <i class="fab fa-twitter fa-2x fa-fw"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="https://www.instagram.com/p/CBNtm19APKM/?igshid=um5um0dpnj4b">
                            <i class="fab fa-instagram fa-2x fa-fw"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="/js/app.js"></script>

</body>

</html>
