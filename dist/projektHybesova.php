<?php include 'header.php'; ?>

    <main id="home" class="thetop">


        <div id="homeCarousel" class="carousel slide" data-ride="carousel">


            <div class="carousel-inner">

                <div class="item active">
                    <div class="home-photo" style="background-image: url(images/hybesova/exteriorr_cam_01_V04_2000x1500.jpg)"></div>
                    <p class="hp-photo-title">
                        Čelní pohled
                    </p>
                </div>


                <div class="item">
                    <div class="home-photo" style="background-image: url(images/hybesova/exterior_cam_03_V04_2000x1500.jpg)"></div>


                    <p class="hp-photo-title">
                        Čelní pohled II.
                    </p>
                </div>
                <div class="main-preloader">
                    <div class="main-preloader-bar"></div>
                </div>
            </div>

            <div class="home-text hp_content_text">

                <div class="text_content_position_left hp_content_text">
                    <h1 class="main_txt" >

                        Bytový&nbsp;dům&nbsp;Hybešova

                    </h1>
                    <div class="text_content_gray_left promo" >

                        <span>Cena 59 000 000 kč<br /> V případě koupi společnosti vlastnící nemovitost cena 56 000 000 kč</span>


                    </div>
<!--                    <div >-->
<!---->
<!--                        <a href="#" class="content_btn_left">-->
<!---->
<!--                            +-->
<!---->
<!--                        </a>-->
<!---->
<!--                    </div>-->
                </div>
            </div>
            <div class="arrow bounce" onclick="scrollWin()">
                <i class="fas fa-angle-down" style="font-size: 50px; color: #F07D00"></i>
            </div>
        </div>

    </main>
<body>
    <div class="container">
        <div class="podstrana_wrapper_content">
            <div class="row" >
                <hr class="no_line">


                <div class="podstrana_title_content">
                    <h2 class="h2 no-padding">O projektu</h2>
                </div>
                <hr class="no_line">
                <div class="podstrana_text_content">
                    Prodej kompletně zrekonstruovaného pětipodlažního nájemního domu s moderní nadstavbou v širším centru Brna,
                    který se nachází ve slepém rameni ulice Hybešovy. V přízemí naleznete komerční prostor o velikosti 135,3 m2
                    s prostornou téměř sto metrovou částečně zastřešenou terasou, která vybízí k příjemnému posezení a je vhodná pro vinárnu,
                    restauraci, pivnici či soukromou oázu klidu. V dalších podlažích jsou čtyři velkoryse řešené byty 2+kk (65,9m2-86,5m2 )
                    a  čtyři prostorné 1kk (38,8m2-54,8m2). V posledních dvou patrech disponuje každý byt rozlehlou terasou,
                    která zvyšuje komfort bydlení. Interiéry jsou navrženy do moderních barev a tvarů ve vysokém standardu,
                    který zahrnuje vinylové podlahy, podlahové vytápění, velkoformátové dlažby a obklady, nově vybudovaný výtah  a další.
                    Zastavěná plocha je 326 m2, plocha bytových jednotek a komerčního prostoru 643 m2 + 120 m2 terasy + společné prostory
                    (kočárkárna, výtah, místnost na popelnice, společná chodba).V rámci rekonstrukce došlo k výměně oken a dveří,  k zateplení
                    dvorní části budovy a k nové fasádě, byly kompletně vyměněny rozvody všech sítí, položeny nové podlahy, omítky i příčky.
                    Rekonstrukce bude dokončena v srpnu 2018.
                </div>
            </div>
        </div>
                                <!--GOOGLE MAP-->


        <div id="slider" class="">

            <div class="background">
                <div class="shadow"></div>
                <div class="pattern map">
                    <div id="googleMapHybesova" style="width: 100%; height: 400px; position: relative; overflow: hidden;"></div>


                    <script>
                        var myCenter = new google.maps.LatLng(49.1887029,16.5993134);
                        var pointer = new google.maps.LatLng(49.1887029,16.5993134);

                        var styles = [
                            { "stylers": [ { "lightness": -59 }, { "hue": "#ffb300" }, { "gamma": 0.92 }, { "saturation": -83 } ] },
                            { "featureType": "road.local", "elementType": "labels", "stylers": [ { "visibility": "off" } ] },
                            { "featureType": "road.local", "elementType": "geometry.fill", "stylers": [ { "color": "#898582" }, { "gamma": 0.72 } ] },
                            { "featureType": "road.arterial", "elementType": "geometry.fill", "stylers": [ { "visibility": "on" }, { "color": "#898582" } ] },
                            { "featureType": "road.arterial", "elementType": "geometry.stroke", "stylers": [ { "color": "#48413b" } ] },
                            { "featureType": "road.highway", "elementType": "geometry.fill", "stylers": [ { "color": "#898582" } ] },
                            { "featureType": "road.highway", "elementType": "geometry.stroke", "stylers": [ { "weight": 1.2 }, { "gamma": 1.42 } ] },
                            { "elementType": "labels.text.stroke", "stylers": [ { "visibility": "on" }, { "invert_lightness": true }, { "weight": 2.6 } ] },
                            { "featureType": "water", "elementType": "geometry", "stylers": [ { "visibility": "on" }, { "color": "#4d4c44" }, { "hue": "#00c3ff" }, { "saturation": -70 }, { "lightness": 21 } ] },
                            { "featureType": "transit", "elementType": "labels", "stylers": [ { "visibility": "off" }] },
                            { "featureType": "poi", "stylers": [ { "visibility": "off" }]}
                        ];




                        function initialize() {
                            var mapProp = {
                                center:myCenter,
                                zoom:14,
                                scrollwheel:false,
                                draggable:true,
                                styles: styles,
                                mapTypeId:google.maps.MapTypeId.ROADMAP,
                                backgroundColor: "#000000",

                            };

                            var map = new google.maps.Map(document.getElementById("googleMapHybesova"),mapProp);

                            var marker = new google.maps.Marker({
                                position:pointer,
                                map: map,
                                icon: 'images/pin.png'
                            });


                            marker.setMap(map);

                        }
                        google.maps.event.addDomListener(window, 'load', initialize);
                    </script>
                </div>
            </div>
        </div>

        <hr class="no_line">
        <div class="row" >
            <div class="col-sm-12 podstrana_wrapper_content">


                <div class="podstrana_title_content">
                    <h2 class="h2 no-padding">Lokalita</h2>
                </div>
                <hr class="no_line">
                <div class="podstrana_text_content">
                    Projekt svojí polohou vybízí ke klidnému bydlení s luxusem veškeré infrastruktury a docházkovou vzdáleností
                    do samotného centra města Brna. Zastávka MHD je vzdálena pouhých 170 metru, na hlavním nádraží, dopravní tepně města,
                    jste tramvají za 4 minuty a svěží chůzí se dostanete na Náměstí svobody za necelých 20 minut. V okolí se nachází  kavárny,
                    bary a restaurace. Parkování je možné v přilehlých ulicích nebo je možnost využít parkovací dům vzdálený pouhých 150 metrů.

                </div>
            </div>
        </div>

        <hr class="no_line" style="min-height: 105px">
    </div>

    <?php include 'orangebox-footer.php'; ?>


</body>

<?php include 'footer.php'; ?>