<div class="about-me-hero">
    <div class="container">
        <div class="text-area">
            <span class="go-back" onclick="history.back()">Go back</span>
            <h1 class="title white px80 semi"><?php the_field('title'); ?></h1>
            <p class="content white "><?php the_field('subtitle'); ?></p>
        </div>
    </div>
    <div class="image-area">
        <div class="shadow bottom"></div>
        <div class="shadow left"></div>
        <div class="shadow right"></div>
        <img class="desktop" src="<?php the_field('image'); ?>" alt="<?php echo get_field('name') . ' - ' . get_field('position'); ?>">
        <img class="mobile" src="<?php the_field('image_mobile'); ?>" alt="<?php echo get_field('name') . ' - ' . get_field('position'); ?>">
    </div>
</div>