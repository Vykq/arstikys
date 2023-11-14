<div class="main-hero">
    <div class="container">
        <div class="text-area">
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
    <div class="qoute-area">
        <div class="qoute-wrapper">
            <p class="quote white px18"><?php the_field('quote'); ?></p>
            <p class="name white semi"><?php the_field('name'); ?></p>
            <p class="position px18 white"><?php the_field('position'); ?></p>
        </div>
    </div>
</div>