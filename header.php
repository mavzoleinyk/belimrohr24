<?php 
?>
<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
        <link rel="stylesheet" href="/wp-content/themes/b24/css/main.css?ver=1.0.8" />
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css?ver=1.0.2" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="/wp-content/themes/b24/js/sticky.js"></script>
        <style>
            .swiper-button-prev {
                left: -10px;
                width: 58px;
                height: 59px;
                transform: none;
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg width='48' height='49' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40.26 36.17l3.54-3.56L24 12.83 4.2 32.63l3.54 3.54L24 19.91l16.26 16.26z' fill='%23009BB7'/%3E%3C/svg%3E");
                transform: rotate(-90deg);
                transition: opacity 0.3s;
}
            .swiper-button-next {
                right: -10px;
                left: auto;
                top: 0;
                width: 58px;
                height: 59px;
                transform: none;
                background-repeat: no-repeat;
                background-position: center;
                background-size: contain;
                background-image: url("data:image/svg+xml;charset=utf8,%3Csvg width='48' height='49' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40.26 36.17l3.54-3.56L24 12.83 4.2 32.63l3.54 3.54L24 19.91l16.26 16.26z' fill='%23009BB7'/%3E%3C/svg%3E");
                transform: rotate(90deg);
                transition: opacity 0.3s;
}
@media (max-width:530px) {
    .process__title, .container-heading, .item-questions__heading, .container-header__title {
        font-size: 2.2rem;
        text-align: center;
    }
    .container-header__benefits {
        font-size: 1.4rem;
    }
    .swiper-button-prev {
        left: -10px;
        width: 40px;
        height: 42px;
    }
    .swiper-button-next {
        right: -10px;
        left: auto;
        top: 0;
        width: 40px;
        height: 42px;
    }
        
}
.menu-hauptmenue-de-container {height: 100%;}
        </style>
	<?php wp_head(); ?>
		<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PQFXWM5');</script>
<!-- End Google Tag Manager -->
    </head>
	<body>	
		<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PQFXWM5"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php wp_body_open(); ?>
	<header class="header">
                <div class="header-top">
                    <div class="container">
                        <a href="/" class="logo">
                            <img class="mob-hide" src="/wp-content/themes/b24/img/logo-belim-300x54.png" alt="Rohrreinigung in Berlin, Notdienst Rund um die Uhr - Belimrohr24.de">
                            <img class="desc-hide" src="/wp-content/themes/b24/img/bm24-logo-mob.png" alt="Rohrreinigung in Berlin, Notdienst Rund um die Uhr - Belimrohr24.de">
                        </a>
                        <div class="header-cont">
                            <a href="tel:+493052014211" class="info__number first phone_trig">+49 305 201 42 11</a>
                            <a href="mailto:belimrohr24@gmail.com" class="info__number first phone_trig">belimrohr24@gmail.com</a>
                        </div>
                        <div class="info">
                            <div class="info__number-block">
                                <span class="info__notify">
                                    <picture>
                                        <source srcset="/wp-content/themes/b24/img/clock.webp" type="image/webp" />
                                        <img src="//wp-content/themes/b24/img/clock.png" alt="" />
                                    </picture>
                                    <span class="uppercase">7:00 - 23:00</span>
                                </span>
                                <a href="tel:+493052014211" class="info__number second phone_trig">0 305 201 42 11</a>
                                <a href="mailto:belimrohr24@gmail.com" class="info__number-mob">belimrohr24@gmail.com</a>
                            </div>
                            <a href="tel:+493052014211" class="get-order btn phone_trig">Jetzt Anrufen</a>
                        </div>
                        <div class="burger"><span></span><span></span><span></span></div>
                    </div>
                </div>
                <div class="header-bottom">
                    <div class="container">
                        <div class="burger-wrapper">
                            <div class="burger-close"><span></span><span></span><span></span></div>
                        </div>
                        <nav class="nav">
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'header_menu',
                                //'menu_class' => 'nav nav-tabs',
                                'add_li_class'  => 'header-menu__item nav__li',
                                'link_class'  => 'header-menu__link nav__link',
                                'menu_class' => "header-menu nav__list",
                                'walker' => new My_Walker_Nav_Menu(),
                            )); 
                        ?>
                        </nav>
                        <!--
                        <nav class="nav-location">
                            <ul class="nav-location__list">
                                <li class="nav-location__li">
                                    <p class="nav-location__text">Rohrreinigung in Berlin <?php echo $page_ort; ?></p>
                                </li>
                            </ul>
                        </nav>
                        -->
                    </div>
                </div>
                <div class="header-breadcrumbs">
                <div class="container">
                <?php
                if ( is_front_page() ) :
                else :
                    if ( function_exists('yoast_breadcrumb') ) {
                      yoast_breadcrumb( '<div class="breadcrumbs" id="breadcrumbs">','</div>' );
                    }
                endif;
                ?>
                </div>
                </div>
            </header>