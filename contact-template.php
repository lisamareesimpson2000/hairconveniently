<?php
/* 

Template Name: Contact Template 

*/


if($_POST){
    $errors = array();
    if(wp_verify_nonce($_POST['_wpnonce'], 'wp_enquiery_form')){
        if(!$_POST['clientsName']){
            array_push($errors, 'Your name is required');
        }
        if(!$_POST['clientsEmail']){
            array_push($errors, 'Your email is required');
        }
        if(!$_POST['clientsMessage']){
            array_push($errors, 'A message is required');
        }
        if(empty($errors)){
            $args = array(
                'post_content' => $_POST['clientsMessage'],
                'post_title' => $_POST['clientsName'],
                'post_type' => 'enquiries',
                'meta_input' => array(
                    'email'=> $_POST['clientsEmail']
                )
            );
            wp_insert_post($args);
        }
    } else {
        array_push($errors, 'Opps, something went wrong with submitting the form.');
    }
}
?>

<?php get_header(); ?>

<div class="container">
    <?php //the_title(); ?>
    <?php if( have_posts() ): ?>
        <?php while( have_posts() ): the_post() ?>
            <div class="xs-md-12 col-md-6 col-lg-12">
                <div class="contact-info">
                    <h2>Contact Us</h2>
                    <h4>We would love to hear from you!</h4>
                </div>
            </div>
            <?php if($_POST && !empty($errors)): ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger">
                            <ul>
                                <?php foreach($errors as $singleError): ?>
                                    <li><?php echo $singleError; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if($_POST && empty($errors)): ?>
                <div class="row">
                    <div class="col">
                        <div class="alert alert-success">
                            <p>Success, you sent the form! We will get back to as soon as we can.</p>
                        </div>
                    </div>
                </div>
            <?php else: ?>
                <div class="row">
                    <div class="col">
                        <form action="<?php echo get_permalink();?>" method="post">
                            <?php wp_nonce_field('wp_enquiery_form'); ?>
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="clientsName" class="form-control" value="<?php echo $_POST['clientsName'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="clientsEmail" class="form-control" value="">
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea class="form-control" name="clientsMessage" rows="8" cols="80"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" name="" value="Send Enquiry" class="btn btn-primary btn-block">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="wp_content">
                            <?php the_content();?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <div class="container">
        <div class="row mb-5 d-flex justify-content-center">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-7 ">
                <div class="card bg-light p-3 m-5">
                    <h2 class="h2_phone"><?php echo get_theme_mod('hair_phone_setting')?></h2>
                </div>
            </div>
        </div>
</div>
   
</div>

<?php get_footer(); ?>