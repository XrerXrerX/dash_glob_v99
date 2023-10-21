<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto21Group : Gallery l21</title>
    <link rel="canonical" href="https://lotto21group.com/">
    <link rel="icon" href="{{ URL::to('/') }}/front/img/favicon.ico">
    <meta name="description"
        content="Lotto21Group situs pasang bola togel slot casino dan poker terpopuler merupakan agen taruhan online paling terpercaya se asia tenggara. Beroperasi sejak dahulu yaitu tahun 2008 sebagai perusahaan whitelabel di percaya untuk menyediakan website live casino, togel indo, lotere, slot gacor, serta sportbooks">
    <meta name="keywords"
        content="Lotto21group, Lotto21 group, Bonus Lotto21, Promosi Lotto21, Slot Lotto21, Togel Lotto21, Lotto21 Group, Situs Lotto21, Agen Lotto21, Rtp Lotto21, Bo Lotto21, Link Alternatif Lotto21, Login Lotto21, Daftar Lotto21, Deposit Lotto21, Lotto21 Group resmi, Lotto21 Terpercaya">
    <meta name="robots" content="index, follow">
    <meta name="rating" content="general">
    <meta name="geo.region" content="id_ID">
    <meta name="googlebot" content="index,follow">
    <meta name="geo.country" content="id">
    <meta name="language" content="Id-ID">
    <meta name="distribution" content="global">
    <meta name="geo.placename" content="Indonesia">
    <meta name="author" content="Arwanatoto">
    <meta name="publisher" content="Arwanatogel">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="id_ID">
    <meta property="og:locale:alternate" content="en_US">
    <meta property="og:title" content="Lotto21Group Pasang Bola Togel Slot Casino Dan Poker">
    <meta property="og:description"
        content="Lotto21Group situs pasang bola togel slot casino dan poker terpopuler merupakan agen taruhan online paling terpercaya se asia tenggara. Beroperasi sejak dahulu yaitu tahun 2008 sebagai perusahaan whitelabel di percaya untuk menyediakan website live casino, togel indo, lotere, slot gacor, serta sportbooks">
    <meta property="og:url" content="https://lotto21group.com/">
    <meta property="og:site_name" content="Lotto21Group">
    <meta property="og:image:alt" content="Lotto21Group">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css'>

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="{{ URL::to('/') }}/front/style.css">
    <script src="https://cdn.jsdelivr.net/npm/lazysizes@5.2.2/lazysizes.min.js"></script>

</head>

