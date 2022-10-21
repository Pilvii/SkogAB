<?php
get_header();
?>
    <main>

        <h1>Våra tjänster</h1>
        <p class="info">Här finner du våra populäraste tjänster som vi kan hjälpa dig med. Vi är givetvis flexibla med våra tjänster, så behöver du hjälp med något som inte finns i listan, är det bara <a href="<?php echo get_permalink(get_page_by_path('kontakt'));?>">kontakta</a> oss för att se om vi kan hjälpa er ändå.</p>


        <?php
        query_posts('category_name=tjanster&posts_per_page=30');
        if(have_posts()){
            while(have_posts()){
                the_post();
                ?>
                    <article class="preview">
                        <h3><?php the_title();?></h3>
                        <div class="flex-wrapper">
                            <div class="excerpt-and-link">
                                <?php the_excerpt(); ?>
                                <a href="<?php the_permalink();?>">Läs mer <i class="fa-solid fa-arrow-right-long"></i><span class="sr-only"> om trädfällning</span></a>
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
    
        


    </main>
    <?php
    get_footer();
    ?>