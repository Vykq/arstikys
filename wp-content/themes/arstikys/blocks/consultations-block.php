<div id="consultations" class="consultations-block">
    <div class="container">
        <div class="wrapper">
            <?php if(get_field('image')) : ?>
                <div class="image-area">
                    <img src="<?php the_field('image'); ?>" alt="<?php the_field('title'); ?>">
                </div>
            <?php endif; ?>

           <?php if(get_field('content')) : ?>
               <div class="content-area">
                   <p class="content"><?php the_field('content'); ?></p>
                   <div class="blue-button-area">
                       <a href="<?php the_field('button_url'); ?>" class="btn-primary"><?php the_field('button_text'); ?>
                           <span class="arrow">
                            <svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005"><path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/></svg>
                        </span>
                       </a>
                   </div>
               </div>
            <?php endif; ?>

            <div class="title-area">
                <h2 class="white px80 semi"><?php the_field('title'); ?></h2>
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
    </div>
</div>