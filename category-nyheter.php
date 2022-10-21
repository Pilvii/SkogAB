<?php
get_header();
?>
    <main>

        <h1>Nyheter</h1>

        <?php
        
        if(have_posts()){
            while(have_posts()){
                the_post();

                ?>
                
                <article class="preview">
                    <div class="flex-wrapper newstitle">
                        <h3><?php the_title();?></h3>
                        <p class="date"><?php the_date(); ?></p>
                    </div>
                    <div class="flex-wrapper">
                        <div class="excerpt-and-link">
                            <?php the_excerpt();?>
                            <a href="<?php the_permalink();?>">Läs mer <i class="fa-solid fa-arrow-right-long"></i><span class="sr-only"> om "<?php the_title();?>"</span></a>
                        </div>
                        <!-- Om det finns en bild -->
                        <?php
                            if(has_post_thumbnail()){
                                the_post_thumbnail('preview', array('class' => 'preview-img'));
                            }
                        ?>
                    </div>
                </article>

                <?php

            }
        }
        ?>
       





        <div class="pagination">
            <?php the_posts_pagination( array(
                'mid_size'  => 1,
                'prev_text' => __( '<i class="fa-solid fa-chevron-left"></i> Föregående sida', 'textdomain' ),
                'next_text' => __( 'Nästa sida <i class="fa-solid fa-chevron-right"></i>', 'textdomain' ),
            ) ); ?>
            <!-- <a href="#" style="display: none;"><i class="fa-solid fa-chevron-left"></i> Föregående sida</a>
            <a href="#" class="active">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Nästa sida <i class="fa-solid fa-chevron-right"></i></a> -->
        </div>

        </main>
    <?php
    get_footer();
    ?>