<?php
    /*
        Template Name: Services Template
    */
?>

<?php get_header(); ?>

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
        // $args = array(
        //     'post_type' => 'subservice',
        //     'posts_per_page' => 2,
        //     'order' => 'ASC',
        //     'orderby' => 'date'
        // );
        // $allServicePosts = new WP_Query($args);
     ?>

        <?php
            $args = array(
                'post_type' => 'subservice', //haven't hooked together, eventually needs to display service
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
                                 <div class="">
                                     <?php //the_post_thumbnail( 'thumbnail' ); ?>
                                     </div>
                                     <p class="service"> <?php the_content(); ?> </p>
                                       
                                    <!-- trying to render out the subservice in service accordion -->
                                    
                                    <?php 
                                         if(get_post_meta(get_the_ID(), 'featuredSubService', true)){
                                            $featuredSubService = get_post_meta(get_the_ID(), 'featuredSubService', true);
                                         }
                                    ?>
                                    <?php if(isset($featuredSubService)): ?>
                                        <p> Posted from extra sub service information <?php 
                                        echo $featuredSubService; 
                                        var_dump($featuredSubService);
                                        
                                        ?> </p>
                                    <?php endif; ?>





                                     <hr>
                                     <?php
                                    // $featuredSubService = get_post_meta(get_the_ID(), 'featuredSubService', true);
                                     ?>
                                     <?php //if($featuredSubService): ?>
                                         <?php
                                            //  $serviceArgs = array(
                                            //      'p' => $featuredSubService,
                                            //      'post_type' => 'subservice'
                                            //  );
                                            //  $serviceType = new WP_Query($serviceArgs);
                                          ?>
                                          <?php //if($serviceType->have_posts()): ?>
                                              <?php //while($serviceType->have_posts()): $serviceType->the_post(); ?>
                                                  <h2><?php //the_title(); ?></h2>
                                                  <p class="service"> <?php //the_content(); ?> </p>
                                                  <?php //the_post_thumbnail('thumb'); ?>
                                              <?php //endwhile; ?>
                                          <?php //endif; ?>

                                     <?php //endif; ?>








                                    
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