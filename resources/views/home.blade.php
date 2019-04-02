@include('inc.head')

<div class="super_container">
    <header class="header trans_400">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="header_content d-flex flex-row align-items-center justify-content-start trans_400">
                        <div class="logo"><a href="#">SpaceCode.<span>Tech</span></a></div>
                        <nav class="main_nav ml-auto mr-auto">
                            <ul class="d-flex flex-row align-items-center justify-content-start">
                                <li class="active"><a href="{{route('contato')}}">Home</a></li>
                                <li><a href="{{ route('contato') }}">Contato</a></li>
                            </ul>
                        </nav>
                        <div class="log_reg">
                            <div class="log_reg_content d-flex flex-row align-items-center justify-content-start">
                                <div class="login log_reg_text"><a href="#">Entrar</a></div>
                                <div class="register log_reg_text"><a href="#">Registro</a></div>
                            </div>
                        </div>
                        <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Menu -->

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
                <div class="login log_reg_text"><a href="#">Entrar</a></div>
                <div class="register log_reg_text"><a href="#">Registro</a></div>
            </div>
        </div>
        <nav class="menu_nav">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">Sobre nós us</a></li>
                <li><a href="services.html">Serviços</a></li>
                <li><a href="contact.html">Contato</a></li>
            </ul>
        </nav>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background"></div>
        <div class="background_image background_city" style="background-image:url(images/city.png)"></div>
        <div class="cloud cloud_1"><img src="images/cloud.png" alt=""></div>
        <div class="cloud cloud_2"><img src="images/cloud.png" alt=""></div>
        <div class="cloud cloud_3"><img src="images/cloud_full.png" alt=""></div>
        <div class="cloud cloud_4"><img src="images/cloud.png" alt=""></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content text-center">


                            <div class="home_title">www.spacecode.<span>tech</span></div>

                            <div class="home_text">Utilizamos as melhores tecnologias do mercado para oferecer uma
                                solução ideal para cada cliente.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col magic_fade_in">
                    <div class="section_title text-center"><h2>Serviços</h2></div>
                </div>
            </div>
            <div class="row intro_row">
                <div class="intro_dots magic_fade_in" style="background-image:url(images/dots.png)"></div>

                <!-- Intro Item -->
                <div class="col-lg-4 intro_col magic_fade_in">
                    <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_icon"><img src="images/icon_1.svg"
                                                         alt="https://www.flaticon.com/authors/freepik"></div>
                        </div>
                        <div class="intro_item_content">
                            <div class="intro_item_title">Web Sites</div>
                            <div class="intro_item_text">
                                <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                    pretium turpis eget nibh laoreet iaculis.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-lg-4 intro_col magic_fade_in">
                    <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_icon"><img src="images/icon_2.svg"
                                                         alt="https://www.flaticon.com/authors/freepik"></div>
                        </div>
                        <div class="intro_item_content">
                            <div class="intro_item_title">Sistema de gerenciamento</div>
                            <div class="intro_item_text">
                                <p>Ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam pretium turpis
                                    eget nibh laoreet iaculis. Proin ac urna at lectus.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Intro Item -->
                <div class="col-lg-4 intro_col magic_fade_in">
                    <div class="intro_item d-flex flex-column align-items-center justify-content-start text-center">
                        <div class="intro_icon_container d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_icon"><img src="images/icon_3.svg"
                                                         alt="https://www.flaticon.com/authors/freepik"></div>
                        </div>
                        <div class="intro_item_content">
                            <div class="intro_item_title">e-Commerce</div>
                            <div class="intro_item_text">
                                <p>Suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.
                                    Proin ac urna at lectus volutpat lobortis.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col text-center">
                    <div class="intro_button text-center trans_200 ml-auto mr-auto"><a href="#">Apartir de
                            R$49.90/mês*</a></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services -->

    <div class="services">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/services.jpg"
             data-speed="0.8"></div>
        <div class="container">
            <div class="row">
                <div class="col magic_fade_in">
                    <div class="section_title text-center"><h2>Our Services</h2></div>
                </div>
            </div>
            <div class="row services_row">

                <!-- Service -->
                <div class="col-lg-4 service_col magic_fade_in">
                    <div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
                        <div class="service_icon"><img class="svg" src="images/icon_4.svg"
                                                       alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="service_title"><h3>Cloud Backup</h3></div>
                        <div class="service_text">
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                pretium turpis ege.</p>
                        </div>
                        <div class="service_button trans_200"><a href="#">Read More</a></div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-lg-4 service_col magic_fade_in">
                    <div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
                        <div class="service_icon"><img class="svg" src="images/icon_5.svg"
                                                       alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="service_title"><h3>Data Migration</h3></div>
                        <div class="service_text">
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                pretium turpis ege.</p>
                        </div>
                        <div class="service_button trans_200"><a href="#">Read More</a></div>
                    </div>
                </div>

                <!-- Service -->
                <div class="col-lg-4 service_col magic_fade_in">
                    <div class="service d-flex flex-column align-items-center justify-content-start text-center trans_200">
                        <div class="service_icon"><img class="svg" src="images/icon_6.svg"
                                                       alt="https://www.flaticon.com/authors/freepik"></div>
                        <div class="service_title"><h3>VPS Hosting</h3></div>
                        <div class="service_text">
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                pretium turpis ege.</p>
                        </div>
                        <div class="service_button trans_200"><a href="#">Read More</a></div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Pricing -->

    <div class="pricing">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="pricing_container d-flex flex-row align-items-start justify-content-start flex-wrap">

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">HotSite</div>
                            <div class="pricing_content">
                                <div class="package_price">R$ 49.90<span>/Mês</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Responsivo</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Código SEO otimizado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Link para comunidades sociais</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Google Maps Integrado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Suporta vídeos do YouTube</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>1 Páginas</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Contas de 5 E-mail</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>24/7 Suporte</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Painel de Controle</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div> -->
                            </div>
                        </div>

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">Básico WebSite</div>
                            <div class="pricing_content">
                                <div class="package_price">R$ 59.90<span>/Mês</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Responsivo</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Código SEO otimizado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Link para comunidades sociais</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Google Maps Integrado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Suporta vídeos do YouTube</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>3 Páginas</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>7 Contas de  E-mail</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>24/7 Suporte</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Painel de Controle</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div> -->
                            </div>
                        </div>

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">e-Commerce</div>
                            <div class="pricing_content">
                                <div class="package_price">R$ 79.90<span>/Mês</span></div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Responsivo</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Código SEO otimizado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Link para comunidades sociais</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Google Maps Integrado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Suporta vídeos do YouTube</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>5 Páginas</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>10 Contas de E-mail</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>24/7 Suporte</span>
                                        </li>
                                        <li class="d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Painel de Controle</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div> -->
                            </div>
                        </div>

                        <!-- Pricing Item -->
                        <div class="pricing_item text-center magic_fade_in">
                            <div class="pricing_title">Aplicativos</div>
                            <div class="pricing_content">
                                <div class="package_price">Consulte-nos</div>
                                <div class="pricing_list">
                                    <ul>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Responsivo</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/x.png" alt="">
                                            <span>Código SEO otimizado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Link para comunidades sociais</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Google Maps Integrado</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Suporta vídeos do YouTube</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>7 Telas</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>15 E-mail Accounts</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>24/7 Suporte</span>
                                        </li>
                                        <li class="pack_ok d-flex flex-row align-items-center justify-content-center">
                                            <img src="images/ok.png" alt="">
                                            <span>Painel de Controle</span>
                                        </li>
                                    </ul>
                                </div>
                                <!-- <div class="pricing_button ml-auto mr-auto"><a href="#">Buy Now</a></div> -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Why Choose Us -->

    <div class="choice">
        <div class="container">
            <div class="row row-lg-eq-height">

                <!-- Choice Image -->
                <div class="col-lg-6 choice_col magic_fade_in">
                    <div class="choice_image"><img src="images/choice.png" alt=""></div>
                </div>

                <!-- Choice Content -->
                <div class="col-lg-6 choice_col magic_fade_in">
                    <div class="choice_content">
                        <div class="section_title magic_fade_in"><h2>Por que nos escolher?</h2></div>
                        <div class="choice_text">
                            <p>Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum. Etiam
                                pretium turpis eget nibh laoreet iaculis. Nullam lacinia ex eleifend orci porttitor,
                                suscipit interdum augue condimentum. Etiam pretium turpis eget nibh laoreet iaculis.</p>
                        </div>
                        <div class="choice_list">
                            <ul class="d-flex flex-row align-items-start justify-content-between">
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_7.svg"
                                                                  alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Marketing</div>
                                </li>
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_8.svg"
                                                                  alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Estatísticas</div>
                                </li>
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_9.svg"
                                                                  alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Hospedagem</div>
                                </li>
                                <li class="d-flex flex-column align-items-center justify-content-center magic_fade_in">
                                    <div class="choice_icon"><img src="images/icon_10.svg"
                                                                  alt="https://www.flaticon.com/authors/freepik"></div>
                                    <div class="choice_title">Qualidade</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="cta_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-between justify-content-center magic_fade_in">
                        <div class="cta_title">Tenha seu site agora!</div>
                        <div class="cta_price"><span>Apartir de</span>R$49.90<span>/mês*</span></div>
                        <div class="cta_button"><a href="#">Entre em contato</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="cta_content d-flex  flex-column align-items-center justify-content-center magic_fade_in">
                        <div><span>* Valor válido no contrato de permanência mínima de 6 meses.</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('inc.footer')
