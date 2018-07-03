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
    <meta name="description" content="My jsme komplexním řešením v oblasti nemovitostí Na projektu se podílíme od samotného zrodu myšlenky, proto jsme Vám schopni být téměř se vším nápomocni." />
    <meta name="keywords" content="Diverse Develop" />
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

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" type="image/png" href="images/favicon_diverse_reality_mini.png"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&amp;subset=latin-ext" rel="stylesheet">


    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">

    <!--    Datatable-->


    <!--    <script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>-->
    <!---->
    <!--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.js"></script>-->
    <!--    End of Datatable-->



    <link rel="stylesheet" href="./css/jquery.fullpage.css">
    <!--    bootstrap styles-->
    <link rel="stylesheet" href="./css/bootstrap.css">

    <link rel="stylesheet" href="./css/style.css?v=<?php echo date('His'); ?>">


    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->




</head>
<body>

<meta name="robots" content="NOINDEX,NOFOLLOW">

<nav class="navbar">
    <div class="container-fluid" >

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

        <div class="collapse navbar-collapse" id="navbar-menu" >
            <ul class="nav navbar-nav navbar-right" >

                <li class="projekty_hover dropdown "  ><a href="reference" class=" <?php if(strpos($_SERVER['REQUEST_URI'], '/reference') !== false) echo 'active'; ?>">Projekty</a>

                    <div class="dropdown-content" style="">
                        <div class="col-md-1 col-sm-offset-7" style="text-align: right">
                            <a href="/projektHybesova.php">Hybešova</a>
                        </div>
                        <div class="col-md-1">
                            <a href="/projektBoskovice.php">Boskovice</a>
                        </div>
                        <div class="col-md-1">
                            <a href="/projektMoravany.php">Moravany</a>
                        </div>
                    </div>

                </li>

                <li><a onclick="changeUrl('kontakt');" class="kontakt-link">Kontakt</a></li>

                <li > <a style="padding-right: 0; cursor: default; color: #F07D00!important;">601 103 103 |&nbsp;</a></li>
                <li> <a href="mailto:ockayova@diverse.cz" style="padding-left: 0; color: #F07D00!important;">ockayova@diverse.cz</a> </li>
                <!--                <li><a onclick="changeUrl('o-nas');" class="o-nas-link">O nás</a></li>-->
            </ul>

        </div>
    </div>
</nav>


<div class="main-preloader">
    <div class="main-preloader-bar"></div>
</div>

<?php include 'contact.php'; ?>
<?php include 'o-nas.php'; ?>