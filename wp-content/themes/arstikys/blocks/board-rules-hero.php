<div class="board-rules-hero" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/first-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="shadow left"></div>
    <div class="shadow right"></div>
    <div class="container">
            <div class="wrapper">
                <div class="left">
                    <span class="go-back" onclick="history.back()">Go back</span>

                    <h1 class="title white px80 semi"><?php the_field('title'); ?></h1>
                    <p class="content white "><?php the_field('content'); ?></p>

                    <?php if(have_rows('rules')) :
                        $count = 1;
                        ?>
                        <div class="blur-content">
                            <?php while(have_rows('rules')) : the_row(); ?>
                                <div class="cell <?php echo 'number' . $count; ?>">
                                    <p class="rule-title"><?php the_sub_field('title'); ?></p>
                                    <p class="rule-desc"><?php the_sub_field('content'); ?></p>
                                </div>
                                <?php
                                $count++;
                            endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('content_2')) { ?>
                        <div class="sec-content">
                            <p><?php the_field('content_2'); ?></p>
                        </div>
                    <?php } ?>
                </div>
                <div class="right">
                    <?php if(get_field('image')){ ?>
                        <div class="image-area">
                            <img src="<?php the_field('image'); ?>" alt="<? echo get_field('title'); ?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
    </div>
</div>