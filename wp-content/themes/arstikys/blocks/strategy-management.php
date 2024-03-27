<div id="strategy-management" class="strategy-management" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/second-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="container">
        <h2 class="title white px90"><?php the_field('title'); ?></h2>
        <p class="content white"><?php the_field('content'); ?></p>

        <?php if(have_rows('tabs')) : ?>
            <div class="tabs-wrapper">
                <?php while(have_rows('tabs')) : the_row(); ?>
                    <div class="tab">
                        <p class="title px30"><?php the_sub_field('title'); ?></p>
                        <p class="content px18"><?php the_sub_field('content'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>

        <?php if(get_field('button_url')) : ?>
        <div class="blue-button-area">
            <a href="<?php the_field('button_url'); ?>" class="btn-primary"><?php the_field('button_text'); ?>
                <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005"><path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                        </span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>