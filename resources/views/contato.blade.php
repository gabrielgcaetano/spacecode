<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contato - SpaceCode.Tech</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="HostSpace template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/contact.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">

    <link rel="apple-touch-icon" sizes="57x57" href="/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

</head>
<body>
<div class="super_container">
    <header class="header trans_400">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                        <div class="logo"><a href="#">SpaceCode<span>.Tech</span></a></div>
                        <nav class="main_nav ml-auto mr-auto">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li><a href="{{route('home')}}">Home</a></li>
                                <li class="active"><a href="{{route('contato')}}">Contato</a></li>
                            </ul>
                        </nav>
                        <div class="log_reg">
                            <div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
                                <div class="login log_reg_text"><a href="#">Login</a></div>
                                <div class="register log_reg_text"><a href="#">Register</a></div>
                            </div>
                        </div>
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="menu_overlay trans_400"></div>
    <div class="menu trans_400">
        <div class="menu_close_container">
            <div class="menu_close">
                <div></div>
                <div></div>
            </div>
        </div>
        <div class="log_reg">
            <div class="log_reg_content d-flex flex-row align-items-center justify-content-end">
                <div class="login log_reg_text"><a href="#">Login</a></div>
                <div class="register log_reg_text"><a href="#">Register</a></div>
            </div>
        </div>
        <nav class="menu_nav">
            <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('contato')}}">Contact</a></li>
            </ul>
        </nav>
    </div>
    <div class="home">
        <div class="home_background"></div>
        <div class="background_image background_city" style="background-image:url(images/city_5.png)"></div>
        <div class="cloud cloud_1"><img src="images/cloud_left.png" alt=""></div>
        <div class="cloud cloud_2"><img src="images/cloud_left.png" alt=""></div>
        <div class="cloud cloud_3"><img src="images/cloud_left_full.png" alt=""></div>
        <div class="cloud cloud_4"><img src="images/cloud_left.png" alt=""></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content">
                            <div class="home_title">Contato</div>
                            <div class="breadcrumbs">
                                <ul class="d-flex flex-row align-items-center justify-content-start">
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>Contato</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact_col">
                    <div class="contact_content">
                        <div class="contact_title magic_fade_in">Informações para contato</div>
                        <div class="contact_text magic_fade_in">
                            <p>Envie-nos uma mensagem que entraremos em contato com você.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 contact_col magic_fade_in">
                    <div class="message_form_container">
                        <div class="contact_title">Formulário</div>
                        <br/>
                        <form id="contact_form" class="contact_form" method="POST" action="{{ route('envio-emails2' )}}">
                            {!! csrf_field() !!}

                            <input type="text" class="message_input" placeholder="Nome" name="nome" required="required">
                            <input type="email" class="message_input" placeholder="E-mail" name="email" required="required">
                            <input type="text" class="message_input" placeholder="Seu Telefone (xx) xxxx-xxxx" name="telefone" required="required">
                            <textarea class="message_input message_textarea" name="mensagem" placeholder="Mensagem"
                                      required="required"></textarea>
                            <button class="message_form_button">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer magic_fade_in">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 footer_col">
                    <div class="footer_links">
                        <div class="row">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap-4.1.2/popper.js"></script>
<script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact.js"></script>
</body>
</html>
