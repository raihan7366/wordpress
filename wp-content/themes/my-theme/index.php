<?php
    /**
     * The main template file
     */

    get_header();
?>

        <div class="container-fluid py-3 ">
            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-inner  crsl-txt-bg">
                    <?php
                        $args=array('post_type'=>'slider','posts_per_page'=>10);
                        $loop=new WP_Query($args);
                        $i=0;
                        while($loop->have_posts()){
                        $loop->the_post();
                    ?>
                        <div class="carousel-item <?= $i==0?'active':'' ?>">
                            <div class="row">
                                <div class="col-lg-6 col-sm-0 d-lg-block d-none  ">
                                    
                                    <p class="crsl-p"><?php the_title() ?></p>
                                    <div class="d-grid justify-content-center">
                                        <button class="btn  px-5   crsl-btn" type="button">Explore Now</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12">
                                    <img src="<?= get_the_post_thumbnail_url(); ?>" alt="Image 3">    
                                    
                                </div>
                            </div>
                        </div>
                    <?php $i++; } ?>
                   
                </div>
            </div>
        </div>
 
        <div class="container-fluid ">
            <div class="row">
                <div class="col-lg-12 list-title">
                    <h1 class="">Popular Furniture By Choice</h1>
                    <p class="">Categories our customers love to check out.</p>
                </div>
            </div>

            <!--Category Icon-->
            <div class="container  item-list ">
                <div class="row">
                    <?php

                        $args = array(
                            'taxonomy'     => 'product_cat',
                            'orderby'      => 'name',
                            'show_count'   => 0,
                            'pad_counts'   => 0,
                            'hierarchical' => 1,
                            'title_li'     => "",
                            'hide_empty'   => 0
                        );

                        $all_categories = get_categories( $args );

                        foreach ( $all_categories as $cat ) {
                            $image = wp_get_attachment_url(get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true));
                           
                            if ( $cat->category_parent != 0 ) { ?>
                                <span class=" col-md-1 col-2 my-1   my-item">
                                    <a href="<?= get_term_link($cat->slug, 'product_cat') ?>">
                                        <span class="explore-preview">
                                            <img src="<?= $image ?>" class="d-block w-100 mx-auto"  alt="">
                                        </span>
                                        <p class="title text-center"><?= $cat->name ?></p>
                                    </a>
                                </span> 
                    <?php   }
                        }
                    ?>
                </div>
            </div>
        </div>

        <!--Image card-office-furniture-->

        <div class="container-fluid mt-4    image-card-section-2">
            <div class="row">
                <div class="col-lg-12 text-center    img-card-title-bar">
                    <h1 class="">Buy Furniture Based on Spaces</h1>
                    <p class="">Every Space has its unique needs.</p>
                </div>
                <div class="row">
                    <?php

                        $args = array(
                            'taxonomy'     => 'product_cat',
                            'orderby'      => 'name',
                            'show_count'   => 0,
                            'pad_counts'   => 0,
                            'hierarchical' => 1,
                            'title_li'     => "",
                            'hide_empty'   => 0
                        );

                        $all_categories = get_categories( $args );

                        foreach ( $all_categories as $cat ) {
                            $image = wp_get_attachment_url(get_woocommerce_term_meta($cat->term_id, 'thumbnail_id', true));
                        
                            if ( $cat->category_parent == 0 ) { ?>
                                <div class="col-lg-4 mt-3">
                                    <div class="card" style="width:400px">
                                        <img class="card-img-top w-100" src="<?= $image ?>" alt="Card image">
                                        <div class="card-body text-center">
                                        <p class="card-title"><?= $cat->name ?><p>
                                        <a href="<?= get_term_link($cat->slug, 'product_cat') ?>" class="btn btn-primary card-1">Explore Now &raquo;</a>
                                        </div>
                                    </div>
                                </div>
                    <?php } } ?>
                </div>
            </div>
            <br>
            <br>
            
        </div>

        <!--Footer Part-1-->
        <div class="container-fluid   footer-1 ">
            <div class="row">
                <div class="col-lg-12 mt-5   ">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to 
                        <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_content('Read more...'); ?>
                        <?php comments_template(); ?>
                        </div> <!-- #post-n -->
                        <?php endwhile; else: ?>
                        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
<?php
    get_footer();
?>     