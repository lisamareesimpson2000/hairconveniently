
<?php get_header(); ?>
    <?php if(have_posts()): ?>
        <?php while(have_posts()): the_post() ?>
            <div class="container">
                <div>
                    <?php the_title(); ?>
                    <?php the_content(); ?>
                    <?php //get_side_bar(); ?>
                    
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
<?php get_footer(); ?>
