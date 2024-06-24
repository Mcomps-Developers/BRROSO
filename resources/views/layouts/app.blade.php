<!DOCTYPE html>
<html lang="zxx">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BRROSO</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/lightbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}">

</head>

<body>

    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-box-one">
                    <div class="pre-box-two"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left">
                        <ul>
                            <li>
                                <i class="icofont-location-pin"></i>
                                <a href="#">Baidoa-Bay region Somalia</a>
                            </li>
                            <li>
                                <i class="icofont-ui-call"></i>
                                <a href="tel:0123456987">+252614756688</a>
                            </li>
                            {{-- <li>
                                <i class="icofont-ui-email" ></i>
                                <a href="mailto:example@example.com" >example@example.com</a>
                            </li> --}}
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="right">
                        <ul>
                            <li>
                                <span>Follow Us:</span>
                            </li>
                            <li>
                                <a href="https://www.facebook.com" target="_blank">
                                    <i class="icofont-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.twitter.com" target="_blank">
                                    <i class="icofont-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com" target="_blank">
                                    <i class="icofont-youtube-play"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com" target="_blank">
                                    <i class="icofont-instagram"></i>
                                </a>
                            </li>
                        </ul>
                        <div class="language">
                            <select>
                                <option>English</option>
                                <option>العربيّة</option>
                                <option>Deutsch</option>
                                <option>Português</option>
                            </select>
                        </div>
                        <div class="header-search">
                            <i id="search-btn" class="icofont-search-2"></i>
                            <div id="search-overlay" class="block">
                                <div class="centered">
                                    <div id="search-box">
                                        <i id="close-btn" class="icofont-close"></i>
                                        <form>
                                            <input type="text" class="form-control" placeholder="Search..." />
                                            <button type="submit" class="btn">Search</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="{{ asset('assets/img/logo-two.png') }}" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('assets/img/logo.jpg') }}" class="logo-one" height="45" width="45">
                        <img src="{{ asset('assets/img/logo-two.png') }}" class="logo-two" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link active">Home</a>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">Media</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('blog') }}" class="nav-link">Blog</a>
                                    </li>


                                    <li class="nav-item">
                                        <a href="{{ route('events') }}" class="nav-link">Events</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('privacy.policy') }}" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('terms.and.conditions') }}" class="nav-link">Terms &
                                            Conditions</a>
                                    </li>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link dropdown-toggle">About</a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link">About BRROS</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('team') }}" class="nav-link">Team</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('faq') }}" class="nav-link">FAQ</a>
                                    </li>


                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ route('causes') }}" class="nav-link">Causes</a>
                            </li>


                            <li class="nav-item">
                                <a href="{{ route('contact') }}" class="nav-link">Contact</a>
                            </li>
                        </ul>
                        <div class="side-nav">
                            <a class="donate-btn" href="#">
                                Donate
                                <i class="icofont-heart-alt"></i>
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>


    {{ $slot }}


    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="logo" href="index.html">
                                <img src="assets/img/logo-two.png" alt="Logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vero, magni est placeat
                                neque, repellat maxime a dolore</p>
                            <ul>
                                <li>
                                    <a href="https://www.facebook.com" target="_blank">
                                        <i class="icofont-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.twitter.com" target="_blank">
                                        <i class="icofont-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com" target="_blank">
                                        <i class="icofont-youtube-play"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank">
                                        <i class="icofont-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Quick Links</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('faq') }}">
                                        <i class="icofont-simple-right"></i>
                                        Faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        <i class="icofont-simple-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('events') }}">
                                        <i class="icofont-simple-right"></i>
                                        Events
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('causes') }}">
                                        <i class="icofont-simple-right"></i>
                                        Causes
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-links">
                            <h3>Useful Links</h3>
                            <ul>
                                <li>
                                    <a href="{{ route('faq') }}">
                                        <i class="icofont-simple-right"></i>
                                        Faqs
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('contact') }}">
                                        <i class="icofont-simple-right"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('events') }}">
                                        <i class="icofont-simple-right"></i>
                                        Events
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('causes') }}">
                                        <i class="icofont-simple-right"></i>
                                        Causes
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3>Contact info</h3>
                            <div class="contact-inner">
                                <ul>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        <a href="#">Baidoa-By region Somalia</a>
                                    </li>
                                    <li>
                                        <i class="icofont-ui-call"></i>
                                        <a href="tel:123456789">+252614756688</a>
                                    </li>
                                    <li>
                                        <i class="icofont-location-pin"></i>
                                        <a>Berdale, Burhakaba, Qansaxdhere, Diinsoor, Xudur, Wajid,
                                            Ceelbarde, Marka, Barawe,
                                            Kismayo, Dhobley, Bardhere and Dollow</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-area">
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved. Powered By <a
                        href="https://mcomps.africa/"><b>Mcomps</b></a>
                </p>
            </div>
        </div>
    </footer>


    <div class="go-top">
        <i class="icofont-arrow-up"></i>
        <i class="icofont-arrow-up"></i>
    </div>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
</body>



</html>
