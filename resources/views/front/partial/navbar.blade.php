<script>
    $(document).ready(function() {

        $('.toggle-nav').css('cursor', 'pointer').click(function() {

            $('.main-nav-nav ul').slideToggle();

        });

        $(window).resize(function() {

            var width = $(document).width();

            if (width > 768) {

                $('.main-nav-nav ul').css('display', 'none');

            }

            if (width <= 768) {

                $('.main-nav-nav ul').css('display', 'none');

            }

        });

    });
</script>

<!--start navigasi-->
<div class="headnavi">
    <nav class="main-nav">
        <ul>
            <li><a href="/rtp">RTP</a></li>
            <li><a id='menupaito' href="/paito">Paito</a></li>
            <li><a href="/tototools">Toto Tools</a></li>
        </ul>

        <div class="logo">
            <a href="/"><img src="{{ URL::to('/') }}/front/img/l21-logo-1.png" alt=""></a>
            <div class="toggle-nav"><i class="fas fa-bars"></i></div>
        </div>

        <ul>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

    <nav class="main-nav-nav">
        <div class="logo">
            <a href="/"><img src="{{ URL::to('/') }}/front/img/l21-logo-1.png" alt=""></a>
            <div class="toggle-nav"><i class="fas fa-bars"></i></div>
        </div>
        <ul style="display: none;">
            <li><a href="/rtp">RTP</a></li>
            <li><a href="/paito">Paito</a></li>
            <li><a href="/tototools">Toto Tools</a></li>
            <li><a href="/gallery">Gallery</a></li>
            <li><a href="/about">About Us</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </nav>

</div>

<div class="bayangannav">
    <div class="shadownavleft"></div>
    <div class="shadownavright"></div>
</div>
<!--start navigasi-->
