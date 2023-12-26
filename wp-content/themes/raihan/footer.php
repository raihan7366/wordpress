
        <div class="container-fluid mt-4  footer-2">
            <div class="row">
                <div class="col-lg-3 py-3 footer-2-p1">
                    <h3 class="text-center py-2"><?= get_option( 'my_options' )['footer_about_company'] ?? ''; ?></h3>
                    <p class="foot-part-3 text-center-justify" style="color: #747171; font-weight: bold;">
                    <?= get_option( 'my_options' )['footer_about_company_description'] ?? ''; ?></p>
                    <!-- certification -->
                    <a href="#"><img src=<?= get_option( 'my_options' )['footer_certification'] ?? ''; ?> class="d-block mx-auto" style="width: 50%;"></a>
                    
                    <div class="icon pt-3 text-center ">
                    <?php wp_nav_menu(array('theme_location'=>'social_option','container'=>"",'menu_class'=>"SO")) ?>
                        <!-- <a href="#"> <i class="fab fa-facebook fa-2x"></i></a>
                        <a href="#"> <i class="fab fa-linkedin fa-2x"></i></a>
                        <a href="#"> <i class="fab fa-twitter fa-2x"></i></a>
                        <a href="#"> <i class="fab fa-pinterest fa-2x"></i></a>
                        <a href="#"><i class="fab fa-youtube fa-2x"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-3 mt-4  footer-2-p2-p3">
                    <h3 class="text-center">The Company</h3>
                    <?php wp_nav_menu(array('theme_location'=>'footer_menu1','container'=>"",'menu_class'=>"foot-p2-ul ps-5 mx-1")) ?>
                </div>
                <div class="col-lg-3 mt-4  footer-2-p2-p3">
                    <h3 class="text-center">More Information</h3>
                    <?php wp_nav_menu(array('theme_location'=>'footer_menu2','container'=>"",'menu_class'=>"foot-p2-ul ps-5 mx-1")) ?>
                </div>
                <div class="col-lg-3 mt-4    footer-2-p4">
                <?php if ( is_active_sidebar( 'address-widget-area' ) ) : ?>
                        <?php dynamic_sidebar( 'address-widget-area' ); ?>
                    <?php endif; ?>
                    <!-- <h3 class="text-center">Corporate Office</h3>
                    <ul class="foot-p4-ul ps-5">
                        <li>8 Shewrapara,
                            Rokeya Sarani, Mirpur,
                            Dhaka-1216,
                            Bangladesh.
                        </li>
                        <br>
                        <li>
                            <a href="tel:88 02 58054370">Tel:+88 02 58054370</a>
                        </li>
                        <li>
                            <a href="tel:+88 01713441000"> Phone:+88 01713441000</a>
                        </li>
                        <li>
                            <a href="mailto: info@hatil.com">Email: &nbspinfo@hatil.com</a> 
                        </li>
                    </ul> -->
                </div>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
<!--Footer-3-->
<div class="container-fluid     footer-3 foot-3-bg">
            <div class="row">
                <div class="col-lg-2 text-white text-center emi-details">
                    <p>EMI Details | Pay With |</p>
                </div>
                <div class="col-lg-10  bank-list">
                <a href="#"><img src="<?= get_option( 'my_options' )['footer_image_list'] ?? ''; ?>" alt=""></a>
                </div>
            </div>

            <!-- Delivery title -->
            <div class="row">
                <div class="col-lg-12 text-center mt-3 text-white     facelities-info">
                    <h3><?= get_option( 'my_options' )['footer_deliver_in'] ?? ''; ?></h3>
                    <!-- Delivery description -->
                    <p><?= get_option( 'my_options' )['footer_delivery_description'] ?? ''; ?>
                    </p>
                </div>
            </div>

            <!-- copyright -->
            <div class="row">
                <div class="col-lg-12  text-white  text-center">
                    <p class="copyright">&copy;<?= get_option( 'my_options' )['footer_copyright'] ?? ''; ?></p>
                </div>
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</html>