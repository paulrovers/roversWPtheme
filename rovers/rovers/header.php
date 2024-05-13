<!DOCTYPE html>
<html lang="nl">

<head>
    <title>
        <?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
    <meta name="description" content="{{ description }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="<?php echo get_site_icon_url(); ?>">
    <meta name='robots' content='index, follow' />
    <link rel='canonical' href='<?php echo get_site_url(); ?>' />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <style id='generate-style-inline-css'>
        /* css variable */

        :root {
            --primary-color: #045691;
            --secondary-color: #1e73be;
            --extra-color: #0569ab;
            --tertiary-color: #f9591d;
            --text-color: #fff;
            --black-color: #3a3a3a;
            --text-link-color: #1e73be;
            --dark-black-color: #000;
            --border-color: #045691;
            --sepator-color: #3492e7;


        }

        body {
            background-color: var(--text-color);
            color: var(--black-color);
            border: 0;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        #hamburger {
            height: 32px;
        }

        body {
            font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
        }

        h1 {
            font-size: 25px;
        }

        h2 {
            font-size: 20px;
        }

        h3 {
            font-size: 18px;
        }

        h4 {
            font-size: inherit;
        }

        h5 {
            font-size: inherit;
        }

        /* table styling*/
        td,
        th {
            padding: 8px;
        }

        caption,
        td,
        th {
            font-weight: 400;
            text-align: left;
            padding: 5px;
        }

        tr {
            display: table-row;
            vertical-align: inherit;
            border-color: inherit;
        }

        table {
            border-width: thin;
            border-spacing: 0;
            margin: 0 0 1.5em;
            width: 100%;
        }

        table,
        td,
        th {
            border: 1px solid rgba(0, 0, 0, .1);
        }

        /* end table styling*/
        input[type=email],
        input[type=number],
        input[type=password],
        input[type=search],
        input[type=tel],
        input[type=text],
        input[type=url],
        select,
        textarea {
            background: #fafafa;
            color: #666;
            border: 1px solid #ccc;
            border-radius: 0;
            padding: 10px 15px;
            box-sizing: border-box;
            max-width: 100%;
        }

        textarea {
            overflow: auto;
            vertical-align: top;
            width: 100%;
        }



        /*buttons*/
        button,
        html input[type="button"],
        input[type="reset"],
        input[type="submit"],
        a.button,
        a.wp-block-button__link:not(.has-background) {
            color: var(--text-color);
            background-color: var(--tertiary-color);
        }

        button:not(.menu-toggle),
        html input[type="button"],
        input[type="reset"],
        input[type="submit"],
        .button,
        .wp-block-button .wp-block-button__link {
            font-weight: 800;
            font-size: 20px;
        }

        button,
        html input[type=button],
        input[type=reset],
        input[type=submit] {
            border: 1px solid transparent;
            background: #2096cf;
            cursor: pointer;
            -webkit-appearance: button;
            padding: 2px 20px;
            color: #fff;
            margin-bottom: -1px;
        }

        /*end buttons*/

        body .grid-container {
            max-width: 1200px;
        }

        a {
            color: var(--text-link-color);
        }

        header a {
            color: #424343;
            text-decoration: none;
        }

        header a:hover {
            color: var(--secondary-color);
            text-decoration: none;
        }

        a:hover,
        a:focus,
        a:active {
            color: var(--dark-black-color);
        }

        .menu-toggle {
            padding: 0;
            color: var(--text-color);
            margin: 0;
            font-weight: 400;
            text-transform: none;
            font-size: 15px;
            cursor: pointer;
            background-color: transparent;
            width: 100%;
            border: 0;
            height: 32px;
            margin-top: 24px;
            text-align: right;
        }

        .mobile-menu a:hover {
            color: var(--dark-black-color);
        }

        .blockl {
            display: inline-block;
            min-width: 300px;
            vertical-align: top;
        }

        .fblock {
            display: inline-block;
            min-width: 200px;
            padding: 20px;
            padding-top: 40px;
            height: 50px;
            margin-bottom: 40px;
            margin-left: 15px;
            box-shadow: 0px 8px 16px 0px rgb(0 0 0 / 20%);
            text-align: center;
        }

        .grid-container {
            margin-left: auto;
            margin-right: auto;
            max-width: 1200px;
            padding-left: 10px;
            padding-right: 10px;
        }

        #main {
            display: grid;
            grid-template-columns: 1fr;
            min-height: 60vh;
        }

        #sidebar {
            margin-top: 50px;
            padding: 20px;
        }

        .entry-content {
            margin-bottom: 30px;
        }

        header a {
            color: var(--text-color);
        }

        header a:hover {
            color: var(--text-color);
        }

        #menu-navigation {
            height: 60px;
            margin-top: 28px;
            font-size: 20px;
            z-index: 1;
        }

        #header-background {
            height: 80px;
            background-color: var(--primary-color);
            /*border-bottom: 1px solid #bcbbbb;*/
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            z-index: -1;
        }

        footer {
            text-align: left;
            border: 0;
            margin: 0;
            padding: 0px;
            margin-top: 30px;
            background-color: var(--secondary-color);
            border-top: 1px solid #bcbbbb;
            position: static;
            bottom: 0;
            left: 0;
            width: 100%;
        }

        .main-navigation ul {
            list-style: none;
        }


        #footerlinks {
            /* display: flex; */
            /* justify-content: space-between; */
        }

        /* for media devices width 320px to 768px */
        @media (max-width: 899px) {
            #footerlinks {
                display: block;
            }

            .list1 {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        .list1 {
            vertical-align: top;
            width: 24%;
            display: inline-block;
            text-align: left;
            font-size: 14px;
            /* padding-right: 37px; */
        }

        .list1 ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .list1 li {
            font-size: 16px;
            text-decoration: none;
            color: var(--text-color);
            padding: 8px 0;
            border-bottom: 1px solid var(--primary-color);
        }

        .list1 li:last-child {
            border-bottom: none;
        }

        .list1 li a {
            text-decoration: none;
            color: var(--text-color);
        }

        .list1 li a:hover {
            text-decoration: none;
            color: var(--dark-black-color);
        }

        .list1 h6 {
            margin: 20px 0 20px 0;
            font-weight: bold;

            font-size: 20px;
            color: var(--text-color);
        }

        .text-decoration-none {
            text-decoration: none;
            /* color: black; */
        }

        .post {
            display: flex;
            /* align-items: center; */
            justify-content: space-between;
            gap: 20px;
        }

        .d-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);

            gap: 40px;
        }

        .d-grid img {
            width: 100%;
            height: 250px;
            border-radius: inherit;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
            object-fit: cover;
        }

        .d-post-box {
            border-radius: 10px;
            padding: 0px 0px 0px 0px;
            box-shadow: 0px 6px 12px 0px rgba(0, 0, 0, 0.13);
        }

        .noimage {
            width: 100%;
            height: 250px;
            object-fit: contain !important;
        }

        .p-2 {
            padding: 20px
        }

        .mt-4 {
            padding-top: 3rem;
            /* padding-bottom: 2rem; */
        }


        .copyright {
            background-color: var(--primary-color);
            color: var(--text-color);
            width: 100%;
            text-align: left;
            padding: 10px 0;
            margin-top: 0px;
        }

        /*Mobile*/
        @media (max-width: 899px) {
            .menu-toggle {
                display: block;
            }

            header ul {
                text-align: right;
                list-style: none;
                width: 100vw;
                position: fixed;
                top: 50px;
                left: -40px;
                text-align: left;
            }

            header li {
                font-size: 18px;
                display: block;
                margin: 0px;
                background-color: var(--primary-color);
                padding: 20px;
                border-top: 1px solid #074873;
            }

            header li:last-child {
                border-bottom: 1px solid #074873;
            }

            header li:hover {
                background-color: #076ab4;
            }

            header li a {
                text-decoration: none;
            }

            #sidebar {
                display: none;
            }

            #main {
                display: block;
            }

            h3 .block {
                font-size: 20px;
                font-weight: 600;
            }

            .list1 {
                width: 100%;
                margin-bottom: 20px;
            }
        }

        /*Desktop*/
        @media (min-width: 900px) {
            .menu-toggle {
                display: none;
            }

            header ul {
                text-align: right;
                list-style: none;
            }

            header li {
                display: inline-block;
                margin-left: 30px;
            }
        }

        /* logo styling */
        @media (min-width: 500px) {
            header {
                display: grid;
                grid-template-columns: 300px 1fr;
                grid-template-rows: 80px;
            }

            .custom-logo {
                margin-top: 6px;
                height: 36px;
                object-fit: contain;
                margin-left: 0;
                width: auto;
            }
        }

        /* for 320px to 425px */
        @media (max-width: 425px) {

            .custom-logo {
                margin-top: 8px;
                height: 30px;
                width: auto;
            }
        }

        @media (max-width: 500px) {
            header {
                display: grid;
                grid-template-columns: 250px 1fr;
            }

            .main-title img {
                margin-top: 8px;
                height: 30px;
            }
        }

        .sitelinks {
            background-color: var(--extra-color);
            color: var(--text-color);
            width: 100%;
            text-align: center;
            padding: 30px 0;
            /* margin-top: 20px; */
        }

        .sitelink {
            color: var(--text-color);
            width: 100%;
            padding: 30px 0;
        }

        .sitelink ul {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .sitelink li {
            display: inline;
        }


        .sitelink li a {
            color: var(--text-color);
            text-decoration: none;
        }

        .sitelinks a {
            color: var(--text-color);
            text-decoration: none;
        }

        .divider {
            color: #3492e7;
            padding: 0 20px;
        }

        .text-white{
            color: var(--text-color);
        }

        .text-white:hover{
            color: var(--text-color);
        }
    </style>
    <script type="text/javascript">
        function toggle_menu() {
            let menu = document.querySelector('#menu-navigation');
            let items = document.querySelectorAll('#menu-navigation li');

            if (menu.style.display != 'block') {
                set_items(items, 'none');
                menu.style.display = 'block';
            } else {
                set_items(items, 'right');
                menu.style.display = 'none';
            }
        }

        function set_items(elementList, listValue) {
            let index = 0;
            let length = elementList.length;
            for (; index < length; index++) {
                elementList[index].style.float = listValue;
            }
        }

        function toggle_menu_default() {
            let menu = document.getElementById('menu-navigation');
            if (window.innerWidth < 900) {
                menu.style.display = 'none';
            } else {
                menu.style.display = 'block';
            }
        }

        window.addEventListener('resize', toggle_menu_default);
    </script>
</head>

<body>
    <header id="masthead" class="site-header grid-container">

        <div class="site-branding">
            <p class="main-title">

                <?php if ((has_nav_menu('primary')) || function_exists('the_custom_logo')) {
                    echo '<div id="header-background"></div>';
                }
                ?>

                <a href="/" rel="home">

                    <style>
                        /* how to style this rel  */

                        a[rel="home"]{
                            text-decoration: none;
                        }
                        a[rel="home"] div {
                            height: 60px;
                            margin-top: 28px;
                            font-size: 20px;
                            font-weight: bold;
                            font-family: "Poppins", sans-serif;
                            color: var(--text-color);
                            /* text-decoration: none; */
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
            </p>
        </div>

        <div class="navigation">
            <button class="menu-toggle" onclick="toggle_menu()">
                <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/hamburgerIcon.svg" id="hamburger" alt="menu icon"></span>
            </button>
            <div id="primary-menu" class="main-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'container' => 'ul',
                    'menu_class' => 'main-navigation',
                    'menu_id' => 'menu-navigation',
                    'menu' => 'primary',
                    'items_wrap' => '<ul id="menu-navigation" style="display: none;">%3$s</ul>'
                ));
                ?>


                <!-- <ul id="menu-navigation" style="display: none;">
                    <li><a href="/">Home</a></li>
                    <li><a href="/tutorials/">Tutorials</a></li>
                    <li><a href="/tools/">Webtools</a></li>
                    <li><a href="/webhosting/">Webhosting</a></li>
                </ul> -->
            </div>
        </div>
    </header>

    <script>
        toggle_menu_default();
    </script>