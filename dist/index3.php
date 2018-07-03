<?php include 'Newheader.php'; ?>

<main id="home">

    <div id="homeCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <div class="item active">
                <div class="home-photo container-fluid" style="background-image: url(images/hp_photo.jpg)"></div>
                <div class="hp-photo-title">
                    AREÁL MERIDIEM
                </div>
            </div>

            <div class="item">
                <div class="home-photo container-fluid" style="background-image: url(images/Boskovice_sit0006.jpg)"></div>
                <div class="hp-photo-title">
                    BYTY POD STŘELNICÍ
                </div>
            </div>

        </div>
    </div>

    <div class="home-text">
        <div class="home-text-first">
            DIVERSE Develop
        </div>
        <div class="home-text-second" style="overflow: hidden;height: 50px;">
            <span>
                ...vše v jednom slově
            </span>
            <span class="top">
                ...one world in one word
            </span>
        </div>
        <div class="home-text-link" onclick="changeUrl('o-nas');">
            +
        </div>
    </div>

</main>

<?php include 'footer.php'; ?>