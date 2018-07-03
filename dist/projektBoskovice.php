<?php include 'header.php'; ?>

    <main id="home" class="thetop">


        <div id="homeCarousel" class="carousel slide" data-ride="carousel" >


            <div class="carousel-inner">

                <div class="item active">
                    <div class="home-photo" style="background-image: url(images/Boskovice/Boskovice_sit0005.jpg)"></div>
                    <p class="hp-photo-title">
                        Čelní pohled
                    </p>
                </div>


                <div class="item">
                    <div class="home-photo" style="background-image: url(images/Boskovice/Boskovice_sit0006.jpg)"></div>


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
                    <div class="main_txt" >

                        Byty&nbsp;pod&nbsp;střelnicí

                    </div>
                    <div class="text_content_gray_left promo" >

                       <span> Brzy zahájíme prodej nadstandardně řešených bytů v Boskovicích.</span>

<!--                        <span>Zahájili jsme prodej nadstandardně řešených bytů v Boskovicích,-->
<!--                        podívejte se na naši <a href="#" class="text-head-odkaz" >  nabídku</a></span>-->


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


                <div class="podstrana_title_content orange">
                    <h2 class="h2 no-padding">O projektu</h2>
                </div>
                <hr class="no_line">
                <div class="podstrana_text_content">
                    Bydlení na dosah přírody, ale s komfortem veškeré infrastruktury malebného města, to je náš nově připravovaný developerský projekt v Boskovicích.
                    Jedná se o pět novostaveb třípatrových rodinných domů, zasazených do nově vznikající ulice na pomezí zahrádkářské kolonie.
                    V každém domě budou tři bytové jednotky 3+kk, přízemní s vlastní zahrádkou a další s prostornými terasami. V rámci standardů zde naleznete podlahové vytápění,
                    solární panely, vinylové podlahy, velkoformátové dlažby a obklady, moderní zařizovací předměty a mnoho dalších kvalitních materiálů.
                    Každá jednotka má přímo před domem dvě vlastní parkovací stání. Díky své jedinečné poloze nabízejí byty nádherný výhled na okolní krajinu.
                </div>
            </div>
        </div>

        <!--GOOGLE MAP-->


        <div id="slider" class="">

            <div class="background">
                <div class="shadow"></div>
                <div class="pattern map">
                    <div id="googleMapBoskovice" style="width: 100%; height: 400px; position: relative; overflow: hidden;"></div>


                    <script>
                        var myCenter = new google.maps.LatLng(49.4866269, 16.6786356);
                        var pointer = new google.maps.LatLng(49.4866269, 16.6786356);



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

                            var map = new google.maps.Map(document.getElementById("googleMapBoskovice"),mapProp);

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
                        Město Boskovice leží na střední Moravě asi 40 km severně od Brna na hranici mezi Boskovickou brázdou a Drahanskou vrchovinou v nadmořské výšce asi 380 metrů.
                        Poskytuje veškerou občanskou infrastrukturu. Naleznete zde školy, školky, zdravotnická zařízení, obchody, sportoviště, restaurace a mnoho dalších.
                        Okolí je protkáno řadou cyklostezek e stezek pro pěší. Město si zachovává příjemný letoviskový charakter.

                    </div>
                </div>
            </div>

        <hr class="no_line" style="min-height: 105px">
    </div>

    <?php include 'orangebox-footer.php'; ?>


</body>

<?php include 'footer.php'; ?>