<?php include 'header.php'; ?>

    <main id="home" class="hetop">


        <div id="homeCarousel" class="carousel slide" data-ride="carousel" >


            <div class="carousel-inner">

                <div class="item active">
                    <div class="home-photo" style="background-image: url(images/moravany/Ulicni.jpg)"></div>
                    <p class="hp-photo-title">
                        Čelní pohled
                    </p>
                </div>


                <div class="item">
                    <div class="home-photo" style="background-image: url(images/moravany/Zahradni.jpg)"></div>


                    <p class="hp-photo-title">
                        Zadní pohled
                    </p>
                </div>
                <div class="main-preloader">
                    <div class="main-preloader-bar"></div>
                </div>
            </div>

            <div class="home-text hp_content_text">

                <div class="text_content_position_left hp_content_text">
                    <div class="main_txt" style="">

                        Viladomy&nbsp;Švédské&nbsp;kříže

                    </div>
                    <div class="text_content_gray_left promo"  >

                        <span>Vyberte si z <a href="#" class="text-head-odkaz" >nabídky</a> 19 luxusních vil v Moravanech</span>


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
                    V nově vznikajícím developerském projektu v Moravanech u Brna připravujeme 19 luxusních novostaveb na prodej.
                    Vily se budou pyšnit vysokým standardem a velkorysými dispozicemi. Střecha bude vegetační, což zajistí přírodní a
                    estetickou izolaci. Za zmínku jistě stojí obklady a dlažby Villeroy & Boch, bazén vyhřívaný tepelným čerpadlem
                    , prostorné zahrady, velkoformátová hliníková okna s bezpečnostními trojskly s výbornou tepelnou a hlukovou izolací,
                    využití tepelného čerpadla pro topení a ohřev vody, rekuperace a další. Už samotný fakt, že
                    energetická náročnost splňuje třídu A řadí vily do bezkonkurenční kategorie luxusních novostaveb.
                    Díky své poloze nabídnou domy ničím nerušený výhled na jihozápadní část města Brna.
                </div>
            </div>
        </div>


        <!--GOOGLE MAP-->


        <div id="slider" class="">

            <div class="background">
                <div class="shadow"></div>
                <div class="pattern map">
                    <div id="googleMapMoravany" style="width: 100%; height: 400px; position: relative; overflow: hidden;"></div>


                    <script>
                        var myCenter = new google.maps.LatLng(49.1517572, 16.5808825);
                        var pointer = new google.maps.LatLng(49.1517572, 16.5808825);


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
                                backgroundColor: "#000000"

                            };

                            var map = new google.maps.Map(document.getElementById("googleMapMoravany"),mapProp);

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
                    V lokalitě Moravany se snoubí bydlení v poklidné atmosféře s výbornou dostupností velkoměsta.
                    Jsou obcí vzdálenou 7 km jihozápadně od Brna. Nadmořská výška se pohybuje od 230 do 338 m nad mořem.
                    Přímo v obci naleznete poštu, školu, školku, restauraci i cukrárnu. Do obchodního centra FUTURUM
                    je to autem pouhých 5 minut a do centra Brna se dostanete za 10 minut.
                    Zastávka MHD je od projektu vzdálená 650 metrů na hlavní nádraží, důležitý přestupový uzel,
                    přijedete MHD za 27 minut. Pokud potřebujete vyjet mimo Brno je Vám k dispozici nedaleký nájezd na dálnici D1 či D2.

                </div>
            </div>
        </div>

        <hr class="no_line" style="min-height: 105px">
    </div>

    <?php include 'orangebox-footer.php'; ?>


</body>

<?php include 'footer.php'; ?>