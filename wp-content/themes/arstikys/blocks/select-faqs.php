<?php
$faqs = get_field('faqs');
?>

<div class="faqs">
    <div class="container">
        <?php if(!empty($faqs)) : ?>
            <div class="faqs-area">
                <?php foreach($faqs as $id) : ?>
                <div class="single-duk-accordion">
                    <div class="duk-top-area">
                        <p class="title white px30 semi"><?php echo get_field('question',$id); ?></p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="113.137" height="113.137" viewBox="0 0 113.137 113.137">
                            <g id="Group_1913" data-name="Group 1913" transform="translate(-6284.765 -4573.567) rotate(-45)">
                                <g id="Ellipse_57" data-name="Ellipse 57" transform="translate(1170 7718)" fill="none" stroke="#246bfd" stroke-width="1">
                                    <circle cx="40" cy="40" r="40" stroke="none"/>
                                    <circle cx="40" cy="40" r="39.5" fill="none"/>
                                </g>
                                <g id="Group_1608" data-name="Group 1608" transform="translate(7741.951 -1110.822) rotate(45)">
                                    <path id="Path_592" data-name="Path 592" d="M12261,11473.782l14.656-14.657,14.657,14.657" transform="translate(-10623 -583)" fill="none" stroke="#246bfd" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    <line id="Line_41" data-name="Line 41" y2="27.44" transform="translate(1652.504 10876.419)" fill="none" stroke="#246bfd" stroke-linecap="round" stroke-width="2"/>
                                </g>
                            </g>
                        </svg>
                    </div>
                        <div class="duk-inside">
                                <div class="single-duk-answer">
                                    <div class="answer">
                                        <?php echo get_field('answer',$id); ?>
                                    </div>
                                </div>
                        </div>

                </div>

                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>

