</main>
    <footer id="contacts">
    <div class="main-footer">
        <div class="container">
            <div class="top-footer">
            <div class="wrapper">
                <div class="col">
                    <div class="logo-area">
                        <a href="<?php echo get_home_url(); ?>" class="logo">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="Arstikys.lt">
                        </a>
                    </div>
                    <?php if(get_field('description','main')) : ?>
                        <div class="description">
                            <p class="px16"><?php the_field('description','main'); ?></p>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="col">
                    <p class="title white px50">Let's get in touch</p>
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
                        <?php if(get_field('LinkedIn','main')) : ?>
                            <div class="link">
                                <a class="white" href="<?php the_field('LinkedIn','main'); ?>" target="_blank">LinkedIn</a>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('instagram','main')) : ?>
                            <div class="link">
                                <a class="white" href="<?php the_field('instagram','main'); ?>" target="_blank">Instagram</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
            <div class="bottom-footer">
                <div class="wrapper">
                    <div class="left">
                        <p class="white px16 medium">© <?php echo date('Y') . ' Arstikys.lt'; ?> / <a class="blue px16 medium" href="/privacy-policy/">Privacy</a></p>
                    </div>
                    <div class="right">
                        <?php if(get_field('copyright_text','main')) : ?>
                            <div class="copyright">
                                <p class="px16 white medium"><?php the_field('copyright_text','main'); ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </footer>

<?php  wp_footer(); ?>
</body>
</html>