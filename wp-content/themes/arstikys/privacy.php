
<?php
/**
 * Template Name: Privatumo politika
 */
get_header(); ?>
<section class="private-policy-content"  style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/first-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="shadow left"></div>
    <div class="shadow right"></div>
    <div class="container">
    <h1 class="px80 white semi"><?php  the_title(); ?></h1>
    <div class="content-wrapper">
        <?php the_content(); ?>
    </div>
    </div>
</section>
<?php get_footer();