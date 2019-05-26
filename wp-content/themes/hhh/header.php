<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hyolmo Helping Hands | Homepage</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <?php wp_head();?>
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="header__info">
                        <p>
                            <span class="text-uppercase">email: </span><a href="maito:#">contact@ourcharity.com</a>
                        </p>
                        <p>
                            <span class="text-uppercase">
                                phone:
                            </span>
                            <a href="tel:#">+1111111111111</a>
                        </p>
                    </div>
                    <div class="header__donate">
                        <a href="#" class="btn btn-light">donate now</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="row">
                    <div class="logo">
                        <?php
                        if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                            }
                        ?>
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri()?>/img/logo.png" alt="Hyolmo Helping Hands" title="Hyolmo Helping Hands">
                        </a>
                    </div>
                    <div class="menu-wrap">
                        <input type="checkbox" class="toggler">
                        <div class="hamburger">
                            <div></div>
                        </div>
                        <nav class="menu">
                            <div>
                                <div>
                                    <!--<ul>
                                        <li class="current"><a href="<?php //echo site_url('');?>">Home</a></li>
                                        <li><a href="<?php //echo site_url('/about');?>">About us</a></li>
                                        <li><a href="<?php // echo site_url('/causes');?>">Causes</a></li>
                                        <li><a href="<?php //echo site_url('/gallery');?>">Gallery</a></li>
                                        <li><a href="<?php //echo site_url('/news');?>">News</a></li>
                                        <li><a href="<?php //echo site_url('/contact');?>">Contact</a></li>
                                    </ul>-->
                                    <?php
                                    wp_nav_menu( array(
                                        'menu'  => 'Primary Menu',
                                        'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
                                        'container'       => '',
                                        'container_class' => '',
                                        'container_id'    => '',
                                        'menu_class'      => '',
                                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'          => new WP_Bootstrap_Navwalker(),
                                        ) );?>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
