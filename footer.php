<footer>
        <div class="footer-content">
            
            <div class="circle">
                <div class="footer-logo">
                    <svg width="79.67" height="47.38" viewBox="0 0 211 135" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M105.5 52L210.722 134.5H0.277893L105.5 52Z" fill="#283618"/>
                        <path d="M105.5 0L184.741 80.25H26.2587L105.5 0Z" fill="#606C38"/>
                    </svg>
                    <p>Skog AB</p>

                </div>
            </div>

            <section class="footer-contact">
                <?php
                    //ändra användarnamnet till aktuell adminanvändare
                    $the_user = get_user_by('login', 'SkogAB');

                    ?>
                    <h4>Kontaktinformation</h4>
                    <p><?php bloginfo('title')?><br><?php echo $the_user->adress1; ?><br><?php echo $the_user->adress2; ?></p>

            </section>

            <section class="footer-links">
                <h4>Länkar</h4>
                <nav>
                    <?php
                    wp_nav_menu(array('theme_location' => 'footer-links'));
                    ?>
                </nav>
            </section>

        </div>
    </footer>

    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="https://kit.fontawesome.com/6d080d2dc2.js" crossorigin="anonymous"></script>
    <?php
    wp_footer();
    ?>
</body>
</html>