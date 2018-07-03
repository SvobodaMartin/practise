<?php include 'header.php'; ?>
    <body>


<!--    1    -->
<div class="side-padding">
    <hr class="no_line" style="height: 10px">
    <div class="hp_content thetop galerie-photo-padding">

        <div class="hp_content_item galerie row-lb">

            <div class="hp_content_image column">
                <img src="images/hybesova/exteriorr_cam_01_V04_2000x1500.jpg" onclick="openModal();currentSlide(1)">
            </div>
            <div class="galery_content_position_left hp_content_text">
                <h2 class="h2">
                    Vizualizace
                </h2>
                <!--            <p class="text_content_gray_right text-small">-->
                <!---->
                <!--                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam rhoncus aliquam metus. Integer pellentesque quam vel velit. Nullam eget nisl.-->
                <!--                Integer imperdiet lectus quis justo. Quisque porta. Sed convallis magna eu sem. In dapibus augue non sapien. Aliquam in lorem sit amet leo accumsan lacinia.-->
                <!--                Pellentesque arcu. Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.-->
                <!---->
                <!--            </p>-->
                <div >

                    <a href="http://www.diverse.cz/develop/reference" target="_blank" class="vice-btn left-vice" style="color: white">
                        Více&nbsp;informací
                    </a>

                    <a href="/projektBoskovice.php" class="content_btn_left">

                        +

                    </a>

                </div>

            </div>

        </div>

    </div>
<!--    2    -->

    <div class="hp_content no-margin thetop galerie-photo-padding">

        <div class="hp_content_item galerie row-lb">

            <div class="hp_content_image column" >
                <img src="images/Boskovice_sit0006.jpg" onclick="openModal();currentSlide(2)" >

            </div>
            <div class="galery_content_position hp_content_text">
                <h2 class="h2">
                    Okolí
                </h2>
    <!--            <p class="text_content_gray_right text-small">-->
    <!---->
    <!--                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam rhoncus aliquam metus. Integer pellentesque quam vel velit. Nullam eget nisl.-->
    <!--                Integer imperdiet lectus quis justo. Quisque porta. Sed convallis magna eu sem. In dapibus augue non sapien. Aliquam in lorem sit amet leo accumsan lacinia.-->
    <!--                Pellentesque arcu. Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.-->
    <!---->
    <!--            </p>-->
                <div >

                    <a href="http://www.diverse.cz/develop/reference" target="_blank" class="vice-btn right-vice" style="color: white">
                        Více&nbsp;informací
                    </a>

                    <a href="/projektBoskovice.php" class="content_btn_right">

                        +

                    </a>


                </div>



            </div>


        </div>

    </div>
    <!--    3     -->
    <div class="hp_content thetop galerie-photo-padding">

        <div class="hp_content_item galerie row-lb">

            <div class="hp_content_image column" >
                <img src="images/hybesova/exterior_cam_03_V04_2000x1500.jpg" onclick="openModal();currentSlide(3)" >

            </div>
            <div class="galery_content_position_left hp_content_text">
                <h2 class="h2">
                    Průběh stavby
                </h2>
                <!--            <p class="text_content_gray_right text-small">-->
                <!---->
                <!--                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Nullam rhoncus aliquam metus. Integer pellentesque quam vel velit. Nullam eget nisl.-->
                <!--                Integer imperdiet lectus quis justo. Quisque porta. Sed convallis magna eu sem. In dapibus augue non sapien. Aliquam in lorem sit amet leo accumsan lacinia.-->
                <!--                Pellentesque arcu. Duis viverra diam non justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos.-->
                <!---->
                <!--            </p>-->
                <div >


                    <a href="/projektBoskovice.php" class="content_btn_left">

                        +

                    </a>
                    <a href="http://www.diverse.cz/develop/reference" target="_blank" class="vice-btn left-vice" style="color: white">
                        Více&nbsp;informací
                    </a>
                </div>

            </div>

        </div>

    </div>


<hr class="no_line" style="height: 20vh">
</div>


<div id="myModal" class="modal">

    <span class="close cursor" onclick="closeModal()">&times;</span>

    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    <div class="modal-content">

        <div class="mySlides">

            <img src="images/hybesova/exteriorr_cam_01_V04_2000x1500.jpg" style="width:100%">
        </div>

        <div class="mySlides">

            <img src="images/Boskovice_sit0006.jpg" style="width:100%">
        </div>

        <div class="mySlides">

            <img src="images/hybesova/exterior_cam_03_V04_2000x1500.jpg" style="width:100%">
        </div>



        <!-- Caption text -->
        <div class="caption-container">
            <p id="caption"></p>
        </div>

        <!-- Thumbnail image controls -->
        <div class="thumbnails-wrap">
            <div class="column">
                <img class="demo" src="images/hybesova/exteriorr_cam_01_V04_2000x1500.jpg" onclick="currentSlide(1)" alt="Vizualizace">
            </div>

            <div class="column">
                <img class="demo" src="images/Boskovice_sit0006.jpg" onclick="currentSlide(2)" alt="okolí">
            </div>
            <div class="column">
                <img class="demo" src="images/hybesova/exterior_cam_03_V04_2000x1500.jpg" onclick="currentSlide(3)" alt="Průběh stavby">
            </div>

            <div class="column">
                <img class="demo" src="images/hybesova/exteriorr_cam_01_V04_2000x1500.jpg" onclick="currentSlide(1)" alt="Vizualizace">
            </div>

            <div class="column">
                <img class="demo" src="images/Boskovice_sit0006.jpg" onclick="currentSlide(2)" alt="okolí">
            </div>
            <div class="column">
                <img class="demo" src="images/hybesova/exterior_cam_03_V04_2000x1500.jpg" onclick="currentSlide(3)" alt="Průběh stavby">
            </div>

            <div class="column">
                <img class="demo" src="images/hybesova/exteriorr_cam_01_V04_2000x1500.jpg" onclick="currentSlide(1)" alt="Vizualizace">
            </div>

            <div class="column">
                <img class="demo" src="images/Boskovice_sit0006.jpg" onclick="currentSlide(2)" alt="okolí">
            </div>
            <div class="column">
                <img class="demo" src="images/hybesova/exterior_cam_03_V04_2000x1500.jpg" onclick="currentSlide(3)" alt="Průběh stavby">
            </div>
        </div>

    </div>
</div>


        <?php include 'orangebox-footer.php'; ?>

    </body>

<?php include 'footer.php'; ?>