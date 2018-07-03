<div id="modalSection" class="contact">
    <div id="map_contact" style="overflow: hidden;"></div>



    <script>
        var myCenter2 = new google.maps.LatLng(49.2207058, 16.5772011);
        var pointer2 = new google.maps.LatLng(49.2207058, 16.5965035);

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
                center:myCenter2,
                zoom:14,
                scrollwheel:false,
                draggable:true,
                styles: styles,
                mapTypeId:google.maps.MapTypeId.ROADMAP,
                backgroundColor: "#000000"

            };

            var map = new google.maps.Map(document.getElementById("map_contact"),mapProp);

            var marker = new google.maps.Marker({
                position:pointer2,
                map: map,
                icon: 'images/pin.png'
            });

            marker.setMap(map);

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>


    <div class="col-lg-4 col-lg-offset-2 col-md-5 col-md-offset-2 contact-frame">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="orange">
                            DIVERSE Reality, s.r.o.
                        </h2>
                        <br />
                    </div>
                    <div class="col-md-6">
                        <p>
                            <strong class="white">Kontaktní údaje</strong><br />
                            Palackého třída 11<br />
                            612 00 Brno<br />
                            Česká republika<br /><br />
                            Mobil: 601 103 103<br />
                            E-mail: <a class="white" href="mailto:reality@diverse.cz">reality@diverse.cz</a><br />
                            Web: <a class="white" href="http:www.diverse-reality.cz ">www.diverse-reality.cz </a><br /><br />
                            Dat. schránka: bz3zfta<br />
                            <!--<a href="https://www.facebook.com/DiverseDevelop/" target="_blank" class="btn btn-facebook"><i class="fab fa-facebook-f"></i></a>-->
                        </p>
                    </div>
                    <div class="col-md-6">

                        <p>
                            <strong class="white">Fakturační údaje a sídlo</strong><br />
                            Tyršova 258<br />
                            664 42 Modřice<br />
                            Česká republika<br /><br />

                            <span style="width: 27px; display: inline-block;">IČ:</span>  06773419<br />
                            <span style="width: 27px; display: inline-block">DIČ:</span> CZ06773419<br />

                            <span class="small">Společnost DIVERSE Reality s.r.o. je zapsána v OR oddíl C, vl.104226</span> <br /><br />
                            <strong class="white">Bankovní spojení</strong><br />
                            Komerční banka, a.s.<br />
                            115-6794650247/0100
                        </p>
                    </div>
                </div>
            </div>

</div>