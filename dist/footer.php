
<?php if($_SERVER['REQUEST_URI'] != '/' && !strpos($_SERVER['REQUEST_URI'], '/reference') !== false) { ?>
   <!-- <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 copyright">
                    &copy; Copyright <?php /*echo date('Y'); */?> DIVERSE Develop, s.r.o.  <span class="pull-right"></span>
                </div>
            </div>
        </div>
    </footer>-->

<?php } ?>



<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>

<!-- Main JS (Do not remove) -->
<script src="js/main.js"></script>

<script type="text/javascript" src="js/jquery.fullpage.min.js"></script>

<!--scroll-->
<script>
    function scrollWin() {
        window.scrollBy({
            "behavior": "smooth",
            "left": 0,
            "top": 980
        });
    }
</script>

<script>
    $(window).scroll(function() {});
    $(function(){$(".scroll").click(function(){$("html,main").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
</script>


<!--End Scroll-->
<script>



    $(document).ready(function() {
        $('.no-container').removeClass('container');

        $('.realization-carousel .item').each(function(){
            $(this).height($('.realization-carousel .item').width()/1.5);
        });

      /*  $('.projekty_hover,.submenu-projects').on('mouseover', function(){
            $('nav.navbar').toggleClass('submenu-open');
        });*/


        if($(window).width() < 992) {
            $('#homeCarousel .item:not(:first-child)').remove();
        }

        setInterval(function() {
            $('.home-text-second span:not(.top):not(.bottom)').addClass('bottom');
            $('.home-text-second span.top').removeClass('top');
            $('.home-text-second span.bottom').addClass('top');
            setTimeout(function() {
                $('.home-text-second span.top').removeClass('bottom');
            }, 500);
        }, 3000);


        $('.show-first').on('click', function(){
            $('.about .container-fluid > .row').removeClass('show');
            $('.about .about-first').addClass('hide-right');
            $('.about .about-first').removeClass('hide-right');
            $('.about-first h2, .about-first p, .about-first hr, .about-first a').addClass('rg-fade');
            $('.about-second h2, .about-second ul, .about-second a').removeClass('rg-fade');


        });

        $('.show-about').on('click', function(){
            $('.about .container-fluid > .row').removeClass('show');
            $('.about .about-first').addClass('hide-right');
            $('.about .about-second').addClass('show');
            $('.about-first h2, .about-first p, .about-first hr, .about-first a').removeClass('rg-fade');
            $('.about-third h2, .about-third p, .about-third a, .about-third .logos-block').removeClass('rg-fade');
            $('.about-second h2, .about-second ul, .about-second a').addClass('rg-fade');

        });

        $('.show-kdo-jsme').on('click', function(){
            $('.about .container-fluid > .row').removeClass('show');
            $('.about .about-first').addClass('hide-right');
            $('.about .about-third').addClass('show');
            $('.about-third h2, .about-third p, .about-third a, .about-third .logos-block').addClass('rg-fade');
            $('.about-second h2, .about-second ul, .about-second a').removeClass('rg-fade');

        });

    });


    $(window).resize(function() {
        $('.realization-carousel .item').each(function(){
            $(this).height($('.realization-carousel').width()/1.5);
        });
    });

    $(document).on('ready', function(){
        $('.main-preloader').delay(800).fadeOut(300);

        setTimeout(function(){
            $('.main-preloader').remove();
        }, 1100);
    });


    $('body').ready(function(){

        $('.main-preloader-bar').css({width: '100%'});


        $('#homeCarousel').carousel({
            interval: 5500,
            pause: 'none'
        });

        if($('.realization-item').length > 0) {
            $('body, html').animate({scrollTop: $('.realization-item.active').offset().top}, 500, 'linear');
            $('#'+$('.realization-item.active').data('item')).css('opacity', '1');
        }

        if($('.home-photo').length > 0) {
            $('#homeCarousel .item:first-child .home-photo').addClass('scale');
        }


        $('#homeCarousel').on('slide.bs.carousel', function () {
            $('#homeCarousel .item .home-photo').removeClass('scale');
            setTimeout(function() {
                $('#homeCarousel .item.left .home-photo').addClass('scale');
            }, 500);
        });

        /*$('#homeCarousel').on('slide.bs.carousel', function () {
            setTimeout(function() {
                $('#homeCarousel .item.active .home-photo').removeClass('scale');
            }, 200);
            setTimeout(function() {
                $('#homeCarousel .item.next .home-photo').addClass('scale');
            }, 200);

        });*/


        if(window.location.href.indexOf("kontakt") > -1) {
            $('.contact').addClass('show');
            setTimeout(function(){
                $('#home .realization-item:not(:first-child)').hide();
                $('#home .realization-background:not(:first-child)').hide();
                $('#home .carousel-indicators').hide();
                $('.contact').addClass('absolute');
            }, 500);
            $('.kontakt-link').addClass('active');
        }
        if(window.location.href.indexOf("o-nas") > -1) {
            $('.about').addClass('show');

            setTimeout(function(){
                $('#home .realization-item:not(:first-child)').hide();
                $('#home .realization-background:not(:first-child)').hide();
                $('#home .carousel-indicators').hide();
                $('.about').addClass('absolute');
                $('.about-first h2, .about-first p, .about-first hr, .about-first a').addClass('rg-fade');
            }, 500);
            $('.o-nas-link').addClass('active');


        }


    });


// kontakty
    function changeUrl($url) {

        $('.contact').removeClass('show');
        $('.about').removeClass('show');
        $('.contact').removeClass('absolute');
        $('.about').removeClass('absolute');

        $('.navbar-collapse').removeClass('in');

        history.pushState({}, null, $url);
        $('nav.navbar .navbar-nav li a').removeClass('active');
        $('.'+$url+'-link').addClass('active');

        if($url == 'kontakt') {
            $('.contact').addClass('show absolute');
        }
        if($url == 'o-nas') {
            $('.about').addClass('show absolute');
            $('.about .container-fluid > .row').removeClass('show');
            $('.about .about-first').removeClass('hide-right');
            $('.about-first h2, .about-first p, .about-first hr, .about-first a').addClass('rg-fade');
            $('.about-second h2, .about-second ul, .about-second a').removeClass('rg-fade');

        }

        setTimeout(function(){
            $('#home .realization-item:not(:first-child)').hide();
            $('#home .realization-background:not(:first-child)').hide();
            $('#home .carousel-indicators').hide();

        }, 500);
    }


</script>

<!--Lightbox-->


<script>
    // Open the Modal
    function openModal() {
        document.getElementById('myModal').style.display = "block";
    }

    // Close the Modal
    function closeModal() {
        document.getElementById('myModal').style.display = "none";
    }

    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        var captionText = document.getElementById("caption");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        captionText.innerHTML = dots[slideIndex-1].alt;
    }
</script>




<script type="text/javascript">
/* Rozcestník */
    var windowWidth = $(window).width();

    $('.page-container').mousemove(function(event) {

        var moveX = (($(window).width() / 2) -event.pageX) * 0.2;
        $('.page-back').css('margin-left', moveX + 'px');

    });

</script>


</body>
</html>