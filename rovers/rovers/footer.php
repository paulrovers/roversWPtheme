<footer>
    <div class="grid-container">
        <div id="footerlinks">
            <style>
                #footerlinks {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    /* padding: 30px 0; */
                    /* padding: 0; */
                }

                #footerlinks div {
                    margin: 30px 0;
                }


                @media (max-width: 768px) {
                    #footerlinks {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;
                        /* margin: 30px 0; */
                        padding: 0;
                        text-align: left;
                        flex-direction: column;
                        gap: 15px;
                    }

                    #footerlinks div {
                        width: 100% !important;
                    }

                    #footerlinks li {
                        list-style-type: none;
                        width: 100% !important;
                        margin: 0 !important;
                    }
                }

                #footerlinks div {
                    width: 24%;
                }

                #footerlinks h6 {
                    margin: 20px 0 20px 0;
                    font-weight: bold;
                    font-size: 20px;
                    color: #fff;
                    text-transform: capitalize;
                }

                #footerlinks ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    /* width: 25%; */

                }

                #footerlinks li {
                    font-size: 16px;
                    text-decoration: none;
                    color: #fff;
                    padding: 8px 0;
                    border-bottom: 1px solid var(--border-color);
                }

                #footerlinks li:last-child {
                    border-bottom: none;
                }

                #footerlinks a {
                    color: #fff;
                    text-decoration: none;
                }

                /* 
                #footerlinks > div {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    margin: 30px 0;
                    padding: 0;
                } */

                #menu-additional {
                    display: flex;
                    justify-content: space-between;
                    flex-wrap: wrap;
                    margin: 30px 0;
                    padding: 0;
                }

                @media (max-width: 425px) {
                    #menu-additional {
                        display: flex;
                        justify-content: space-between;
                        flex-wrap: wrap;
                        margin: 30px 0;
                        padding: 0;
                        text-align: center;
                        flex-direction: column;
                        gap: 15px;
                    }

                    #menu-additional li {
                        list-style-type: none;
                        width: 100% !important;
                        margin: 0 !important;
                    }
                }

                #menu-additional li {
                    list-style-type: none;
                    width: 19%;
                    margin: 0 10px;
                }

                #menu-additional a {
                    color: #fff;
                    text-decoration: none;
                }
            </style>



            <?php
            if (has_nav_menu('additional1')) {
                $menu_name = wp_get_nav_menu_name('additional1');
                wp_nav_menu(array(
                    'theme_location' => 'additional1',
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'items_wrap' => '<h6>' . esc_html($menu_name) . '</h6><ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
            }
            ?>
            <?php
            if (has_nav_menu('additional2')) {
                $menu_name = wp_get_nav_menu_name('additional2');
                wp_nav_menu(array(
                    'theme_location' => 'additional2',
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'items_wrap' => '<h6>' . esc_html($menu_name) . '</h6><ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
            }
            ?>
            <?php
            if (has_nav_menu('additional3')) {
                $menu_name = wp_get_nav_menu_name('additional3');
                wp_nav_menu(array(
                    'theme_location' => 'additional3',
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'items_wrap' => '<h6>' . esc_html($menu_name) . '</h6><ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
            }
            ?>
            <?php
            if (has_nav_menu('additional4')) {
                $menu_name = wp_get_nav_menu_name('additional4');
                wp_nav_menu(array(
                    'theme_location' => 'additional4',
                    'container' => 'div',
                    'container_class' => 'footer-menu',
                    'items_wrap' => '<h6>' . esc_html($menu_name) . '</h6><ul id="%1$s" class="%2$s">%3$s</ul>',
                ));
            }
            ?>






        </div>
    </div>

    <style>
        .sitelinks ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }

        .sitelinks li {
            display: inline;
        }

        .sitelinks li:not(:last-child)::after {
            content: "/";
            margin: 0 10px;
            color: var(--sepator-color);
        }

        .sitelinks li:last-child::after {
            content: "";
        }

        .sitelinks a {
            display: inline-block;
            color: #fff;
            text-align: center;
            padding: 14px 0px;
            text-decoration: none;
        }

        /* add divider how */
    </style>




    <?php
    if (has_nav_menu('footer')) {

        echo '<div class="sitelinks">';


        wp_nav_menu(array(
            'theme_location' => 'footer',
            // 'container' => 'ul',
            'menu_class' => 'footer-menu',
            'menu_id' => 'footer-menu',
            'menu' => 'footer-menu',

        ));

        echo '</div>';
    }
    ?>

    <!-- <a href="/contact/">Contact</a><span class="divider">/</span>
        <a href="/partners/">Partners</a><span class="divider">/</span>
        <a href="/login/">Inloggen</a><span class="divider">/</span>
        <a href="/sitemap/">Sitemap</a> -->
    <style>
        .copyright a img {
            height: 26px;
            width: auto;
        }

        .copyright .d-flex {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <?php if (function_exists('the_custom_logo')) : ?>
        <div class="copyright ">
            <div class="grid-container">

                <div class="d-flex">
                    <!-- <a href="/" rel="home"> -->


                    <a href="/" rel="home">

                    <style>

                        a[rel="home"] div{
                            /* margin-top: 0px; */
                            height: 50px;
                        }
                    </style>

                       
                        <div>

                            <?php
                            if (get_bloginfo('name')) {
                                echo get_bloginfo('name');
                            }
                            ?>
                        </div>
                    </a>


                    <div>

                        Powered By: <a class="text-white" href="https://www.rovers.nl/"> Rovers Webdevelopment </a>
                    </div>

                </div>
            </div>
        </div>
    <?php endif; ?>
</footer>



<script>
    //frontpage ads fix
    if (window.location.pathname == '/') {
        document.getElementById("sidebar").style.margin = "380px 0 0 0";
    }
</script>

<style>
    /* PrismJS 1.25.0
https://prismjs.com/download.html#themes=prism-coy&languages=markup+css+clike+javascript+javadoclike+markup-templating+php+phpdoc+smarty+twig+typescript+typoscript+yaml&plugins=line-numbers */
    code[class*=language-],
    pre[class*=language-] {
        color: #000;
        background: 0 0;
        font-family: Consolas, Monaco, 'Andale Mono', 'Ubuntu Mono', monospace;
        font-size: 1em;
        text-align: left;
        white-space: pre;
        word-spacing: normal;
        word-break: normal;
        word-wrap: normal;
        line-height: 1.5;
        -moz-tab-size: 4;
        -o-tab-size: 4;
        tab-size: 4;
        -webkit-hyphens: none;
        -moz-hyphens: none;
        -ms-hyphens: none;
        hyphens: none
    }

    pre[class*=language-] {
        position: relative;
        margin: .5em 0;
        overflow: visible;
        padding: 1px
    }

    pre[class*=language-]>code {
        position: relative;
        z-index: 1;
        border-left: 10px solid #358ccb;
        box-shadow: -1px 0 0 0 #358ccb, 0 0 0 1px #dfdfdf;
        background-color: #fdfdfd;
        background-image: linear-gradient(transparent 50%, rgba(69, 142, 209, .04) 50%);
        background-size: 3em 3em;
        background-origin: content-box;
        background-attachment: local
    }

    code[class*=language-] {
        max-height: inherit;
        height: inherit;
        padding: 0 1em;
        display: block;
        overflow: auto
    }

    :not(pre)>code[class*=language-],
    pre[class*=language-] {
        background-color: #fdfdfd;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        margin-bottom: 1em
    }

    :not(pre)>code[class*=language-] {
        position: relative;
        padding: .2em;
        border-radius: .3em;
        color: #c92c2c;
        border: 1px solid rgba(0, 0, 0, .1);
        display: inline;
        white-space: normal
    }

    pre[class*=language-]:after,
    pre[class*=language-]:before {
        content: '';
        display: block;
        position: absolute;
        bottom: .75em;
        left: .18em;
        width: 40%;
        height: 20%;
        max-height: 13em;
        box-shadow: 0 13px 8px #979797;
        -webkit-transform: rotate(-2deg);
        -moz-transform: rotate(-2deg);
        -ms-transform: rotate(-2deg);
        -o-transform: rotate(-2deg);
        transform: rotate(-2deg)
    }

    pre[class*=language-]:after {
        right: .75em;
        left: auto;
        -webkit-transform: rotate(2deg);
        -moz-transform: rotate(2deg);
        -ms-transform: rotate(2deg);
        -o-transform: rotate(2deg);
        transform: rotate(2deg)
    }

    .token.block-comment,
    .token.cdata,
    .token.comment,
    .token.doctype,
    .token.prolog {
        color: #7d8b99
    }

    .token.punctuation {
        color: #5f6364
    }

    .token.boolean,
    .token.constant,
    .token.deleted,
    .token.function-name,
    .token.number,
    .token.property,
    .token.symbol,
    .token.tag {
        color: #c92c2c
    }

    .token.attr-name,
    .token.builtin,
    .token.char,
    .token.function,
    .token.inserted,
    .token.selector,
    .token.string {
        color: #2f9c0a
    }

    .token.entity,
    .token.operator,
    .token.url,
    .token.variable {
        color: #a67f59;
        background: rgba(255, 255, 255, .5)
    }

    .token.atrule,
    .token.attr-value,
    .token.class-name,
    .token.keyword {
        color: #1990b8
    }

    .token.important,
    .token.regex {
        color: #e90
    }

    .language-css .token.string,
    .style .token.string {
        color: #a67f59;
        background: rgba(255, 255, 255, .5)
    }

    .token.important {
        font-weight: 400
    }

    .token.bold {
        font-weight: 700
    }

    .token.italic {
        font-style: italic
    }

    .token.entity {
        cursor: help
    }

    .token.namespace {
        opacity: .7
    }

    @media screen and (max-width:767px) {

        pre[class*=language-]:after,
        pre[class*=language-]:before {
            bottom: 14px;
            box-shadow: none
        }
    }

    pre[class*=language-].line-numbers.line-numbers {
        padding-left: 0
    }

    pre[class*=language-].line-numbers.line-numbers code {
        padding-left: 3.8em
    }

    pre[class*=language-].line-numbers.line-numbers .line-numbers-rows {
        left: 0
    }

    pre[class*=language-][data-line] {
        padding-top: 0;
        padding-bottom: 0;
        padding-left: 0
    }

    pre[data-line] code {
        position: relative;
        padding-left: 4em
    }

    pre .line-highlight {
        margin-top: 0
    }

    pre[class*=language-].line-numbers {
        position: relative;
        padding-left: 3.8em;
        counter-reset: linenumber
    }

    pre[class*=language-].line-numbers>code {
        position: relative;
        white-space: inherit
    }

    .line-numbers .line-numbers-rows {
        position: absolute;
        pointer-events: none;
        top: 0;
        font-size: 100%;
        left: -3.8em;
        width: 3em;
        letter-spacing: -1px;
        border-right: 1px solid #999;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none
    }

    .line-numbers-rows>span {
        display: block;
        counter-increment: linenumber
    }

    .line-numbers-rows>span:before {
        content: counter(linenumber);
        color: #999;
        display: block;
        padding-right: .8em;
        text-align: right
    }
</style>
</body>

</html>