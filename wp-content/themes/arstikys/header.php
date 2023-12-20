<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="header">
            <div class="container">
                <div class="wrapper">
                    <div class="logo-area">
                        <a href="<?php echo get_home_url(); ?>" class="logo">
                            <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.svg'; ?>" alt="Arstikys.lt">
                        </a>
                    </div>

                    <div class="menu-area">
                        <nav>
                            <a class="medium white px17" href="/about-me/">About me</a>
                            <a class="medium white px17"  href="/boards/">Boards</a>
                            <a class="medium white px17"  href="/consulting/">Consulting</a>
                            <a class="medium white px17"  href="/strategy-management/">Strategy management</a>
                            <a class="medium white px17"  href="/news/">News</a>
                            <a class="medium white px17" href="/contacts/">Contacts</a>
                        </nav>
                    </div>
                    
                    <div class="blue-button-area">
                        <a href="/book-a-meeting/" class="btn-primary">Let`s talk
                        <span class="arrow"><svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005">
  <path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
</svg>
</span></a>
                    </div>
                    <div class="mobile-burger-area mobile-menu-open">
                        <div class="line top"></div>
                        <div class="line mid"></div>
                        <div class="line bot"></div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="mobile">
        <div class="mobile-menu">
            <div class="container">
                <div class="wrapper">
                    <div class="top">
                        <div class="blue-button-area">
                            <a href="/book-a-meeting/" class="btn-primary white-btn">Let`s talk
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="8.502" height="15.005" viewBox="0 0 8.502 15.005">
                                      <path id="Path_762" data-name="Path 762" d="M12385.378,46.064l6.088-6.088,6.089,6.088" transform="translate(47.478 -12383.964) rotate(90)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="middle">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="/about-me/" class="white medium">About me</a>
                            </li>
                            <li class="menu-item">
                                <a href="/boards/" class="white medium">Boards</a>
                            </li>
                            <li class="menu-item">
                                <a href="/consulting/" class="white medium">Consulting</a>
                            </li>
                            <li class="menu-item">
                                <a href="/strategy-management/" class="white medium">Strategy management</a>
                            </li>
                            <li class="menu-item">
                                <a href="/news/" class="white medium">News</a>
                            </li>
                            <li class="menu-item">
                                <a href="/contacts/" class="white medium">Contacts</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bottom">
                        <div class="social-links">
                            <?php if(get_field('facebook','main')) : ?>
                                <div class="link">
                                    <a class="white px18 medium" href="<?php the_field('facebook','main'); ?>" target="_blank">Facebook</a>
                                </div>
                            <?php endif; ?>
                            <?php if(get_field('youtube','main')) : ?>
                                <div class="link">
                                    <a class="white px18 medium" href="<?php the_field('youtube','main'); ?>" target="_blank">Youtube</a>
                                </div>
                            <?php endif; ?>
                            <?php if(get_field('instagram','main')) : ?>
                                <div class="link">
                                    <a class="white px18 medium" href="<?php the_field('instagram','main'); ?>" target="_blank">Instagram</a>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>

<main>
