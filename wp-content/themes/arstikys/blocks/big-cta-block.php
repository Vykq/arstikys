<div class="big-cta-block" style="background-image: url('<?php echo get_field('image_background'); ?>')">
    <div class="shadow"></div>
    <div class="container">
        <div class="text-area">
            <h2 class="title white px80 semib"><?php the_field('title'); ?></h2>
            <p class="content white px18"><?php the_field('content'); ?></p>
            <div class="blue-button-area">
                <a href="<?php the_field('button_url'); ?>" class="btn-primary"><?php the_field('button_text'); ?>
                    <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005"><path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                        </span>
                </a>
            </div>
        </div>
    </div>
</div>