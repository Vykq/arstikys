<?php

get_header();
?>

<div class="single-new-hero">
    <div class="container">
        <span class="go-back" onclick="history.back()">Go back</span>
        <div class="wrapper">
            <div class="left">
                <div class="text-area">
                    <div class="info-area">
                        <p class="published px18">Published: <?php the_field('where_published',get_the_id()); ?> / <span class="date"><?php the_field('date_published',get_the_id()); ?></span></p>
                    </div>
                    <h1 class="title white px80 semi"><?php echo get_the_title(); ?></h1>
                    <div class="arrow scroll-to-content">
                        <svg id="Component_22_1" data-name="Component 22 – 1" xmlns="http://www.w3.org/2000/svg" width="113.137" height="113.137" viewBox="0 0 113.137 113.137">
                            <g id="Ellipse_57" data-name="Ellipse 57" transform="translate(113.137 56.569) rotate(135)" fill="none" stroke="#246bfd" stroke-width="1">
                                <circle cx="40" cy="40" r="40" stroke="none"/>
                                <circle cx="40" cy="40" r="39.5" fill="none"/>
                            </g>
                            <g id="Group_1608" data-name="Group 1608" transform="translate(1708.986 10946.56) rotate(180)">
                                <path id="Path_592" data-name="Path 592" d="M12261,11473.782l14.656-14.657,14.657,14.657" transform="translate(-10623 -583)" fill="none" stroke="#246bfd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                <line id="Line_41" data-name="Line 41" y2="27.44" transform="translate(1652.504 10876.419)" fill="none" stroke="#246bfd" stroke-linecap="round" stroke-width="2"/>
                            </g>
                        </svg>

                    </div>
                </div>
            </div>
            <div class="right">
                <div class="image-area">
                    <?php if(get_the_post_thumbnail_url()) { ?>
                        <?php the_post_thumbnail('thumbnail', get_the_id()); ?>
                    <?php } else { ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/no-image.jpg'; ?>" alt="<?php echo get_the_title(); ?>">
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
the_content();
get_footer();