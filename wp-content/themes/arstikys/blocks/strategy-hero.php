<div class="strategy-hero">
    <div class="container">
        <span class="go-back" onclick="history.back()">Go back</span>
        <div class="wrapper">
            <div class="left">
                <h1 class="title white px80 semi"><?php the_field('title'); ?></h1>
                <p class="content white "><?php the_field('content'); ?></p>

                <div class="image-area">
                    <img src="<?php the_field('image2'); ?>">
                </div>
            </div>
            <div class="right">
                <div class="image-area">
                    <img src="<?php the_field('image'); ?>" alt="<?php echo strip_tags(get_field('title')); ?>">
                </div>
            </div>
        </div>
    </div>
</div>