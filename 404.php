<?php get_header(); ?>
<div class="row mb-5 justify-content-center">
    <img class="img-fluid mx-auto d-block w-100" alt="responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/404.png">
    
    <h1 class="pt-5"><?php echo $_SERVER['REQUEST_URI']; ?> does not exist, sorry.</h1>

</div>
<?php get_footer(); ?>