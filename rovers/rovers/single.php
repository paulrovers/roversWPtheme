<?php

get_header();

?>

<style>

    .entry-content img{
        border-radius: 10px;

    }
</style>

<main id="main" class="site-main grid-container">
    <div id="left">
        <div class="entry-content">
            <?php
            if (have_posts()) {


                

                // post title
                the_title('<h1>', '</h1>');

                
                               
                                

                // Get the post or page ID
                $post_id = get_the_ID();

                // Get the post or page ancestors
                $ancestors = get_post_ancestors($post_id);

                // Reverse the order to start from the top-level parent
                $ancestors = array_reverse($ancestors);

                // Output the breadcrumbs
                echo '<div class="breadcrumb">';

                // Home link
                echo '<a href="' . esc_url(home_url('/')) . '">' . esc_html('Home') . '</a>';

                // // Loop through the ancestors
                // foreach ($ancestors as $ancestor) {
                //     echo '<span class="breadcrumb-separator"> > </span>';
                //     echo '<a href="' . esc_url(get_permalink($ancestor)) . '">' . esc_html(get_the_title($ancestor)) . '</a>';
                // }

                // Check if the current post belongs to a category
                $category = get_the_category();
                if (!empty($category)) {
                    echo '<span class="breadcrumb-separator"> » </span>';


                    $category_link = get_category_link($category[0]->term_id);
                    // $category_link = str_replace('/category/', '/', $category_link);

                    echo '<a href="' . esc_url($category_link) . '">' . esc_html($category[0]->name) . '</a>';
                }

                // Current page
                echo '<span class="breadcrumb-separator"> » </span>';
                echo '<span class="breadcrumb-current">' . esc_html(get_the_title()) . '</span>';

                echo '</div>';

                echo '<br/>';

                if (has_post_thumbnail()) {
                    the_post_thumbnail('full');
                } else {
                    echo '<img class="noimage" src="' . get_template_directory_uri() . '/assets/images/noimage.png" alt="No image available" />';
                }

                // Get the post or page ID

                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
            ?>

        </div>



    </div>

</main>


<?php

get_footer();

?>