<body>

    @include('front.partial.loaderpage');
    @include('front.partial.navbar');

    <!--start KONTAINER CAROUSEL-->
    <div class="container part2">
        <div class="section gallery1">

            <?php foreach( $row_mediacarousel as $mediacarousel) : ?>

            <!--end KONTAINER CAROUSEL-->
            <?php endforeach; ?>

            <script>
                // carousel
                var carousel = document.querySelector('.carousel');
                var carouselItems = carousel.querySelector('.carousel-items');
                var carouselControls = carousel.querySelector('.carousel-controls');
                var carouselIndicators = carousel.querySelector('.carousel-indicators');
                var carouselControlPrev = carousel.querySelector('.carousel-control.prev');
                var carouselControlNext = carousel.querySelector('.carousel-control.next');
                var carouselIndicatorCount = carouselItems.children.length;
                var currentSlide = 0;
                var interval;

                function goToSlide(n) {
                    currentSlide = (n + carouselIndicatorCount) % carouselIndicatorCount;
                    var translateX = -currentSlide * 100 / carouselIndicatorCount;
                    carouselItems.style.transform = 'translateX(' + translateX + '%)';
                    updateNavigation();
                }

                function updateNavigation() {
                    var carouselIndicators = carousel.querySelectorAll('.carousel-indicator');
                    for (var i = 0; i < carouselIndicators.length; i++) {
                        if (i === currentSlide) {
                            carouselIndicators[i].classList.add('active');
                        } else {
                            carouselIndicators[i].classList.remove('active');
                        }
                    }
                }
                for (var i = 0; i < carouselIndicatorCount; i++) {
                    var carouselIndicator = document.createElement('div');
                    carouselIndicator.classList.add('carousel-indicator');
                    carouselIndicator.addEventListener('click', function(n) {
                        clearInterval(interval);
                        return function() {
                            goToSlide(n);
                            interval = setInterval(function() {
                                goToSlide(currentSlide + 1);
                            }, 5000);
                        };
                    }(i));
                    carouselIndicators.appendChild(carouselIndicator);
                }

                carouselControlPrev.addEventListener('click', function() {
                    clearInterval(interval);
                    goToSlide(currentSlide - 1);
                    interval = setInterval(function() {
                        goToSlide(currentSlide + 1);
                    }, 10000);
                });

                carouselControlNext.addEventListener('click', function() {
                    clearInterval(interval);
                    goToSlide(currentSlide + 1);
                    interval = setInterval(function() {
                        goToSlide(currentSlide + 1);
                    }, 10000);
                });

                interval = setInterval(function() {
                    goToSlide(currentSlide + 1);
                }, 10000);

                // card list
                const prevBtn = document.querySelector('.prevslot');
                const nextBtn = document.querySelector('.nextslot');
                const cardListSlot = document.querySelector('.card__list__slot');

                let index = 0;
                const slotWidth = 110; // width of each slot item including margin-right

                nextBtn.addEventListener('click', () => {
                    if (index < cardListSlot.children.length - 5) {
                        index++;
                        cardListSlot.style.transform = translateX(-$ {
                                slotWidth * index
                            }
                            px);
                    }
                });

                prevBtn.addEventListener('click', () => {
                    if (index > 0) {
                        index--;
                        cardListSlot.style.transform = translateX(-$ {
                                slotWidth * index
                            }
                            px);
                    }
                });
            </script>
            <?php foreach( $row_mediacarousel as $mediacarousel) : ?>
            <!--start MEDIA-->
            <div class="section gallery2">

                <div class="cardmediagroup">

                    <a class="kontengallery" href="#news" onclick="fungsiPertama(event)">
                        <div class="mediacard__item">
                            <img class="lazyload"
                                src="{{ URL::to('/') }}/front/img/media/carousel/card/<?= $mediacarousel['card_news'] ?>"
                                alt="news">
                            <div class="progresmedia">
                                <div class="valuecardmedia">
                                    <span>NEWS</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kontengallery" href="#event" onclick="fungsiPertama(event)">
                        <div class="mediacard__item">
                            <img class="lazyload"
                                src="{{ URL::to('/') }}/front/img/media/carousel/card/<?= $mediacarousel['card_event'] ?>"
                                alt="news">
                            <div class="progresmedia">
                                <div class="valuecardmedia">
                                    <span>EVENT</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kontengallery" href="#stream" onclick="fungsiPertama(event)">
                        <div class="mediacard__item">
                            <img class="lazyload"
                                src="{{ URL::to('/') }}/front/img/media/carousel/card/<?= $mediacarousel['card_stream'] ?>"
                                alt="news">
                            <div class="progresmedia">
                                <div class="valuecardmedia">
                                    <span>STREAM</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kontengallery" href="#panduan" onclick="fungsiPertama(event)">
                        <div class="mediacard__item">
                            <img class="lazyload"
                                src="{{ URL::to('/') }}/front/img/media/carousel/card/<?= $mediacarousel['card_panduan'] ?>"
                                alt="news">
                            <div class="progresmedia">
                                <div class="valuecardmedia">
                                    <span>PANDUAN</span>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a class="kontengallery" href="#gallery" onclick="fungsiPertama(event)">
                        <div class="mediacard__item">
                            <img class="lazyload"
                                src="{{ URL::to('/') }}/front/img/media/carousel/card/<?= $mediacarousel['card_gallery'] ?>"
                                alt="news">
                            <div class="progresmedia">
                                <div class="valuecardmedia">
                                    <span>GALERI</span>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <?php endforeach; ?>

                <div class="isikontengallery" id="isikontengallerysec">

                    <div id="news" class="contentgallery">
                        <h3>NEWS</h3>

                        <!-- start accordion news -->
                        <div id="news-accordion" class="accordion js-accordion news">
                            <?php foreach( $row_news as $news ) : ?>
                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"><?= $news['nama_berita'] ?><sup><i
                                            class='fas fa-calendar-alt'></i><?= $news['tgl_berita'] ?></sup></div>
                                <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                        <p><?= $news['desk_berita'] ?></p>
                                        <div class="footeraccor">
                                            <p>Pastikan anda selalu terhubung dengan kami <i
                                                    class='far fa-face-grin-stars'></i></p>
                                            <div class="medsosacco">
                                                <?php foreach( $row_kontak as $kontak ) : ?>
                                                <a href="https://wa.me/<?= $kontak['whatsapp'] ?>" target="_blank"><i
                                                        class='fab fa-whatsapp'></i></a>
                                                <a href="<?= $kontak['facebook'] ?>" target="_blank"><i
                                                        class='fab fa-facebook'></i></a>
                                                <a href="<?= $kontak['twitter'] ?>" target="_blank"><i
                                                        class='fab fa-twitter'></i></a>
                                                <a href="<?= $kontak['instagram'] ?>" target="_blank"><i
                                                        class='fab fa-instagram'></i></a>
                                                <a href="<?= $kontak['youtube'] ?>" target="_blank"><i
                                                        class='fab fa-youtube'></i></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- end accordion news -->

                        <a class="lhtnews" href="javascript:void(0);"
                            onclick="loadMoreItems('news', '.js-accordion.news', newsOffset);">Load More<i
                                class='fas fa-history'></i></a>

                    </div>

                    <div id="event" class="contentgallery">
                        <h3>EVENT</h3>

                        <!-- start accordion event -->
                        <div class="accordion js-accordion event">
                            <?php foreach( $row_event as $event ) : ?>
                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"><i
                                        class='fas fa-gift'></i><?= $event['nama_event'] ?><sup><i
                                            class='fas fa-calendar-alt'></i><?= $event['durasi_event'] ?></sup></div>
                                <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                        <img class="lazyload"
                                            src="{{ URL::to('/') }}/front/img/media/event/<?= $event['gambar_event'] ?>"
                                            alt="">
                                        <p><?= $event['desk_event'] ?></p>
                                        <div class="footeraccor">
                                            <p>Pastikan anda selalu terhubung dengan kami <i
                                                    class='far fa-face-grin-stars'></i></p>
                                            <div class="medsosacco">
                                                <?php foreach( $row_kontak as $kontak ) : ?>
                                                <a href="https://wa.me/<?= $kontak['whatsapp'] ?>" target="_blank"><i
                                                        class='fab fa-whatsapp'></i></a>
                                                <a href="<?= $kontak['facebook'] ?>" target="_blank"><i
                                                        class='fab fa-facebook'></i></a>
                                                <a href="<?= $kontak['twitter'] ?>" target="_blank"><i
                                                        class='fab fa-twitter'></i></a>
                                                <a href="<?= $kontak['instagram'] ?>" target="_blank"><i
                                                        class='fab fa-instagram'></i></a>
                                                <a href="<?= $kontak['youtube'] ?>" target="_blank"><i
                                                        class='fab fa-youtube'></i></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <!-- end accordion event -->

                        <a class="lhtnews" href="javascript:void(0);"
                            onclick="loadMoreItems('event', '.js-accordion.event', eventOffset);">Load More<i
                                class='fas fa-history'></i></a>

                    </div>

                    <div id="stream" class="contentgallery">
                        <h3>STREAM</h3>

                        <!-- start accordion stream -->
                        <div class="accordion js-accordion">
                            <?php foreach( $row_stream as $stream ) : ?>
                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"><i
                                        class="fas fa-play"></i><?= $stream['strm_nama'] ?><sup><i
                                            class='fab fa-youtube'></i>Live Setiap Hari</sup></div>
                                <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">

                                        <div class="headeraccor">
                                            <p>Tertarik dengan konten kami? Jangan lupa Follow dan Subscribe akun social
                                                media kami ya !! Salam dari <?= $stream['strm_nama'] ?> <i
                                                    class="far fa-face-grin-stars"></i></p>
                                        </div>
                                        <div class="medsosacco stream">
                                            <a href="<?= $stream['strm_tiktok'] ?>" target="_blank"><i
                                                    class="fab fa-tiktok"></i></a>
                                            <a href="<?= $stream['strm_facebook'] ?>" target="_blank"><i
                                                    class="fab fa-facebook"></i></a>
                                            <a href="<?= $stream['strm_instagram'] ?>" target="_blank"><i
                                                    class="fab fa-instagram"></i></a>
                                            <a href="<?= $stream['strm_youtube'] ?>" target="_blank"><i
                                                    class="fab fa-youtube"></i></a>
                                        </div>
                                        <div class="gridstream livestream" id="video-grid">
                                            <?php $video_counter = 0; foreach( $row_livestream as $livestream ) : ?>
                                            <?php if($stream["strm_nama"] == $livestream["nama_live"] && $video_counter < 12) : $video_counter++; ?>
                                            <div class="cardstrean">
                                                <img class="lazyload"
                                                    src="https://i.ytimg.com/vi/<?= $livestream['live_url'] ?>/maxresdefault.jpg"
                                                    alt="">
                                                <marquee><?= $livestream['desk_live'] ?></marquee>
                                                <span data-modal="konten<?= $livestream['id'] ?>"
                                                    class="modal-trigger-rtp"><i class='fab fa-youtube'></i>
                                                    Watch</span>
                                            </div>

                                            <!-- start Modal stream -->
                                            <div class="modal-rtp" id="konten<?= $livestream['id'] ?>">
                                                <div class="modal-sandbox"></div>
                                                <div class="modal-box streammodal">
                                                    <div class="close-modal">&#10006;</div>
                                                    <div class="modal-header-stream">
                                                        <img class="lazyload"
                                                            src="{{ URL::to('/') }}/front/img/media/stream/profile/<?= $stream['strm_foto'] ?>"
                                                            alt="">
                                                        <h4><?= $livestream['nama_live'] ?></h4>
                                                    </div>
                                                    <div class="modal-body-stream">
                                                        <div class="row__content__stream">

                                                            <iframe class="video-youtube lazyload" width="100%"
                                                                src="https://www.youtube.com/embed/<?= $livestream['live_url'] ?>"
                                                                title="YouTube video player" frameborder="0"
                                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                                allowfullscreen></iframe>

                                                        </div>
                                                        <div class="row__tombol tombollogostream">
                                                            <img class="lazyload"
                                                                src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                                                alt="">
                                                            <a href="<?= $stream['webrekomen'] ?>"
                                                                target="_blank"><button
                                                                    style="text-align: left; border-radius: 0 0 0 5px;"
                                                                    class="buttonred btndaftar">DAFTAR</button></a>
                                                            <a href="rtp.php"><button
                                                                    style="text-align: right; border-radius: 0 0 5px 0;"
                                                                    class="buttongreen btnlogin">RTP</button></a>
                                                        </div>
                                                    </div>
                                                    <img class="promotogel21 lazyload"
                                                        src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $stream['bannerup'] ?>"
                                                        alt="">
                                                </div>

                                            </div>
                                            <?php endif; ?>
                                            <?php endforeach; ?>
                                            <!-- end Modal stream -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <!-- end accordion stream -->
                    </div>
                    <div id="panduan" class="contentgallery">
                        <h3>PANDUAN</h3>

                        <!-- start accordion PANDUAN -->
                        <div class="accordion js-accordion panduan">
                            <?php foreach( $row_panduan as $panduan ) : ?>
                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"><i
                                        class="fas fa-play"></i><?= $panduan['panduan_judul'] ?><sup><i
                                            class='fas fa-square-check'></i>Lotto21Group</sup></div>
                                <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                        <video preload="none" class="lazyload" controls
                                            poster="{{ URL::to('/') }}/front/img/media/panduan/poster/<?= $panduan['panduan_gambar'] ?>">
                                            <source
                                                src="{{ URL::to('/') }}/front/img/media/panduan/video/resolusi/1080/<?= $panduan['p1080_panduan'] ?>"
                                                type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                        <p><?= $panduan['panduan_desk'] ?></p>
                                        <div class="footeraccor">
                                            <p>Pastikan anda selalu terhubung dengan kami <i
                                                    class='far fa-face-grin-stars'></i></p>
                                            <div class="medsosacco">
                                                <?php foreach( $row_kontak as $kontak ) : ?>
                                                <a href="https://wa.me/<?= $kontak['whatsapp'] ?>" target="_blank"><i
                                                        class='fab fa-whatsapp'></i></a>
                                                <a href="<?= $kontak['facebook'] ?>" target="_blank"><i
                                                        class='fab fa-facebook'></i></a>
                                                <a href="<?= $kontak['twitter'] ?>" target="_blank"><i
                                                        class='fab fa-twitter'></i></a>
                                                <a href="<?= $kontak['instagram'] ?>" target="_blank"><i
                                                        class='fab fa-instagram'></i></a>
                                                <a href="<?= $kontak['youtube'] ?>" target="_blank"><i
                                                        class='fab fa-youtube'></i></a>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>

                        </div>
                        <!-- end accordion PANDUAN -->

                        <a class="lhtnews" href="javascript:void(0);"
                            onclick="loadMoreItems('panduan', '.js-accordion.panduan', panduanOffset);">Load More<i
                                class='fas fa-history'></i></a>

                    </div>
                    <div id="gallery" class="contentgallery">
                        <h3>GALLERY</h3>

                        <!-- start accordion GALLERY -->
                        <div class="accordion js-accordion">
                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"><i
                                        class='fas fa-photo-film'></i>PHOTO<sup><i
                                            class='fas fa-square-check'></i>Lotto21Group</sup></div>
                                <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                        <div class="headeraccor">
                                            <p>Pastikan anda selalu terhubung dengan kami <i
                                                    class="far fa-face-grin-stars"></i></p>
                                        </div>
                                        <div class="medsosacco stream">
                                            <?php foreach( $row_kontak as $kontak ) : ?>
                                            <a href="https://wa.me/<?= $kontak['whatsapp'] ?>" target="_blank"><i
                                                    class='fab fa-whatsapp'></i></a>
                                            <a href="<?= $kontak['facebook'] ?>" target="_blank"><i
                                                    class='fab fa-facebook'></i></a>
                                            <a href="<?= $kontak['twitter'] ?>" target="_blank"><i
                                                    class='fab fa-twitter'></i></a>
                                            <a href="<?= $kontak['instagram'] ?>" target="_blank"><i
                                                    class='fab fa-instagram'></i></a>
                                            <a href="<?= $kontak['youtube'] ?>" target="_blank"><i
                                                    class='fab fa-youtube'></i></a>
                                            <?php endforeach; ?>
                                        </div>

                                        <div class="gridstream photo">
                                            <?php foreach( $row_galfoto as $galfoto ) : ?>
                                            <div class="cardstrean">
                                                <img class="lazyload"
                                                    data-src="{{ URL::to('/') }}/front/img/media/gallery/foto/<?= $galfoto['foto_url'] ?>"
                                                    alt="<?= $galfoto['nama_foto'] ?>" loading="lazy">
                                                <span data-modal="foto<?= $galfoto['id'] ?>"
                                                    class="modal-trigger-rtp"><i class='fas fa-photo-film'></i> View
                                                    Image</span>
                                            </div>

                                            <!-- start Modal gallery photo -->
                                            <div class="modal-rtp" id="foto<?= $galfoto['id'] ?>">
                                                <div class="modal-sandbox"></div>
                                                <div class="modal-box streammodal">
                                                    <div class="close-modal">&#10006;</div>
                                                    <div class="modal-header-stream">
                                                        <h4>Gallery Photo</h4>
                                                    </div>
                                                    <div class="modal-body-stream">
                                                        <div class="row__content__stream">

                                                            <img class="lazyload"
                                                                src="{{ URL::to('/') }}/front/img/media/gallery/foto/<?= $galfoto['foto_url'] ?>"
                                                                alt="<?= $galfoto['nama_foto'] ?>">

                                                        </div>
                                                        <div class="row__tombol tombollogostream">
                                                            <img class="lazyload"
                                                                src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                                                alt="">
                                                            <?php foreach( $row_kontak as $kontak ) : ?>
                                                            <a href="<?= $kontak['webrekomen'] ?>"
                                                                target="_blank"><button
                                                                    style="text-align: left; border-radius: 0 0 0 5px;"
                                                                    class="buttonred btndaftar">DAFTAR</button></a>
                                                            <a href="<?= $kontak['webrekomen'] ?>"
                                                                target="_blank"><button
                                                                    style="text-align: right; border-radius: 0 0 5px 0;"
                                                                    class="buttongreen btnlogin">LOGIN</button></a>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end Modal gallery photo -->
                                            <?php endforeach; ?>
                                        </div>
                                        <a class="lhtnews" href="javascript:void(0);"
                                            onclick="loadMoreItems('photo', '.gridstream.photo', photoOffset);">Load
                                            More<i class='fas fa-history'></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion__item js-accordion-item">
                                <div class="accordion-header js-accordion-header"><i
                                        class='fas fa-video'></i>VIDEO<sup><i
                                            class='fas fa-square-check'></i>Lotto21Group</sup></div>
                                <div class="accordion-body js-accordion-body">
                                    <div class="accordion-body__contents">
                                        <div class="headeraccor">
                                            <p>Pastikan anda selalu terhubung dengan kami <i
                                                    class="far fa-face-grin-stars"></i></p>
                                        </div>
                                        <div class="medsosacco stream">
                                            <?php foreach( $row_kontak as $kontak ) : ?>
                                            <a href="https://wa.me/<?= $kontak['whatsapp'] ?>" target="_blank"><i
                                                    class='fab fa-whatsapp'></i></a>
                                            <a href="<?= $kontak['facebook'] ?>" target="_blank"><i
                                                    class='fab fa-facebook'></i></a>
                                            <a href="<?= $kontak['twitter'] ?>" target="_blank"><i
                                                    class='fab fa-twitter'></i></a>
                                            <a href="<?= $kontak['instagram'] ?>" target="_blank"><i
                                                    class='fab fa-instagram'></i></a>
                                            <a href="<?= $kontak['youtube'] ?>" target="_blank"><i
                                                    class='fab fa-youtube'></i></a>
                                            <?php endforeach; ?>
                                        </div>

                                        <div class="gridstream video">
                                            <?php foreach( $row_galvideo as $galvideo ) : ?>
                                            <div class="cardstrean">
                                                <img class="lazyload"
                                                    src="{{ URL::to('/') }}/front/img/media/gallery/video/poster/<?= $galvideo['thumb_video'] ?>"
                                                    alt="<?= $galvideo['nama_video'] ?>">
                                                <span data-modal="video<?= $galvideo['id'] ?>"
                                                    class="modal-trigger-rtp"
                                                    data-video-src="{{ URL::to('/') }}/front/img/media/gallery/video/video/<?= $galvideo['p1080_video'] ?>"><i
                                                        class='fas fa-video'></i> Watch Video</span>
                                            </div>

                                            <!-- start Modal gallery video -->
                                            <div class="modal-rtp" id="video<?= $galvideo['id'] ?>">
                                                <div class="modal-sandbox"></div>
                                                <div class="modal-box streammodal">
                                                    <div class="close-modal">&#10006;</div>
                                                    <div class="modal-header-stream">
                                                        <h4>Gallery Video</h4>
                                                    </div>
                                                    <div class="modal-body-stream">
                                                        <div class="row__content__stream">

                                                            <video preload="none" class="video-html5 lazyload"
                                                                controls
                                                                poster="{{ URL::to('/') }}/front/img/media/gallery/video/poster/<?= $galvideo['thumb_video'] ?>">
                                                            </video>

                                                        </div>
                                                        <div class="row__tombol tombollogostream">
                                                            <img class="lazyload"
                                                                src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                                                alt="">
                                                            <?php foreach( $row_kontak as $kontak ) : ?>
                                                            <a href="<?= $kontak['webrekomen'] ?>"
                                                                target="_blank"><button
                                                                    style="text-align: left; border-radius: 0 0 0 5px;"
                                                                    class="buttonred btndaftar">DAFTAR</button></a>
                                                            <a href="<?= $kontak['webrekomen'] ?>"
                                                                target="_blank"><button
                                                                    style="text-align: right; border-radius: 0 0 5px 0;"
                                                                    class="buttongreen btnlogin">LOGIN</button></a>
                                                            <?php endforeach; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Modal gallery video -->
                                            <?php endforeach; ?>

                                        </div>
                                        <a class="lhtnews" href="javascript:void(0);"
                                            onclick="loadMoreItems('video', '.gridstream.video', videoOffset);">Load
                                            More<i class='fas fa-history'></i></a>

                                    </div>
                                </div>
                            </div>



                        </div>
                        <!-- end accordion GALLERY -->

                    </div>

                </div>

            </div>
            <!--end MEDIA-->


        </div>

        <script src="https://www.youtube.com/iframe_api"></script>
        <script>
            // Show the modal
            function showModal() {
                modal.classList.add('fade-in');
            }

            $(".modal-trigger-rtp").click(function(e) {
                e.preventDefault();
                dataModal = $(this).attr("data-modal");
                var videoId = $(this).attr("data-video-id"); // Ambil ID video dari atribut data-video-id
                $("#" + dataModal).css({
                    "display": "flex"
                });

                var youtubeIframe = $("#" + dataModal).find(".video-youtube");
                if (youtubeIframe.length > 0 && videoId) {
                    youtubeIframe.attr("src", "https://www.youtube.com/embed/" +
                        videoId); // Atur ulang atribut src iframe dengan ID video yang sesuai
                }

                var html5Video = $("#" + dataModal).find(".video-html5");
                if (html5Video.length > 0) {
                    html5Video[0].load(); // Muat ulang video HTML5 saat modal dibuka
                }
            });


            $(".close-modal, .modal-sandbox").click(function() {
                var modal = $(this).closest(".modal-rtp");
                modal.css({
                    "display": "none"
                });

                var youtubeIframe = modal.find(".video-youtube");
                if (youtubeIframe.length > 0) {
                    youtubeIframe.attr("src", ""); // Hapus atribut src iframe (untuk video YouTube)
                }

                var html5Video = modal.find(".video-html5");
                if (html5Video.length > 0) {
                    html5Video[0].pause(); // Hentikan video HTML5 saat modal ditutup
                }
            });
        </script>

        @include ('front.partial.footer');

        <script>
            window.lazySizesConfig = window.lazySizesConfig || {};
            window.lazySizesConfig.loadHidden = false; // memuat elemen bahkan jika tidak terlihat di viewport
            window.lazySizesConfig.expFactor = 3000; // memuat elemen dua kali ukuran viewport
        </script>
        <!-- <script src="lazysizes.min.js"></script> -->
        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>

        <script>
            var accordion = (function() {
                var $accordion = $(".js-accordion");
                var $accordion_header = $accordion.find(".js-accordion-header");
                var $accordion_item = $(".js-accordion-item");

                var settings = {
                    speed: 400,
                    oneOpen: false,
                };

                return {
                    init: function($settings) {
                        $accordion_header.on("click", function() {
                            accordion.toggle($(this));
                        });

                        $.extend(settings, $settings);

                        if (
                            settings.oneOpen &&
                            $(".js-accordion-item.active").length > 1
                        ) {
                            $(".js-accordion-item.active:not(:first)").removeClass("active");
                        }

                        $(".js-accordion-item.active")
                            .find("> .js-accordion-body")
                            .show();
                    },
                    toggle: function($this) {
                        var $previousActiveItem = $this.closest(".js-accordion").find(
                            "> .js-accordion-item.active");
                        var $previousActiveVideo = $previousActiveItem.find("video");
                        if ($previousActiveVideo.length > 0) {
                            $previousActiveVideo.each(function() {
                                this.pause(); // Hentikan video saat item tidak lagi aktif
                                this.currentTime = 0; // Setel ulang waktu video menjadi 0
                            });
                        }

                        if (
                            settings.oneOpen &&
                            $this[0] !=
                            $this
                            .closest(".js-accordion")
                            .find("> .js-accordion-item.active > .js-accordion-header")[0]
                        ) {
                            $this
                                .closest(".js-accordion")
                                .find("> .js-accordion-item")
                                .removeClass("active")
                                .find(".js-accordion-body")
                                .slideUp();
                        }
                        $this.closest(".js-accordion-item").toggleClass("active");
                        $this.next().stop().slideToggle(settings.speed);
                    },

                };
            })();

            var newsOffset = 10;
            var eventOffset = 10;
            var panduanOffset = 10;
            var photoOffset = 12;
            var videoOffset = 12;
            var livestreamOffset = 12;

            function loadMoreItems(itemType, containerSelector, offset, streamName) {
                $.ajax({
                    url: "load_more_items.php",
                    type: "GET",
                    data: {
                        type: itemType,
                        offset: offset,
                        stream_name: streamName
                    },
                    success: function(response) {
                        // Tambahkan item ke accordion
                        var $newItems = $(response);
                        $(containerSelector).append($newItems);

                        // Update offset
                        if (itemType === 'news') {
                            newsOffset += 6;
                        }
                        if (itemType === 'event') {
                            eventOffset += 6;
                        }
                        if (itemType === 'panduan') {
                            panduanOffset += 6;
                        }
                        if (itemType === 'photo') {
                            photoOffset += 6;
                        }
                        if (itemType === 'video') {
                            videoOffset += 6;
                        }
                        if (itemType === 'livestream') {
                            livestreamOffset += 6;
                        }

                        // Aktifkan accordion untuk item baru
                        $newItems.find(".js-accordion-header").on("click", function() {
                            accordion.toggle($(this));
                        });

                    },
                    error: function() {
                        alert("Terjadi kesalahan saat memuat data. Silakan coba lagi.");
                    },
                });
            }

            $(document).on("click", ".close-modal, .modal-sandbox", function() {
                var modal = $(this).closest(".modal-rtp");
                modal.css({
                    "display": "none"
                });

                var youtubeIframe = modal.find(".video-youtube");
                if (youtubeIframe.length > 0) {
                    youtubeIframe.attr("src", ""); // Hapus atribut src iframe (untuk video YouTube)
                }

                var html5Video = modal.find(".video-html5");
                if (html5Video.length > 0) {
                    html5Video.each(function() {
                        this.pause(); // Hentikan video HTML5 saat modal ditutup
                        this.currentTime = 0; // Setel ulang waktu video menjadi 0
                        $(this).attr("src", ""); // Hapus atribut src video HTML5
                    });
                }
            });

            $(document).ready(function() {
                accordion.init({
                    speed: 300,
                    oneOpen: true
                });

                // Event listener for opening the modal
                $(document).on("click", ".modal-trigger-rtp", function(e) {
                    e.preventDefault();
                    dataModal = $(this).attr("data-modal");
                    var videoId = $(this).attr("data-video-id");
                    $("#" + dataModal).css({
                        "display": "flex"
                    });

                    var youtubeIframe = $("#" + dataModal).find(".video-youtube");
                    if (youtubeIframe.length > 0 && videoId) {
                        youtubeIframe.attr("src", "https://www.youtube.com/embed/" + videoId);
                    }

                    var html5Video = $("#" + dataModal).find(".video-html5");
                    if (html5Video.length > 0) {
                        var videoSrc = $(this).attr(
                            "data-video-src"); // Ambil atribut data-video-src untuk video HTML5
                        html5Video.attr("src", videoSrc); // Atur atribut src untuk video HTML5
                        html5Video[0].load();
                    }
                });
            });
        </script>

        <script>
            // Ambil semua link dengan kelas "kontengallery"
            const links = document.querySelectorAll('.kontengallery');
            // Loop melalui setiap link dan tambahkan event listener "click"
            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Cegah tindakan default dari link
                    e.preventDefault();

                    // Ambil ID konten yang sesuai dari atribut "href" pada link
                    const contentID = this.getAttribute('href').substring(1);

                    // Ambil semua konten dengan kelas "content"
                    const contents = document.querySelectorAll('.contentgallery');

                    // Loop melalui setiap konten
                    contents.forEach(content => {
                        // Jika ID konten sesuai dengan ID konten yang dipilih, tampilkan konten tersebut
                        if (content.getAttribute('id') === contentID) {
                            content.style.display = 'block';
                        }
                        // Jika tidak, sembunyikan konten tersebut
                        else {
                            content.style.display = 'none';
                        }
                    });
                });
            });
        </script>
        <script>
            function fungsiPertama(event) {
                event.preventDefault(); // Mencegah link untuk mengarahkan pengguna ke #news secara langsung
                window.location.href = "#isikontengallerysec"; // Mengarahkan pengguna ke bagian dengan ID isikontengallerysec
                window.location.href += event.target.getAttribute('href'); // Menambahkan #news ke akhir URL
            }
        </script>

</body>

</html>
