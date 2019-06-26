<?php get_header(); ?>

    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="row">
                <div class="col-12">
                    <h2><?php the_title(); ?></h2>
                    <p>Posted: <?php the_date('F j, Y'); ?> at <?php the_time('g:i a'); ?></p>
                    <?php
                        if(get_post_meta(get_the_ID(), 'featuredSubService', true)){
                            $featuredSubService = get_post_meta(get_the_ID(), 'featuredSubService', true);
                        }
                    ?>
                    <?php if(isset($featuredSubService)): ?>
                        <p>Posted from <?= $featuredSubService; ?></p>
                    <?php endif; ?>
                </div>
            </div>
            <?php
                get_template_part('singlePosts/contentPost', get_post_format() );
            ?>
        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>
