<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LOGIC</title>
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>

<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <img src="<?php  echo get_template_directory_uri(); ?>/img/logo.png" alt="">
                </div>
            </div>


            <div class="mainmenu_area">


                <div class="col-md-8">
                    <?php wp_nav_menu(array('theme_location' => 'main-menu', 'menu_id' => 'nav')); ?>
                </div>

            </div>



        </div>
    </div>
</div>
