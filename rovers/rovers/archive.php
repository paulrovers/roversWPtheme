<?php

get_header();

?>

<style>
    
</style>

<main id="main" class="site-main grid-container">
    <div id="left">
        <div class="entry-content">
            <?php if (have_posts()) : ?>


               

                <div class="d-grid mt-4">

                    <?php while (have_posts()) : the_post(); ?>
                        <div class="d-post-box">
                            <?php
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('full');
                            } else {
                                echo '<img class="noimage" src="' . get_template_directory_uri() . '/assets/images/noimage.png" alt="Geen afbeelding beschikbaar" />';
                            }
                            ?>
                            <div class="p-2">
                                <h2 class=""><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                <p class=""><?php the_excerpt(); ?></p>

                                <!-- read more button -->
                                <a href="<?php the_permalink(); ?>" class="text-decoration-none ">Read more</a>
                            </div>
                        </div>
                <?php endwhile;

                    echo '</div>';


                endif; ?>


                </div>



        </div>

</main>


<?php

get_footer();

?>