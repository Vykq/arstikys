<div class="grid-blocks" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/third-wave.jpg'; ?>)">
    <div class="container">
        <h2 class="title white px50 semi"><?php the_field('title'); ?></h2>
        <p class="content white"><?php the_field('content'); ?></p>

        <?php if(have_rows('grid')) : ?>
            <div class="grid">
                <?php while(have_rows('grid')) : the_row(); ?>
                    <div class="single-block">
                        <p class="title px30"><?php the_sub_field('title'); ?></p>
                        <p class="content px18"><?php the_sub_field('content'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <div class="text-image">
            <div class="image-area">
                <img src="<?php echo the_field('image2'); ?>" alt="<?php echo strip_tags(get_sub_field('title2')); ?>">
            </div>
            <div class="content-area">
                <h2 class="white px50 semi"><?php the_field('title2'); ?></h2>
                <p class="subtitle">
                    <?php the_field('subtitle'); ?>
                </p>
            </div>
        </div>
    </div>
</div>