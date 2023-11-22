<div class="double-image-text-block" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/fourth-wave.jpg'; ?>)">
    <div class="container">
        <?php if(have_rows('block')) : ?>
            <?php $rowCount = count(get_field('block')); ?>
            <?php while(have_rows('block')) : the_row(); ?>
                <?php if(get_sub_field('side') === "left") {
                    $side = "left";
                } else {
                    $side = "right";
                }
                ?>
                <div class="single-block <?php echo $side; ?> <?php echo ($rowCount === get_row_index()) ? 'last' : ''; ?>">
                    <div class="image-area">
                        <img src="<?php echo the_sub_field('image'); ?>" alt="<?php echo strip_tags(get_sub_field('title')); ?>">
                    </div>
                    <div class="content-area">
                        <?php if(get_sub_field('title')) { ?>
                            <h2 class="white px50 semi"><?php echo the_sub_field('title'); ?></h2>
                        <?php } ?>
                        <?php if(get_sub_field('content')) { ?>
                            <div class="content">
                                <?php echo the_sub_field('content'); ?>
                            </div>
                        <?php } ?>

                        <?php if(have_rows('logotypes')) : ?>
                            <div class="logotypes">
                                <?php while(have_rows('logotypes')) : the_row(); ?>
                                    <div class="logotype">
                                        <img src="<?php the_sub_field('logo'); ?>">
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>