<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <title><?php wp_title('|', true, 'left'); ?></title>
    <?php
    wp_head();
    ?>
</head>
<body>
    <header>
        <div class="flex-wrapper">

            <div class="header-content">
    
                <a class="logo" href="<?= get_home_url();?>">
                    <div class="icon">
                        <svg width="79.67" height="47.38" viewBox="0 0 211 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M105.5 52L210.722 134.5H0.277893L105.5 52Z" fill="#283618"/>
                            <path d="M105.5 0L184.741 80.25H26.2587L105.5 0Z" fill="#606C38"/>
                        </svg>
                            
                            
                    </div>
                    <p>
                    <?php bloginfo('title')?>
                    </p>
                </a>
                
                <button id="menu-btn" aria-expanded="false" aria-controls="navmenu" onclick="togglemenu()">
                    <i class="fa-solid fa-bars"></i>
                </button>
    
                
            </div>
            <nav id="navmenu" style="display: none;">
                <?php
                    wp_nav_menu(array('theme_location' => 'main-nav'));
                ?>
            </nav>
        </div>
    </header>