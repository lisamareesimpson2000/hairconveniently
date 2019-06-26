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

    <div class="row mb-5 d-flex">
        
        <div class="col-4<?echo $contentOrder?>"> 
            <div class="card bg-light p-3 m-5">
            <h2>OUR WORK</h2>  
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hair1.jpeg" alt="Los Angeles" style="width:100%;">
                    </div>

                    <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/hair2.jpg" alt="Chicago" style="width:100%;">
                    </div>
                    
                    <div class="item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/peach.png" alt="New york" style="width:100%;">
                    </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                    </a>
                </div>
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