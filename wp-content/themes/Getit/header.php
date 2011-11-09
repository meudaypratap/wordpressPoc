<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html itemscope itemtype="http://schema.org/Organization" xmlns="http://www.w3.org/1999/xhtml"/>
<head>
    <?php get_template_part('head'); ?>
</head>
<body>
<div id="left-bg">
    <div id="right-bg">
        <div id="addons">
            <ul id="bottomSlider" style="width:780px; height: 90px;overflow: hidden;list-style: none outside none">
                <li style=" z-index:0 !important;"><a href="http://www.getit.in" target="_blank"> <img
                        src="<?php get_image_uri('banners/Tarun-Properties.gif') ?>" alt="Tarun Properties"
                        style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.getit.in" target="_blank"> <img
                        src="<?php get_image_uri('banners/shri-balaji.gif') ?>" alt="Shri Balaji Cargo"
                        style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.getit.in" target="_blank">
                    <img src="<?php get_image_uri('banners/rzone1.gif') ?>" alt="R-Zone"
                         style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.getit.in/precisionproducts1/" target="_blank">
                    <img src="<?php get_image_uri('banners/precision1.gif') ?>" alt="Precision Products"
                         style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.getit.in/vidyavardhakacollegeofengineering1/"
                                                      target="_blank">
                    <img src="<?php get_image_uri('banners/Vidyavardhaka-College-Of-En.jpg') ?>"
                         alt="Vidyavardhaka College Of Engineering" style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.vijaytransformers.com/" target="_blank">
                    <img src="<?php get_image_uri('banners/vijay-power.gif') ?>" alt="Vijay Power Control System"
                         style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.getit.in/vinayakamissionsuniversity4/"
                                                      target="_blank">
                    <img src="<?php get_image_uri('banners/vinayaka-missions-universit.jpg') ?>"
                         alt="Vinayaka Missions University" style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.winchhouse.com" target="_blank">
                    <img src="<?php get_image_uri('banners/winch-house.gif') ?>" alt="Winch House India (P) Ltd"
                         style="border: 1px solid #ddd;"/>
                </a></li>
                <li style=" z-index:0 !important;"><a href="http://www.getit.in/wiztoonzanimationprivatelimited1/"
                                                      target="_blank">
                    <img src="<?php get_image_uri('banners/Wiztoonz--Academy-Of-Media.gif') ?>"
                         alt="Wiztoonz  Academy Of Media & Design" style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href=" http://sharmabilliards.com/" target="_blank">
                    <img src="<?php get_image_uri('banners/Sharma-Billiards.gif') ?>" alt="Sharma Billiards"
                         style="border: 1px solid #ddd;"/> </a>
                </li>
                <li style=" z-index:0 !important;"><a href="http://lavelapizzeria.com/" target="_blank">
                    <img src="<?php get_image_uri('banners/La-Vela-Pizzeria-Wide.gif') ?>" alt="La Vela Pizzeria"
                         style="border: 1px solid #ddd;"/> </a>
                </li>
                <li style=" z-index:0 !important;"><a href="http://www.everestmobilepark.com/" target="_blank"> <img
                        src="<?php get_image_uri('banners/everest-mobile.gif') ?>" alt="Everest Mobile"
                        style="border: 1px solid #ddd;"/> </a></li>
                <li style=" z-index:0 !important;"><a href="#"> <img
                        src="<?php get_image_uri('banners/sri-vianayaga.gif') ?>" alt="Vinayaga flowerist"
                        style="border: 1px solid #ddd;"/> </a>
                </li>
                <li style=" z-index:0 !important;"><a href="http://www.overseasexpress.in/" target="_blank">
                    <img src="<?php get_image_uri('banners/overseas-banner2.gif') ?>" alt="Overseas Express"
                         style="border: 1px solid #ddd;"/> </a>
                </li>
            </ul>
        </div>
        <div id="container">
            <div id="header">
                <div id="logo"><a target="_blank" href="http://www.getit.in"><img
                        src="<?php get_image_uri('getit-logo.png') ?>" border="0"/></a>

                    <div id="search">
                        <form action="#" class="page_body" id="_frmMain" name="_frmMain" onsubmit="return gotoGetit();">
                            <input type="text" name="what" id="what">
                            <input type="submit" value="Getit" name="searchButton">
                        </form>
                    </div>
                </div>
                <div id="navigation">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </div>
            </div>
