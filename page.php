<?php
get_header();
?>
    <main>

        <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                        <h1><?php the_title();?></h1>
                        
                    <?php
                }
            }
        ?>


        <div class="about">
            <!-- Har inlägget bild? -->
            <?php
                if(has_post_thumbnail()){
                    the_post_thumbnail('post-size');
                }
            ?>
            <div class="content">
                <?php the_content();?>
            </div>
            
        </div>

        <?php
        //om sidan är "om oss"
        if(is_page("om-oss")){
            //Om någon widget är aktiv
            if(is_active_sidebar('about1') || is_active_sidebar('about2') || is_active_sidebar('about3')){
    
                ?>
                <div class="photos">
                    <?php
                        //aktivera de enkilda widgets
                        if(is_active_sidebar('about1')){
                            dynamic_sidebar('about1');
                        }
                        if(is_active_sidebar('about2')){
                            dynamic_sidebar('about2');
                        }
                        if(is_active_sidebar('about3')){
                            dynamic_sidebar('about3');
                        }
                    ?>
                </div>
                <?php
            }

        }

        ?>


    </main>
    <?php
    get_footer();
    ?>