<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Diverse Reality</title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="description" content="My jsme komplexním řešením v oblasti nemovitostí
    Na projektu se podílíme od samotného zrodu myšlenky, proto jsme Vám schopni být téměř se vším nápomocni." />
    <meta name="keywords" content="Diverse Reality" />
    <meta name="author" content="Foreground s.r.o." />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <meta name="robots" content="NOINDEX,NOFOLLOW">


    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="images/favicon_diverse_reality_mini.png"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">


    <link rel="stylesheet" href="./css/jquery.fullpage.css">
    <link rel="stylesheet" href="./css/bootstrap.css">

    <link rel="stylesheet" href="./css/style.css?v=<?php echo date('His'); ?>">

    <link rel="stylesheet" href="flashy.min.css">




    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <!-- Global site tag (gtag.js) - Google Analytics -->

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-120460743-2"></script>

    <script>

        window.dataLayer = window.dataLayer || [];

        function gtag(){dataLayer.push(arguments);}

        gtag('js', new Date());



        gtag('config', 'UA-120460743-2');

    </script>

    <script src="https://maps.googleapis.com/maps/api/js"></script>




</head>
<body>


<nav class="navbar">
    <div class="navbar-header">
        <!--            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">-->
        <!--                <span class="sr-only">Toggle navigation</span>-->
        <!--                <span class="icon-bar"></span>-->
        <!--                <span class="icon-bar"></span>-->
        <!--                <span class="icon-bar"></span>-->
        <!--            </button>-->
        <a class="navbar-brand" href="./" onclick="closeModal();">
            <img src="images/Logo_diverse_reality_inverse.png">
        </a>
    </div>

    <!-- <div class="collapse navbar-collapse" id="navbar-menu" >-->
    <ul class="nav navbar-nav navbar-right">

        <li class="projekty_hover dropdown">
            <a href="#" class=" <?php if(strpos($_SERVER['REQUEST_URI'], '/reference') !== false) echo 'active'; ?>">Projekty</a>

            <div class="dropdown-content navbar-center " >

                <ul class="nav navbar-nav navbar-right submenu-projects">
                    <li><a class="submenu-h " href="/projektHybesova.php">Bytový dům Hybešova</a>
                        <ul class="padding-bottom">
                            <li>
                                <span class="submenu-L">Lokalita</span>
                            </li>
                            <li>
                                <hr class="no_line no-margin" style="height: 10px">
                            </li>
                            <li>
                                <a href="#" class="submenu-item" > O projektu</a>
                            </li>

                        </ul>
                    </li>
                    <li><a class="submenu-h" href="/projektBoskovice.php">Byty&nbsp;pod&nbsp;střelnicí</a>
                        <ul class="padding-bottom  border-right-half">
                            <li>
                                <span class="submenu-L">Lokalita</span>
                            </li>
                            <li>
                                <hr class="no_line no-margin" style="height: 10px">
                            </li>
                            <li>
                                <a href="#" class="submenu-item" > O projektu</a>
                            </li>
                            <li>
                                <a href="#" class="submenu-item" > Byty</a>
                            </li>
                            <li>
                                <a href="/standardy.php" class="submenu-item" > Standardy</a>
                            </li>
                            <li>
                                <a href="/galerie.php" class="submenu-item" > Galerie</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="submenu-h" href="/projektMoravany.php">Viladomy&nbsp;Švédské&nbsp;kříže</a>
                        <ul class="padding-bottom border-right-half">
                            <li>
                                <span class="submenu-L">Lokalita</span>
                            </li>
                            <li>
                                <hr class="no_line no-margin" style="height: 10px">
                            </li>
                            <li>
                                <a href="#" class="submenu-item" > O projektu</a>
                            </li>
                            <li>
                                <a href="#" class="submenu-item" > Byty</a>
                            </li>
                            <li>
                                <a href="/standardy.php" class="submenu-item" > Standardy</a>
                            </li>
                            <li>
                                <a href="/galerie.php" class="submenu-item" > Galerie</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </li>

        <li><a onclick="changeUrl('kontakt'); " class="kontakt-link scroll">Kontakt</a></li>
        <li > <a style="padding-right: 0; cursor: default; color: #F07D00!important;">601 103 103 |&nbsp;</a></li>
        <li> <a href="mailto:ockayova@diverse.cz" style="padding-left: 0; color: #F07D00!important;">ockayova@diverse.cz</a> </li>
        <li> <a href="http://www.diverse.cz/" target="_blank"  class="menu-button" style=" color: #F07D00!important; border: 2px solid #F07D00 ; padding:5px 10px; margin: 25px 25px 0 25px "><strong>NA DIVERSE</strong></a> </li>

    </ul>

</nav>




<?php include 'contact.php'; ?>
<?php include 'o-nas.php'; ?>