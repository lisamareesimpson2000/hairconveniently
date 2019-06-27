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
                'post_type' => 'service', //haven't hooked together, eventually needs to display service
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
                                    <p>this service is <?php the_title(); ?></p>
                                    <?php 
                         
                                    ?>

                                    <ul>
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
                                            <li><?php the_title(); ?></li>
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