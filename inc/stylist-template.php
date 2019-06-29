<?php
    /*
        Template Name: Stylists Template
    */
?>

<?php get_header(); ?>
<div class="row mb-5 justify-content-center">
<img class="img-fluid mx-auto d-block w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('about_image_setting'))?>">
    <!-- <img class="img-fluid mx-auto d-block w-100" alt="responsive" src="<?php //echo get_stylesheet_directory_uri(); ?>/assets/img/about.jpg" alt="stylist image"> -->
    <img class="img-fluid mx-auto d-block arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/img-for-doc/arrow.svg" alt="arrow">
</div>
<?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <div class="container">
                <div>
                    
                    <?php the_content(); ?>
                
                    
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>

    <?php
         $args = array(
             'post_type' => 'stylist',
             'posts_per_page' => -1
            //  'order' => 'ASC',
            //  'orderby' => 'title'
         );
         $allStylists = new WP_Query($args);
      ?>

      <?php if( $allStylists->have_posts() ): ?>
          <div class="row mb-5 justify-content-center">
              <!-- <div class="col-12 justify-content-center">
                  <h2>MEET THE TEAM</h2>
              </div> -->
              <?php while( $allStylists->have_posts() ): $allStylists->the_post(); ?>
                  <div class="col-xs-12 col-sm-12 col-lg-3">
                      <div class="card">
                          <div class="card-body">
                              <?php if(has_post_thumbnail()): ?>
                                  <?php the_post_thumbnail('thumbnail', ['class'=>'card-img-top img-fluid', 'alt' =>'thumbnail image for the post']); ?>
                              <?php endif; ?>
                             <h3 class="card-title"><?php the_title(); ?></h3>
                                <?php the_content(); ?>
                             <a class="btn btn-primary btn-block" target="_blank"href="http://hairconveniently.gettimely.com/book">Make appointment</a>
                          </div>
                      </div>
                  </div>
              <?php endwhile; ?>
          </div>
      <?php endif; ?>


<?php get_footer(); ?>