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
                            <a class="medium white px17"  href="/consultations/">Consultations</a>
                            <a class="medium white px17"  href="/strategy-management/">Strategy management</a>
                            <a class="medium white px17" href="/contacts/">Contacts</a>
                        </nav>
                    </div>
                    
                    <div class="blue-button-area">
                        <a href="/book-a-meeting/" class="btn-primary">Contact us
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
    </header>

<main>
