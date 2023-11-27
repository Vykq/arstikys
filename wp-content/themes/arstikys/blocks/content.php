<div class="content-block">
    <div class="container">
        <?php if(get_field('content')) : ?>
        <div class="content">
            <?php the_field('content'); ?>
        </div>
        <?php endif; ?>
    </div>
</div>