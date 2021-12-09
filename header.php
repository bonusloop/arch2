<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="./normalize.css">
    <link rel="stylesheet" href="./libs/Magnific-Popup/magnific-popup.css">
    <link rel="stylesheet" href="./libs/slick/slick.css">
    <!--<link rel="stylesheet" href="./style.css">-->
    <?php wp_head(); ?>
    <title><?php bloginfo( 'description' ); ?></title>
</head>
<body>
    <header class="header">
        <div class="header__navigation">
            <a class="header__logo-link" href="">
                <img class="header__logo" src="<?php bloginfo( 'template_url' ); ?> ./assets/img/logo-arch.svg" alt="logo">
            </a>
            <nav class="header__nav nav">
                <ul class="nav__list">
                    <li class="nav__list-item"><a class="nav__link" href="">Design Gallery</a></li>
                    <li class="nav__list-item"><a class="nav__link" href="">List of Architect</a></li>
                    <li class="nav__list-item"><a class="nav__link" href="">Articles</a></li>
                    <li class="nav__list-item"><a class="nav__link" href="">How it Works</a></li>
                </ul>
            </nav>
        </div>
        <div class="header__autorization">
            <img class="header__search" src="<?php echo IMG_DIR; ?>/ic-searhc.svg" alt="search">
            <button class="header__btn header__btn--sing-in">Sign In</button>
            <button class="header__btn header__btn--sing-up">Sign Up</button>    
        </div>
    </header>