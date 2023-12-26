<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?= wp_enqueue_style( 'style', get_stylesheet_uri() ); ?>
    <?php wp_head(); ?>
</head>
<body <?php body_class() ?>>
    <div class="container-fluid">
        <div class="container-fluid" style="width: 93%;">
           
            <div class="row top-bar-1">
                <div class="col-lg-3  d-lg-block d-none mt-3  ">
                    <div>
                        <a href="tel:01935-569806">
                            <span class="bi bi-telephone   top-icon1">
                                01935-569806
                            </span>
                        </a>
                    </div>
                    <div class="pt-2">
                        <a href="mailto:info@hatil.com">
                            <span class="bi bi-envelope   top-icon1">
                               info@hatil.com
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5 col-12 text-center mt-3   logo-1">
                    <a href="<?= home_url() ?>">
                        <?php
                            $logo_id=get_theme_mod('custom_logo');
                            $logo=wp_get_attachment_image_src($logo_id, 'full');
                            if(has_custom_logo()){
                        ?>
                                <img src="<?= esc_url($logo[0]); ?>" alt="<?php bloginfo('name') ?>" style="width:200px;" class="">
                        <?php }else{ ?>
                                <img src="<?= get_template_directory_uri(); ?>/images/logo.png" alt="Hatil Logo" style="width:200px;" class="">
                        <?php } ?>
                    </a>
                </div>
                <div class="col-lg-3 float-end mt-3    search-1 ">
                    <div class="input-group w-60 ">
                        <input type="text" class="form-control" placeholder="Search....">
                        <button class="btn btn-outline-secondary" type="button">
                          <i class="bi bi-search"></i>
                        </button> 
                    </div> 
                </div>
                <div class="col-lg-1 text-start d-lg-block d-none  mt-1  cart-1">
                   <a href="#"><span class="bi bi-cart3 top-icon2 ms-2"></span></a>
                </div>
            </div>
            <hr class="hr1">
            <div class=" mynav container-fluid" style="width: 93%;">
                <div class="row">
                    <div class="container-fluid ">
                        <nav class="navbar navbar-expand-lg  navbar-light">
                            <div class="container-fluid px-0">
                                <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <?php wp_nav_menu(array('theme_location'=>'main_menu','container'=>"")) ?>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>