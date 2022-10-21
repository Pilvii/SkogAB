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

                    <article class="single">
                    
                        <!-- Är inlägget en nyhet ska datum finnas -->
                        <?php
                            if(in_category('nyheter')){
                                ?>
                                    <p class="date-single"><?php the_date();?></p>
                                
                                <?php
                            }
                        
                        ?>

                        <!-- Har inlägget bild? -->
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail('post-size');
                            }
                        ?>
                        <p><?php the_content(); ?></p>
                        
                    </article>
                
                <?php
            }
        }
        ?>

    </main>
    <?php
    get_footer();
    ?>