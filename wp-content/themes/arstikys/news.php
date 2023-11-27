<?php

/*
 * Template name: News
 */

get_header();
$args = array(
    'post_type' => 'news',
    'posts_per_page' => -1,
    'post_status' => 'publish',
);

$news = new WP_Query($args); ?>

<div class="news-page" style="background-image: url('<?php echo get_field('background_image'); ?>')">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="shadow left"></div>
    <div class="shadow right"></div>
    <div class="container">
        <div class="text-area">
            <span class="go-back" onclick="history.back()">Go back</span>
            <h1 class="title white px80 semi"><?php echo get_the_title(); ?></h1>
            <p class="content white "><?php the_field('subtitle'); ?></p>

            <?php if($news->have_posts()) : ?>
                <div class="news-area">
                    <?php while($news->have_posts()) :
                    $news->the_post(); ?>
                        <a class="single-new" href="<?php echo get_permalink(); ?>">
                            <div class="image-area">
                                <?php if(get_the_post_thumbnail_url()) { ?>
                                <?php the_post_thumbnail('thumbnail', get_the_id()); ?>
                                <?php } else { ?>
                                    <img src="<?php echo get_template_directory_uri() . '/assets/images/no-image.jpg'; ?>" alt="<?php echo get_the_title(); ?>">
                                <?php } ?>
                            </div>
                            <div class="info-area">
                                <p class="published px18">Published: <?php the_field('where_published',get_the_id()); ?> / <span class="date"><?php the_field('date_published',get_the_id()); ?></span></p>
                            </div>
                            <div class="title-area">
                                <h2 class="white px30 semi"><?php the_title(); ?></h2>
                            </div>

                        </a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>



<?php
get_footer();