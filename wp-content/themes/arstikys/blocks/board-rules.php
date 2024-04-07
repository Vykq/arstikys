<div id="boards" class="board-rules" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/first-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="shadow left"></div>
    <div class="shadow right"></div>
    <div class="container">
        <div class="wrapper">
            <div class="left">
                <h2 class="title white px90 semi"><?php the_field('title'); ?></h2>
                <p class="content white"><?php the_field('content'); ?></p>
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
            <div class="right">
                <?php if(have_rows('rules')) :
                    $count = 1;
                    $rows = count(get_field('rules'));
                    ?>
                <p class="top"><span><?php echo $rows; ?></span> rules of the board</p>
                <div class="blur-content">
                    <?php while(have_rows('rules')) : the_row(); ?>
                        <div class="cell <?php echo 'number' . $count; ?>">
                            <p class="rule-title"><span>✲ </span><?php the_sub_field('title'); ?></p>
                            <p class="rule-desc"><?php the_sub_field('content'); ?></p>
                        </div>
                    <?php
                    $count++;
                    endwhile; ?>
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
    </div>
</div>