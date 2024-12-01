<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('NewEra'); ?></title>
    <link rel="icon" type="image/x-icon" href="<?php bloginfo('/assets/img/');?>">

    <?php wp_head();?>
    



</head>
<body>
    <header id="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                
                <?php the_custom_logo();?>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navContent">
                    <ul class="navbar-nav mr-auto mb-3 mb-lg-0 ">
                        <li class="nav-item nav-bg">
                            <a href="#content" class="nav-link scrollto" style="color: #000;" >Обо мне</a>
                        </li>
                        <li class="nav-item nav-bg">
                            <a href="#education" class="nav-link scrollto" style="color: #000;">Образование</a>
                        </li>
                        <li class="nav-item nav-bg">
                            <a href="#price" class="nav-link scrollto" style="color: #000;">Услуги</a>
                        </li>
                        <li class="nav-item nav-bg">
                            <a href="#footer" class="nav-link scrollto" style="color: #000; ">Контакты</a>
                        </li>
                    </ul>
                   </div>
               </div>
        </nav>
    </header>