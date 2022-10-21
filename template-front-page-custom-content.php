<?php
/*
Template name: Startsida med eget innehåll
*/
get_header();
?>
    <main>

        <div class="hero">
            <img src="<?php header_image(); ?>" alt="Stor maskin jobbar på ett träd">
            <div class="cover">
                <h1><?php bloginfo('description'); ?></h1>
            </div>
        </div>

        <!-- Innehållet av page -->
        <div class="info">
            <?php
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    the_content();
                }
            }
            ?>
        </div>
        
        <div class="flex-wrapper">

            <?php
            query_posts('category_name=startsida&posts_per_page=2');
            if(have_posts()){
                while(have_posts()){
                    the_post();
                    ?>
                        <article>
                            <h3><?php the_title(); ?></h3>
                            
                            <!-- Har inlägget bild? -->
                            <?php
                                if(has_post_thumbnail()){
                                    the_post_thumbnail('preview');
                                }
                            ?>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink();?>">Läs mer <i class="fa-solid fa-arrow-right-long"></i><span class="sr-only"> om <?php the_title(); ?></span></a>
                        </article>
                    <?php
                }
            }
            ?>
        </div>

        <?php
            //Om någon widget är aktiv
            if(is_active_sidebar('start1') || is_active_sidebar('start2') || is_active_sidebar('start3')){

                ?>
                <div class="flex-wrapper widget-area">
                    <?php
                        //aktivera de enkilda widgets
                        if(is_active_sidebar('start1')){
                            dynamic_sidebar('start1');
                        }
                        if(is_active_sidebar('start2')){
                            dynamic_sidebar('start2');
                        }
                        if(is_active_sidebar('start3')){
                            dynamic_sidebar('start3');
                        }
                    ?>
                </div>
                <?php
            }
        ?>


    </main>
    <?php
    get_footer();
    ?>