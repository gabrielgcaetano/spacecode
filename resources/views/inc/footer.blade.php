<footer class="footer magic_fade_in">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 footer_col magic_fade_in">
                <div class="footer_about">
                    <div class="footer_logo">GC<span>Solutions</span></div>
                    <div class="copyright">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                        Todos direitos Reservados | Este site foi feito por <i class="fa fa-heart-o"
                                                                               aria-hidden="true"></i> por <a
                                href="https://colorlib.com" target="_blank">GC Solutions</a>
                    </div>
                    <div class="footer_text">
                        <p>Entre em contato conosco, nossa equipe estará pronta para entrar em contato com você,
                            para crair uma solução personalizada para você.</p>
                    </div>
                    <div class="contact_container">
                        <form id="contact_form" class="contact_form" method="POST" action="{{ route('envio-emails' )}}">
                            {!! csrf_field() !!}
                            <div align="center" style="display: none" id="mensagem-envio-email">
                                <h1 style="font-size: 30px;color:#1befc5">Contato feito com sucesso</h1>
                                <h5 style="font-size: 25px;color:#1befc5">Em breve você recebera o contato da equipe.</h5>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" class="contact_input" placeholder="Seu Nome"
                                           name="nome" required="required">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="contact_input"
                                           name="telefone" placeholder="Seu Telefone (xx) xxxx-xxxx" required="required">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="email" class="contact_input" placeholder="Seu e-mail"
                                           name="email" required="required">
                                </div>
                            </div>
                            <div>
                                <textarea class="contact_input contact_textarea" placeholder="Menssagem"
                                           name="mensagem" required="required"></textarea>
                            </div>
                            <button class="contact_button">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
            {{--<div class="col-lg-6 footer_col">--}}
            {{--<div class="footer_links">--}}
            {{--<div class="row">--}}
            {{--<div class="col-sm-6 footer_list_col magic_fade_in">--}}
            {{--<div class="footer_list_container">--}}
            {{--<div class="footer_list_title">Hosting Options</div>--}}
            {{--<ul class="footer_list">--}}
            {{--<li><a href="#">Web Hosting</a></li>--}}
            {{--<li><a href="#">WordPress Hosting</a></li>--}}
            {{--<li><a href="#">VPS Hosting</a></li>--}}
            {{--<li><a href="#">Cloud Server</a></li>--}}
            {{--<li><a href="#">Reseller Package</a></li>--}}
            {{--<li><a href="#">Dedicated Hosting</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 footer_list_col magic_fade_in">--}}
            {{--<div class="footer_list_container">--}}
            {{--<div class="footer_list_title">Domains</div>--}}
            {{--<ul class="footer_list">--}}
            {{--<li><a href="#">Buy a Domain</a></li>--}}
            {{--<li><a href="#">Premium Domain Names</a></li>--}}
            {{--<li><a href="#">Web Hosting</a></li>--}}
            {{--<li><a href="#">Transfer Your Domain</a></li>--}}
            {{--<li><a href="#">Domain Marketplace</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 footer_list_col magic_fade_in">--}}
            {{--<div class="footer_list_container">--}}
            {{--<div class="footer_list_title">Resellers</div>--}}
            {{--<ul class="footer_list">--}}
            {{--<li><a href="#">VPS Hosting</a></li>--}}
            {{--<li><a href="#">Cloud Server</a></li>--}}
            {{--<li><a href="#">Reseller Package</a></li>--}}
            {{--<li><a href="#">Dedicated Hosting</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6 footer_list_col magic_fade_in">--}}
            {{--<div class="footer_list_container">--}}
            {{--<div class="footer_list_title">Support</div>--}}
            {{--<ul class="footer_list">--}}
            {{--<li><a href="#">Buy a Domain</a></li>--}}
            {{--<li><a href="#">Premium Domain Names</a></li>--}}
            {{--<li><a href="#">Web Hosting</a></li>--}}
            {{--</ul>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
            {{--</div>--}}
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
<script src="js/custom.js"></script>
<script type="javascript">
    /*
    Mensagem de envio de emailemailsontato
 */
    function enviadoEmail(enviado) {
        if (enviado) {
            document.getElementById("mensagem-envio-email").style.display = 'block';
        } else {
            document.getElementById("mensagem-envio-email").style.display = 'none';
        }
    }
</script>
<!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
    (function(){ var widget_id = 'gz7sIXzgkA';var d=document;var w=window;function l(){
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
        s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
        if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
        else{w.addEventListener('load',l,false);}}})();
</script>
<!-- {/literal} END JIVOSITE CODE -->
</body>
</html>
