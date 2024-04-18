<div class="contact-block" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images/sixth-wave.jpg'; ?>)">
    <div class="shadow top"></div>
    <div class="shadow left"></div>
    <div class="shadow bottom"></div>
    <div class="shadow right"></div>
    <div class="container">
        <div class="wrapper">
            <div class="left">
                <h1 class="title white px80 semi"><?php the_field('title'); ?></h1>
                <p class="content white">
                    <?php the_field('subtitle'); ?>
                </p>
                <div class="info">
                    <?php if(get_field('mobile','main')) : ?>
                        <div class="link">
                            <a class="white" href="tel:<?php the_field('mobile','main'); ?>">Mobile: <?php the_field('mobile','main'); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('email','main')) : ?>
                        <div class="link">
                            <a class="white" href="mailto:<?php the_field('email','main'); ?>">E. mail: <?php the_field('email','main'); ?></a>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('address','main')) : ?>
                        <div class="link">
                            <a class="white" href="<?php the_field('map_url','main'); ?>">Address: <?php the_field('address','main'); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="social-links">
                    <?php if(get_field('LinkedIn','main')) : ?>
                        <div class="link">
                            <a class="white" href="<?php the_field('LinkedIn','main'); ?>" target="_blank">LinkedIn</a>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('facebook','main')) : ?>
                        <div class="link">
                            <a class="white" href="<?php the_field('facebook','main'); ?>" target="_blank">Facebook</a>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('youtube','main')) : ?>
                        <div class="link">
                            <a class="white" href="<?php the_field('youtube','main'); ?>" target="_blank">Youtube</a>
                        </div>
                    <?php endif; ?>
                    <?php if(get_field('instagram','main')) : ?>
                        <div class="link">
                            <a class="white" href="<?php the_field('instagram','main'); ?>" target="_blank">Instagram</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="right">
                <h2 class="px80 semi white"><?php the_field('title2'); ?></h2>
                <div class="form-area">
                    <form class="contact-form">
                        <div class="two-col">
                            <div class="col">
                                <input type="text" name="name" placeholder="Name Surname">
                            </div>
                            <div class="col">
                                <input type="text" name="phone" placeholder="Phone number">
                            </div>
                        </div>
                        <div class="two-col">
                            <div class="col">
                                <input type="text" name="email" placeholder="E. mail">
                            </div>
                        </div>
                        <div class="text-area-block">
                            <textarea name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="button-area">
                            <p class="error-msg"></p>
                            <div class="blue-button-area">
                                <button type="submit" class="btn-primary sendform">Send
                                    <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005">
                                      <path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                </span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>