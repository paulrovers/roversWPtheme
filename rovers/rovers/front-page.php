<?php get_header(); ?>

<style>
    .mt-5 {
        margin-top: 5rem;
        margin-bottom: 5rem;
    }
</style>



<main id="main" class="site-main grid-container">
    <div id="left">
        <div class="entry-content">
            <style>
                #frontpage-intro {
                    background-color: var(--secondary-color);
                    position: absolute;
                    top: 80px;
                    left: 0px;
                    width: 100%;
                    padding-top: 70px;
                    text-align: center;
                    color: white;
                    margin-bottom: 20px;
                    min-height: 300px;

                }

                h1 {
                    font-size: 54px;
                }

                #topspace {
                    height: 350px;
                }

                .calltoaction {
                    border-radius: 25px;
                    background-color: #ff7300;
                    color: white;
                    height: 32px;
                    font-size: 26px;
                    font-weight: 600;
                    padding: 5px 25px;
                    text-decoration: none;
                    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2), 0 6px 10px 0 rgba(0, 0, 0, 0.19);
                }

                .calltoaction:hover {
                    color: white;
                    box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
                }

                #left-intro {
                    display: inline-block;
                    width: 60%;
                    /* font-size: 54px; */

                }

                #right-intro {
                    width: 25%;
                    display: inline-block;
                    font-size: 22px;
                }

                h3 {
                    padding-top: 20px;
                }





                @media (max-width: 767px) {
                    .d-grid {
                        grid-template-columns: repeat(1, 1fr);
                    }
                }

                @media (max-width: 1024px) {
                    .d-grid {
                        grid-template-columns: repeat(2, 1fr);
                    }
                }

                @media (max-width: 920px) {
                    #topspace {
                        height: 380px;
                    }
                }

                @media (max-width: 800px) {
                    #frontpage-intro {
                        padding-top: 0;
                        text-align: center;
                        color: white;
                        margin-bottom: 20px;
                        min-height: 200px;
                    }

                    #topspace {
                        height: 220px;
                    }
                }

                @media (max-width: 760px) {
                    #topspace {
                        height: 300px;
                    }
                }

                @media (max-width: 600px) {
                    #frontpage-intro {
                        padding-top: 0;
                        text-align: center;
                        color: white;
                        margin-bottom: 20px;
                        padding-bottom: 40px;
                    }

                    #left-intro {
                        display: block;
                        width: 100%;
                    }

                    #right-intro {
                        width: 100%;
                        display: block;
                        font-size: 22px;
                    }

                    #topspace {
                        height: 420px;
                    }
                }

                @media (max-width: 450px) {
                    #topspace {
                        height: 390px;
                    }
                }
            </style>



            <?php if (get_theme_mod('display_intro', 'no') == 'yes') : ?>
                <div id="frontpage-intro">
                    <div class="grid-container">
                        <div id="left-intro">
                            <h1>
                                <?php echo get_theme_mod('left_intro'); ?>
                            </h1>
                        </div>
                        <div id="right-intro">
                            <?php echo get_theme_mod('right_intro'); ?>

                             <br> 
                        <br>
                            <div id="cta">
                            <a href="<?php echo home_url('/registreren/'); ?>" class="calltoaction">
                                <?php echo get_theme_mod('cta'); ?>
                            </a>
                        </div>
                        </div>
                       
                        
                    </div>
                </div>
                <div id="topspace"></div>
            <?php endif; ?>

            <div class="d-grid mt-5">

                <?php
                $categories = get_categories();
                if ($categories) {

                    // echo '<div class="d-grid mt-4">';
                    foreach ($categories as $category) {
                        $args = array(
                            'category_name' => $category->slug,
                        );

                        $query = new WP_Query($args);
                        if ($query->have_posts()) {
                            $category_object = get_category_by_slug($args['category_name']);
                            $category_name = $category_object->name;
                            // echo '<h3>' . ucwords($category_name) . '</h3>';



                            // echo '<div class="post">';
                            while ($query->have_posts()) {
                                $query->the_post();
                ?>
                                <div class="d-post-box">
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full');
                                    } else {
                                        echo '<img class="noimage" src="' . get_template_directory_uri() . '/assets/images/noimage.png" alt="No image available" />';
                                    }
                                    ?>
                                    <div class="p-2">
                                        <h2 class=""><a class="text-decoration-none" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                                        <p class=""><?php echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></p>

                                        <!-- read more button -->
                                        <a href="<?php the_permalink(); ?>" class="text-decoration-none ">Read more</a>
                                    </div>
                                </div>

                <?php
                            }
                            // echo '</div>';
                            // echo '</div>';


                        } else {
                            null;
                        }

                        wp_reset_postdata();
                        // Rest of your code...
                    }
                }
                ?>

            </div>


            <?php
            // Get the intro display setting value
            $display_intro = get_theme_mod('mytheme_intro_display', 'no');

            if ($display_intro === 'yes') {
                // Display the intro section
                echo '<section class="intro-section">';
                // Add your code for the intro section here
                echo '</section>';
            }

            // Get the selected page ID for blog items
            $blogitems_page_id = get_theme_mod('mytheme_blogitems_page', '');

            if ($blogitems_page_id) {
                // Display the content from the selected page under blog items
                $blogitems_page = get_post($blogitems_page_id);

                if ($blogitems_page) {
                    // Display the title and content of the selected page
                    echo '<h2>' . esc_html($blogitems_page->post_title) . '</h2>';
                    echo apply_filters('the_content', $blogitems_page->post_content);
                }
            }

            // Get the custom title and text
            $custom_title = get_theme_mod('mytheme_custom_title', '');
            $custom_text  = get_theme_mod('mytheme_custom_text', '');

            if ($custom_title || $custom_text) {
                // Display the custom title and text
                echo '<div class="custom-section">';
                echo '<h3>' . esc_html($custom_title) . '</h3>';
                echo wpautop(esc_html($custom_text));
                echo '</div>';
            }

            // Rest of your front-page.php code
            ?>










        </div>



    </div>

</main>



<?php get_footer(); ?>