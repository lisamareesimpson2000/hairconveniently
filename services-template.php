<?php
    /*
        Template Name: Services Template
    */
?>

<?php get_header(); ?>
<div class="row mb-5 justify-content-center">
    <img class="img-fluid mx-auto d-block w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('service_image_setting'))?>">
    <img class="img-fluid mx-auto d-block arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-for-doc/arrow.svg" alt="arrow">
</div>

<?php if( have_posts() ): ?>
    <?php while( have_posts() ): the_post() ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-6 mx-auto">
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
        <?php
            $args = array(
                'post_type' => 'service', 
                'posts_per_page' => -1
            );
            $allServicePosts = new WP_Query($args);
         ?>
         <?php if( $allServicePosts->have_posts() ): ?>
             <div class="row">
                 <div class="col-sm-12 col-lg-12">
                     <div class="accordion" id="accordionExample">
                         <?php $cardNo = 1; ?>
                         <?php while( $allServicePosts->have_posts() ): $allServicePosts->the_post(); ?>
                             <div class="card">
                               <div class="card-header" id="heading<?php echo $cardNo; ?>">
                                 <h2 class="mb-0">
                                   <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cardNo; ?>">
                                       <h2><?php the_title(); ?></h2>
                                   </button>
                                 </h2>
                               </div>
                               <div id="collapse<?php echo $cardNo; ?>" class="collapse"  data-parent="#accordionExample">
                                 <div class="card-body service">
                                    <ul class="ul_subservices">
                                        <?php
                                        $subargs = array(
                                            'post_type' => 'subservice',
                                            'posts_per_page' => -1,
                                            'meta_key' => 'featuredSubService',
                                            'meta_value' => get_the_id()
                                        );
                                        $serviceType = new WP_Query($subargs);
                                        ?>
                                        <?php if( $serviceType->have_posts() ): ?>
                                        <?php while( $serviceType->have_posts() ): $serviceType->the_post(); ?>
                                            <li class="li_subservices"><?php the_title(); ?></li>
                                        <?php endwhile; ?>

                                    <?php endif;?>
                                    </ul>
                                 </div>
                               </div>
                             </div>
                             <?php $cardNo++; ?>
                         <?php endwhile; ?>
                     </div>
                     <br>
                 </div>
             </div>
             </div>
         <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>