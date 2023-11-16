</main>
    <footer>
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
                    <div class="blue-button-area">
                        <a href="/book-a-meeting/" class="btn-primary">Contact us
                            <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005">
                              <path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                            </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class="col">
                    <p class="title white px50">Get in touch</p>
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
                                <a class="white" href="tel:<?php the_field('map_url','main'); ?>">Address: <?php the_field('address','main'); ?></a>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="social-links">
                        <?php if(get_field('facebook','main')) : ?>
                            <div class="link">
                                <a class="white" href="<?php the_field('facebook','main'); ?>">Facebook</a>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('youtube','main')) : ?>
                            <div class="link">
                                <a class="white" href="<?php the_field('youtube','main'); ?>">Youtube</a>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('instagram','main')) : ?>
                            <div class="link">
                                <a class="white" href="<?php the_field('instagram','main'); ?>">Instagram</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col">
                    <ul class="footer-menu">
                        <li>
                            <a class="white px17" href="/about-me/">About me</a>
                        </li>
                        <li>
                            <a class="white px17"  href="/boards/">Boards</a>
                        </li>
                        <li>
                            <a class="white px17" href="/consultations/">Consultations</a>
                        </li>
                        <li>
                            <a class="white px17"  href="/strategy-management/">Strategy management</a>
                        </li>
                        <li>
                            <a class="white px17"  href="/contacts/">Contacts</a>
                        </li>
                    </ul>
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