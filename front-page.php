<?php get_header(); ?>

    <!-- HEADER IMAGE -->
    <div>
        <img class="img-fluid mx-auto d-block w-100" alt="responsive" src="<?php header_image(); ?>" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>">
    </div>
    <div class="row mb-5 d-flex justify-content-center">
    <!-- customizer -->
    <p><?php
        ?></p>
    <?php
    $side = get_theme_mod('sidebar_position_setting');
    if ($side === 'left') {
        $sidebarOrder = 'order-0';
        $contentOrder = 'order-1';
    } else {
        $sidebarOrder = 'order-1';
        $contentOrder = 'order-0';
    }
    ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="row mb-5 d-flex justify-content-center">
                <div class="col">
                    <div class="card">
                        <div class="content pl-5 pr-5">
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<div class="row mb-5 d-flex justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4<? echo $contentOrder ?>">
        <div class="card bg-light p-3 m-5">
            <div class="callout-heading">
                <h2><?php echo get_theme_mod('hair_image_text_setting')?></h2>
            </div>
                <img class="img-fluid mx-auto d-block w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('hair_image_setting'))?>">
        </div>
    </div>
    <?php if (is_active_sidebar('sidebar-2')) : ?>
        <div id="middle_siderbar" class="col-xs-12 col-sm-12 col-md-12 col-lg-4 middle_siderbar<? echo $contentOrder ?>">
            <div class="card bg-light p-3 m-5">
                <ul class="widget_text">
                    <?php dynamic_sidebar('sidebar-2'); ?>
                </ul>
            </div>
        </div>
    <?php endif; ?>
    <?php if (is_active_sidebar('sidebar-1')) : ?>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 right_siderbar <? echo $sidebarOrder ?>">
            <div class="card bg-light p-3 m-5 text-center">
                <ul class="widget_text">
                    <?php dynamic_sidebar('sidebar-1'); ?>
                    <a class="btn btn-primary" href="http://hairconveniently.gettimely.com/book" target="_blank">Make Appointment</a>
                </ul>
            </div>
        </div>
    <?php endif; ?>
</div>
<?php if (get_theme_mod('display_YN_setting')=="Yes") : ?>
<div class="row mb-5 d-flex justify-content-center">
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-7 ">
        <div class="card bg-light p-3 m-5 ">
            <h2><?php echo get_theme_mod('client_testimonial_setting')?></h2>
            <h4 class="quote_client text-center"><?php echo wpautop(get_theme_mod('textbox_testimonial_setting'))?></h4>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
        <div class="card bg-light p-3 m-5">
            <img class="img-fluid mx-auto d-block w-100" src="<?php echo wp_get_attachment_url(get_theme_mod('testimonial_image_setting'))?>">
        </div>
    </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>