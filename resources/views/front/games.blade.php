<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto21Group : Games l21</title>
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

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="{{ URL::to('/') }}/front/style.css">

</head>

<body>

    @include('front.partial.loaderpage');
    @include('front.partial.navbar');

    {{-- $datakontak = mysqli_query($koneksi, 'SELECT * FROM kontakl21');
    $row_kontak = [];
    while ($row_kont = mysqli_fetch_assoc($datakontak)) {
    $row_kontak[] = $row_kont;
    } --}}

    <!--start KONTAINER UTAMA-->
    <div class="container part2">
        <div class="section gamess">
            <div class="bodykonten">
                <div class="pagibuttonpage">
                    <button id="button1" class="buttongames active">TOGEL</button>
                    <button id="button2" class="buttongames">SLOT</button>
                    <button id="button3" class="buttongames">LIVE GAMES</button>
                    <button id="button4" class="buttongames">TABLE GAMES</button>
                    <button id="button5" class="buttongames">SPORT GAMES</button>
                    <button id="button6" class="buttongames">FISHING</button>
                </div>

                <div class="isiisikonten">

                    <div id="container1" class="content-container">
                        <div class="dedes">
                            <div class="detailkntn">
                                <img src="{{ url::to('/') }}/front/img/game/logo/togel-logo.png" alt="">
                                <p>Get your biggest jackpot when playing fishing games with LOTTO21GROUP.</p>
                                <?php foreach( $row_kontak as $kontak ) : ?>
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                                    <?php endforeach; ?><span class="buttongreen">Play Now</span></a>
                            </div>
                        </div>
                        <img class="bannerdedes" src="{{ url::to('/') }}/front/img/game/banner/togel.png"
                            alt="">
                    </div>
                    <div id="container2" class="content-container hidden">
                        <div class="dedes">
                            <div class="detailkntn">
                                <img src="{{ url::to('/') }}/front/img/game/logo/slot-logo.png" alt="">
                                <p>Play all slot game providers and get your biggest win with us LOTTO21GROUP.</p>
                                <?php foreach( $row_kontak as $kontak ) : ?>
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                                    <?php endforeach; ?><span class="buttongreen">Play Now</span></a>
                            </div>
                        </div>
                        <img class="bannerdedes" src="{{ url::to('/') }}/front/img/game/banner/slot.png"
                            alt="">
                    </div>
                    <div id="container3" class="content-container hidden">
                        <div class="dedes">
                            <div class="detailkntn">
                                <img src="{{ url::to('/') }}/front/img/game/logo/livegames-logo.png" alt="">
                                <p>Enjoy the convenience of playing Live games with us LOTTO21GROUP.</p>
                                <?php foreach( $row_kontak as $kontak ) : ?>
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                                    <?php endforeach; ?><span class="buttongreen">Play Now</span></a>
                            </div>
                        </div>
                        <img class="bannerdedes" src="{{ url::to('/') }}/front/img/game/banner/livegames.png"
                            alt="">
                    </div>
                    <div id="container4" class="content-container hidden">
                        <div class="dedes">
                            <div class="detailkntn">
                                <img src="{{ url::to('/') }}/front/img/game/logo/tablegames-logo.png" alt="">
                                <p>The most complete table games are here and grab your chance to win right now with
                                    LOTTO21GROUP.</p>
                                <?php foreach( $row_kontak as $kontak ) : ?>
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                                    <?php endforeach; ?><span class="buttongreen">Play Now</span></a>
                            </div>
                        </div>
                        <img class="bannerdedes" src="{{ url::to('/') }}/front/img/game/banner/tablegames.png"
                            alt="">
                    </div>
                    <div id="container5" class="content-container hidden">
                        <div class="dedes">
                            <div class="detailkntn">
                                <img src="{{ url::to('/') }}/front/img/game/logo/sportgames-logo.png"
                                    alt="">
                                <p>Various types of sports betting are here. Support your favorite team now and win now
                                    with LOTTO21GROUP.</p>
                                <?php foreach( $row_kontak as $kontak ) : ?>
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                                    <?php endforeach; ?><span class="buttongreen">Play Now</span></a>
                            </div>
                        </div>
                        <img class="bannerdedes" src="{{ url::to('/') }}/front/img/game/banner/sportgames.png"
                            alt="">
                    </div>
                    <div id="container6" class="content-container hidden">
                        <div class="dedes">
                            <div class="detailkntn">
                                <img src="{{ url::to('/') }}/front/img/game/logo/fishinggames-logo.png"
                                    alt="">
                                <p>Get your biggest jackpot when playing fishing games with LOTTO21GROUP.</p>
                                <?php foreach( $row_kontak as $kontak ) : ?>
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                                    <?php endforeach; ?><span class="buttongreen">Play Now</span></a>
                            </div>
                        </div>
                        <img class="bannerdedes" src="{{ url::to('/') }}/front/img/game/banner/fishinggames.png"
                            alt="">
                    </div>

                </div>

            </div>
        </div>

    </div>

    @include('front.partial.footer', $row_kontak);

    <script>
        const buttons = document.querySelectorAll('button');
        const containers = document.querySelectorAll('.content-container');

        for (let i = 0; i < buttons.length; i++) {
            buttons[i].addEventListener('click', () => {
                for (let j = 0; j < containers.length; j++) {
                    containers[j].classList.add('hidden');
                    buttons[j].classList.remove('active');
                }
                containers[i].classList.remove('hidden');
                buttons[i].classList.add('active');

                // Simpan href pada localStorage
                const href = buttons[i].getAttribute('href');
                localStorage.setItem('activeHref', href);
            });
        }

        // Cari button yang aktif berdasarkan nilai href dari localStorage
        const activeHref = localStorage.getItem('activeHref');
        if (activeHref) {
            const activeButton = document.querySelector(`button[href="${activeHref}"]`);
            if (activeButton) {
                activeButton.click();
            }
        }
    </script>


    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src="{{ URL::to('/') }}/front/script.js"></script>
    <script>
        const counters = document.querySelectorAll('.progress-counter');

        function startCounter(counter) {
            const target = parseInt(counter.dataset.target);
            let count = 0;
            const interval = setInterval(() => {
                counter.innerText = count + '%';
                count++;
                if (count > target) {
                    clearInterval(interval);
                    counter.innerText = target + '%';
                }
            }, 10);
        }

        counters.forEach(counter => {
            startCounter(counter);
        });
    </script>
</body>

</html>
