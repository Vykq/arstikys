<?php
$news = get_field('news');
?>

<div class="news-block" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/third-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow bottom"></div>
    <div class="container">
        <h2 class="title white px90 semib"><?php the_field('title'); ?></h2>
        <p class="content white"><?php the_field('content'); ?></p>
        <?php if(!empty($news)) : ?>
            <div class="news-area">
                <?php foreach ($news as $id) : ?>
                    <a href="<?php the_field('url_to_published_post', $id); ?>" class="single-new">
                        <div class="left">
                            <p class="title px30 semi"><?php echo get_the_title($id); ?></p>
                            <div class="info-area">
                                <p class="published px18">Published: <?php the_field('where_published',$id); ?> / <span class="date"><?php the_field('date_published',$id); ?></span></p>
                            </div>
                        </div>
                        <div class="right">
                            <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
                                <g id="Group_1800" data-name="Group 1800" transform="translate(-1170 -7718)">
                                    <g id="Group_1608" data-name="Group 1608" transform="translate(7741.951 -1110.822) rotate(45)">
                                        <path id="Path_592" data-name="Path 592" d="M12261,11473.782l14.656-14.657,14.657,14.657" transform="translate(-10623 -583)" fill="none" stroke="#246bfd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                        <line id="Line_41" data-name="Line 41" y2="27.44" transform="translate(1652.504 10876.419)" fill="none" stroke="#246bfd" stroke-linecap="round" stroke-width="2"/>
                                    </g>
                                    <g id="Ellipse_57" data-name="Ellipse 57" transform="translate(1170 7718)" fill="none" stroke="#246bfd" stroke-width="1">
                                        <circle cx="40" cy="40" r="40" stroke="none"/>
                                        <circle cx="40" cy="40" r="39.5" fill="none"/>
                                    </g>
                                </g>
                            </svg>
                        </div>

                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>