<div class="about-me-block">
    <div class="container">
        <div class="wrapper">
            <?php if(get_field('image')) : ?>
            <div class="image-area">
                <img src="<?php the_field('image'); ?>" alt="<?php the_field('title'); ?>">
            </div>
            <?php endif; ?>
            
            <?php if(have_rows('logotypes')) : ?>
                <div class="logotypes">
                    <?php while(have_rows('logotypes')) : the_row(); ?>
                        <div class="logotype">
                            <img src="<?php echo get_sub_field('logo'); ?>">
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>

            <div class="about-area">
                <h2 class="white px80 semi"><?php the_field('title'); ?></h2>
                <div class="desc">
                    <p class="white"><?php the_field('description'); ?></p>
                </div>
            </div>

            <div class="exp">
                <h3 class="subtitle white px30 semi"><?php the_field('subtitle'); ?></h3>

                <?php if(have_rows('experience')) : ?>
                    <div class="all-experience">
                        <?php while(have_rows('experience')) : the_row(); ?>
                            <div class="single-exp">
                                <p class="first-line"><?php the_sub_field('title'); ?> <span class="divider">/</span> <?php the_sub_field('place'); ?></p>
                                <p class="date"><?php the_sub_field('date'); ?></p>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>