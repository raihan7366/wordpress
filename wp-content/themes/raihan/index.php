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
 
        <!--Category Icon-->

        <div class="container-fluid item-list">
            <div class="row">
                <div class="col-lg-12 list-title">
                    <h1 class=""><?= get_option( 'my_options' )['main_PFBC'] ?? ''; ?></h1>
                    <p class=""><?= get_option( 'my_options' )['main_PFBC_tag'] ?? ''; ?>.</p>
                </div>
                
                <?php
                        $args=array('post_type'=>'category_icon','posts_per_page'=>20);
                        $loop=new WP_Query($args);
                        $i=1;
                        while($loop->have_posts()){
                        $loop->the_post();
                ?>
                    <span class=" col-md-1 col-2 my-1   my-item">
                        <a class="" href="<?= get_the_post_thumbnail_url(); ?>">
                            <span class="explore-preview">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" class="image-style-none d-block mx-auto" style="width: 70px;" alt="Category Icon">
                            </span>
                            <p class="title text-center"><?php the_title() ?></p>
                        </a>
                    </span>
                <?php $i++; } ?>
            </div>
        </div>

        <!--Image card-Buy Furniture based on Spaces-->

        <div class="container-fluid mt-5    image-card-section-2">
            <div class="row">
           
                <div class="col-lg-12 text-center    img-card-title-bar">
                    <h1 class=""><?= get_option( 'my_options' )['main_BFBS'] ?? ''; ?></h1>
                    <p class=""><?= get_option( 'my_options' )['main_BFBS_tag'] ?? ''; ?>.</p>
                </div>
                <?php
                        $args=array('post_type'=>'product_cat_HF','posts_per_page'=>10);
                        $loop=new WP_Query($args);
                        $i=1;
                        while($loop->have_posts()){
                        $loop->the_post();
                    ?>
                <div class="col-lg-4 col-12 mt-3 <?= $i ?>">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="<?= get_the_post_thumbnail_url(); ?>" alt="Card image" style="width:100%">
                        <div class="card-body text-center">
                          <p class="card-title"><?php the_title() ?></p>
                          <a href="#" class="btn btn-primary card-1">Explore Now &raquo;</a>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
               
            </div>
            <br>
            <br>
            
        </div>

        <!--Image card-office-furniture-->

        <div class="container-fluid mt-4    image-card-section-2">
            <div class="row">
                <div class="col-lg-12 text-center    img-card-title-bar">
                    <h1 class=""><?= get_option( 'my_options' )['main_OFC'] ?? ''; ?></h1>
                    <p class=""><?= get_option( 'my_options' )['main_OFC_tag'] ?? ''; ?>.</p>
                </div>
                <?php
                        $args=array('post_type'=>'product_cat_OF','posts_per_page'=>10);
                        $loop=new WP_Query($args);
                        $i=1;
                        while($loop->have_posts()){
                        $loop->the_post();
                    ?>
                <div class="col-lg-4 col-12 mt-3 <?= $i ?>">
                    <div class="card" style="width:400px">
                        <img class="card-img-top" src="<?= get_the_post_thumbnail_url(); ?>" alt="Card image" style="width:100%">
                        <div class="card-body text-center">
                          <p class="card-title"><?php the_title() ?></p>
                          <a href="#" class="btn btn-primary card-1">Explore Now &raquo;</a>
                        </div>
                    </div>
                </div>
                <?php $i++; } ?>
               
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
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to 
                        <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_content('Read more...'); ?>
                        
                        </div> <!-- #post-n -->
                        <?php endwhile; else: ?>
                        <p><?php _e(''); ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        
<?php
    get_footer();
?>     