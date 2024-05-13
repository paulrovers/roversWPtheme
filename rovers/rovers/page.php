<?php
get_header();
?>
<style>

    </style>

<main id="main" class="site-main grid-container">
    <div id="left">
        <div class="entry-content">

            <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>

            <div class="clear"></div>
           

        </div>

      

    </div>
    
</main>


<?php
get_footer();
?>

