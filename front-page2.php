<?php get_header(); ?>
  <!-- customizer -->
    <p><?php //echo get_theme_mod('sidebar_position_setting');?></p>
        <?php
            $side = get_theme_mod('sidebar_position_setting');
            if($side === 'left'){
                $sidebarOrder = 'order-0';
                $contentOrder = 'order-1';
            } else{
                $sidebarOrder = 'order-1';
                $contentOrder = 'order-0';
            }
        ?>
            <h3><?php //echo get_theme_mod('custom_nav_colour_setting'); ?></h3>
            <?php
            // $args = array(
            //     'p' => get_theme_mod('hair_background_colour_setting')
            // );
            //  $hairPost = new WP_Query($args);
            ?>
  





    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post(); ?>
            <div class="row">
                <div class="col">
                    <div class="card">
                            <div class="content">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
    <?php endif; ?>
 
    
    <?php
 $args = array(
 'post_type'      => 'slides', //link this to custom fields
 'oderby'         => 'menu_order',
 'posts_per_page' => -1
 );

$slides = new WP_Query( $args );

if( $slides->have_posts() ): ?>


    <div class="row mb-5 d-flex">
        
        <div class="col-4<?echo $contentOrder?>"> 
            <div class="card bg-light p-3 m-5">
            <h2>OUR WORK</h2>  
                <!-- CAROUSEL -->
                <div id="myCarousel" class="carousel slide center-block"     data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
    <?php while( $slides->have_posts() ) : $slides->the_post(); $index++ ?>

      <?php if ( $index == 1 ): ?>
        <div class="item active">
      <?php else: ?>
        <div class="item">
      <?php endif; ?>
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
            <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
        </div>
  <?php endwhile; ?>
<?php endif; ?>
      <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
</div><!-- carrousel ends here -->
            </div>
        </div>
        
        <?php if(have_posts()): ?>
            <div class="col-4 <?//echo $contentOrder?>">
                <div class="card">
                    <?php while(have_posts()): the_post(); ?>
                    <?php get_template_part( 'content', get_post_format()); ?>
                    <?php endwhile; ?>
                </div>
            </div> 
        <?php endif; ?>

        <?php if (is_active_sidebar('sidebar-1')): ?>
            <div class="col-4 <?echo $sidebarOrder?>">
                <div class="card bg-light p-3 m-5">
                    <ul class="widget_text">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                        <a class="btn btn-primary" href="http://hairconveniently.gettimely.com/book" target="_blank">Make Appointment</a>
                    </ul>
                </div>
            </div>
        <?php endif; ?>

        
    </div>
        
<?php get_footer(); ?> 













<?php
 $args = array(
 'post_type'      => 'slides',
 'oderby'         => 'menu_order',
 'posts_per_page' => -1
 );

$slides = new WP_Query( $args );

if( $slides->have_posts() ): ?>
<div class="row">
  <div class="col-xs-12">
      <!--Twitter bootstrap Photo carrousel-->
  <div id="myCarousel" class="carousel slide center-block"     data-ride="carousel" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>
<!-- Wrapper for slides -->
<div class="carousel-inner" role="listbox">
    <?php while( $slides->have_posts() ) : $slides->the_post(); $index++ ?>

      <?php if ( $index == 1 ): ?>
        <div class="item active">
      <?php else: ?>
        <div class="item">
      <?php endif; ?>
      <?php $url = wp_get_attachment_url( get_post_thumbnail_id() ); ?>
            <img src="<?php echo $url; ?>" alt="<?php the_title(); ?>">
        </div>
  <?php endwhile; ?>
<?php endif; ?>
      <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
  </div>
</div><!-- carrousel ends here -->