<!DOCTYPE html>
<html lang="sv">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="css/main.css">
    <title>Skog AB | Startsida</title>
    <?php
    wp_head();
    ?>
</head>
<body>
    <header>
        <div class="flex-wrapper">

            <div class="header-content">
    
                <a class="logo" href="index.html">
                    <div class="icon">
                        <svg width="79.67" height="47.38" viewBox="0 0 211 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M105.5 52L210.722 134.5H0.277893L105.5 52Z" fill="#283618"/>
                            <path d="M105.5 0L184.741 80.25H26.2587L105.5 0Z" fill="#606C38"/>
                        </svg>
                            
                            
                    </div>
                    <p>
                        SKOG AB
                    </p>
                </a>
                
                <button id="menu-btn" aria-expanded="false" aria-controls="navmenu" onclick="togglemenu()">
                    <i class="fa-solid fa-bars"></i>
                </button>
    
                
            </div>
            <nav id="navmenu" style="display: none;">
                <ul>
                    <li><a class="active" href="index.html">Hem</a></li>
                    <li><a href="services.html">Tjänster</a></li>
                    <li><a href="news.html">Nyheter</a></li>
                    <li><a href="about.html">Om oss</a></li>
                    <li><a href="contact.html">Kontakt</a></li>
                </ul>
            </nav>
        </div>
    </header>