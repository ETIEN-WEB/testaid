<!--==================================================-->
<!--Start Footer Area-->
<!--==================================================-->
<div class="footer-area">
    <div class="container">
        <div class="row ">
            <div class="col-lg-3 col-md-6">
                <div class="footer-logo">
                    <img src="{{$public}}assets/images/logo-monartisan.png" alt="">
                </div>
                <div class="dreamit-footer-content">
                    <p>
                        Mon artisan est une plateforme en ligne spécialisée dans le dépannage
                        d'urgence est les travaux de renovation (Plombérie, électricité, froid, peinture etc...).
                    </p>
                </div>
                <div class="dreamit-footer-social-address">
                    <div class="text-footer">
                        <p>Suivez-nous sur:</p>
                    </div>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-content pt-20">
                    <div class="footer-title">
                        <h2>A propos </h2>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">Qui sommes-nous ?</a></li>
                            <li><a href="#">Projets et rénovations</a></li>
                            <li><a href="#">Intégrez notre réseau</a></li>
                            <li><a href="#">Charte qualité</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-content pt-20">
                    <div class="footer-title">
                        <h2>Liens utiles </h2>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <li><a href="#">C.G.U</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Mentions légales</a></li>
                            <li><a href="#">Presse</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-content pt-20 mb-30">
                    <div class="footer-title">
                        <h2>Téléchargez notre application </h2>
                    </div>
                    <div class="footer-content-text ">
                        <a href="">
                            <img src="{{$public}}assets/images/google_play.png" valt="" width="150">
                        </a>
                        &nbsp;
                        <a href="">
                            <img src="{{$public}}assets/images/app_store.png" valt="" width="150">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom-area">
    <div class="container">
        <div class="row ab">
            <div class="col-lg-12  col-md-12 col-md-12">
                <div class="copy-right-text text-center">
                    <p>Copyright © Mon artisan  2023 Tous droits reservés.</p>
                </div>s
            </div>
        </div>
    </div>
</div>
<!--TO TOP BUTTON-->
<!--===================================================-->
<button id="to-top">
    <i class="fa fa-angle-up"></i>
</button>

<!-- jquery js -->
<script src="{{$public}}assets/js/vendor/jquery-3.2.1.min.js"></script>
<!-- bootstrap js -->
<script  src="{{$public}}assets/js/bootstrap.min.js"></script>
<!-- carousel js -->
<script  src="{{$public}}assets/js/owl.carousel.min.js"></script>
<!-- counterup js -->
<script src="{{$public}}assets/js/jquery.counterup.min.js"></script>
<!-- waypoints js -->
<script  src="{{$public}}assets/js/waypoints.min.js"></script>
<!-- wow js -->
<script  src="{{$public}}assets/js/wow.js"></script>
<!-- imagesloaded js -->
<script src="{{$public}}assets/js/imagesloaded.pkgd.min.js"></script>
<!-- venobox js -->
<script  src="{{$public}}venobox/venobox.js"></script>
<script src="{{$public}}assets/js/tilt.jquery.min.js"></script>
<!-- ajax mail js -->
<script  src="{{$public}}assets/js/ajax-mail.js"></script>
<!--  animated-text js -->
<script  src="{{$public}}assets/js/animated-text.js"></script>
<!-- venobox min js -->
<script  src="{{$public}}venobox/venobox.min.js"></script>
<!-- isotope js -->
<script src="{{$public}}assets/js/isotope.pkgd.min.js"></script>
<!-- jquery nivo slider pack js -->
<script  src="{{$public}}assets/js/jquery.nivo.slider.pack.js"></script>
<!-- jquery meanmenu js -->
<script src="{{$public}}assets/js/jquery.meanmenu.js"></script>
<script src="{{$public}}assets/js/popper.min.js"></script>
<!-- jquery scrollup js -->
<script  src="{{$public}}assets/js/jquery.scrollUp.js"></script>
<!-- themes js -->
<script  src="{{$public}}assets/js/jquery.scrollUp.js"></script>
<!-- Jquery UI js -->
<script  src="{{$public}}assets/js/jquery-ui.min.js"></script>
<!-- jquery js -->
<script src="{{$public}}assets/js/main.js"></script>
{{--JS BY ETIEN--}}
<script src="{{$public}}select2/dist/js/select2.full.js"></script>
<script src="{{$public}}select2/dist/js/select2.js"></script>

@if (session('MsgFlash'))
    <script type="text/javascript">
        jQuery(window).on("load", function(){
            var flash_notify = $('.flash_notify');
            if ('{{ session('MsgFlash')['type'] == 'succes' }}') {
                flash_notify.css('background-color', 'green');
            } else {
                flash_notify.css('background-color', 'red');
            }
            var flash_type = $('.flash_type');
            var flash_msg = $('.flash_msg');


            flash_type.html('');
            flash_type.html('{{ session('MsgFlash')['type'] }}');
            flash_msg.html('');
            flash_msg.html('{{ session('MsgFlash')['msg'] }}');
            flash_notify.show();
            setTimeout(hideFlashnotify, 3500);
            function hideFlashnotify(){
                flash_notify.hide()
            }
            //  {{ session('MsgFlash')['type'] }}("{{ isset(session('MsgFlash')['msg']) ? session('MsgFlash')['msg'] : null }}", "{{ isset(session('MsgFlash')['title']) ? session('MsgFlash')['title'] : null }}")
        });
    </script>
@endif


@stack('js')

