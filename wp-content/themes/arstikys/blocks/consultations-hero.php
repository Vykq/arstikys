<div class="consultations-hero" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fifth-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="container">
        <span class="go-back" onclick="history.back()">Go back</span>
        <div class="wrapper">
            <div class="left">
                <div class="title-area">
                    <h1 class="white px80 semi"><?php the_field('title'); ?></h1>
                    <div class="desc">
                        <p class="white"><?php the_field('description'); ?></p>
                    </div>
                </div>

                <div class="list">
                    <?php while(have_rows('list')) : the_row(); ?>
                        <div class="single-li">
                            <div class="marker"></div>
                            <div class="info">
                                <p class="title px30"><?php the_sub_field('title'); ?></p>
                                <p class="subtitle px18"><?php the_sub_field('subtitle'); ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

            <div class="right">
                <?php if(get_field('image')) : ?>
                    <div class="image-area">
                        <img src="<?php the_field('image'); ?>" alt="<?php the_field('title'); ?>">
                    </div>
                <?php endif; ?>
                <?php if(get_field('content')) : ?>
                    <div class="content-area">
                        <p class="content"><?php the_field('content'); ?></p>
                    </div>
                <?php endif; ?>
            </div>


        </div>

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