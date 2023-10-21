<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lotto21top : Demo l21</title>
    <link rel="canonical" href="https://lotto21top.com/">
    <link rel="icon" href="{{ URL::to('/') }}/img/favicon.ico">
    <meta name="description"
        content="lotto21top situs pasang bola togel slot casino dan poker terpopuler merupakan agen taruhan online paling terpercaya se asia tenggara. Beroperasi sejak dahulu yaitu tahun 2008 sebagai perusahaan whitelabel di percaya untuk menyediakan website live casino, togel indo, lotere, slot gacor, serta sportbooks">
    <meta name="keywords"
        content="lotto21top, Lotto21 group, Bonus Lotto21, Promosi Lotto21, Slot Lotto21, Togel Lotto21, Lotto21 Group, Situs Lotto21, Agen Lotto21, Rtp Lotto21, Bo Lotto21, Link Alternatif Lotto21, Login Lotto21, Daftar Lotto21, Deposit Lotto21, Lotto21 Group resmi, Lotto21 Terpercaya">
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
    <meta property="og:title" content="lotto21top Pasang Bola Togel Slot Casino Dan Poker">
    <meta property="og:description"
        content="lotto21top situs pasang bola togel slot casino dan poker terpopuler merupakan agen taruhan online paling terpercaya se asia tenggara. Beroperasi sejak dahulu yaitu tahun 2008 sebagai perusahaan whitelabel di percaya untuk menyediakan website live casino, togel indo, lotere, slot gacor, serta sportbooks">
    <meta property="og:url" content="https://lotto21top.com/">
    <meta property="og:site_name" content="lotto21top">
    <meta property="og:image:alt" content="lotto21top">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="{{ asset('front/style.css') }}">

</head>

<body>
    @include('front.partial.loaderpage');
    @include('front.partial.navbar');

    <!--start KONTAINER UTAMA-->
    <div class="container part2">
        <div class="section putardemo">
            <div class="gamedemo">
                <div class="namagamedemo">
                    <h3><?php echo $datagetdemo[0]['nama_game']; ?></h3>
                    <p class="namaprov"><?php echo $datagetdemo[0]['provider']; ?></p>
                </div>
                <div class="layardemo">
                    <iframe class="framedemo" src="<?php echo $datagetdemo[0]['link_demo']; ?>" frameborder="0" scrolling="no"></iframe>
                </div>
                <div class="demotidakada">
                    <div class="boxdemotdk">
                        <img class="gambardemokosong"
                            src="{{ URL::to('/') }}/front/img/game/slot/hb/<?php echo $datagetdemo[0]['nama_file']; ?>" alt="">
                        <p>Maaf, Demo tidak tersedia pada game ini. Silahkan klik <span class="mnskrg">" <i
                                    class='fas fa-play'></i> PLAY "</span> untuk bermain game slot <?php echo $datagetdemo[0]['nama_game']; ?>
                            pada provider <?php echo $datagetdemo[0]['provider']; ?></p>
                    </div>
                </div>
                <div class="grubtmbldemo">
                    <a href="rtp.php">
                        <div class="buttonrtpbb green">
                            <img class="btngmbr1" src="{{ URL::to('/') }}/img/slot-machine-l21.png" alt="">
                            <div class="skemabtn1"></div>
                            <p class="textbtn1">RTP SLOT</p>
                        </div>
                    </a>
                    <?php foreach ($row_kontak as $kontak) : ?>
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank">
                        <div class="buttonrtpbb red">
                            <p class="textbtn3"><i class='fas fa-play'></i> PLAY</p>
                        </div>
                    </a>
                    <?php endforeach; ?>
                    <a href="promo.php">
                        <div class="buttonrtpbb green">
                            <p class="textbtn2">NEW PROMO</p>
                            <img class="btngmbr2" src="{{ URL::to('/') }}/img/kado-promosi.png" alt="">
                            <div class="skemabtn2"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="section rekomendasigrup">
            <div class="gameterkait <?php echo $datagetdemo[0]['provider']; ?>">
                <h4>Rekomendasi Game terkait Dengan <span class="gameini1"><?php echo $datagetdemo[0]['nama_game']; ?></span></h4>

                <div class="grubgameterkait pragmaticplay">
                    <?php foreach ($row_pragmatic as $pragmatic) : ?>
                    <?php foreach ($row_kontak as $kontak) : ?>
                    <div class="game__item game__promo" data-id="<?= $pragmatic['id'] ?>">
                        <div class="kurungload">
                            <div class="loading-spinner"></div>
                        </div>
                        <img class="gambargamenya"
                            src="{{ URL::to('/') }}/img/game/slot/pp/<?= $pragmatic['nama_file'] ?>"
                            alt="<?= $pragmatic['nama_game'] ?>">

                        <img src="{{ URL::to('/') }}/img/provider/<?= $pragmatic['provider'] ?>-l21.png"
                            alt="">
                    </div>
                    <div class="game__hot">
                        <span>HOT!!!</span>
                    </div>
                    <div class="progress">
                        <div class="progress-value" data-progress="87%" style="--progress-width: 87%;">
                            <span class="progress-counter" data-target="87%"></span>
                        </div>
                    </div>
                    <div class="lihatpola">
                        <h5 style="text-transform: capitalize;"><?= $pragmatic['nama_game'] ?></h5>
                        <button data-modal="modal-<?= $pragmatic['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $pragmatic['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $pragmatic['nama_game'] ?>
                                <span class="detprovider">Pragmatic Play</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/img/provider/<?= $pragmatic['provider'] ?>-l21.png"
                                alt="">
                        </div>
                        <div class="modal-body-rtp timer-container">
                            <div class="row__content__1">
                                <div>
                                    <span>Min - Max Bet</span>
                                    <span>Jam Gacor</span>
                                    <span>Sisa Waktu Gacor</span>
                                </div>
                                <div>
                                    <span>: <?= $pragmatic['stake_bet'] ?></span>
                                    <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                                    <span>: <span class="tm3 countsisawaktu"></span></span>
                                </div>
                            </div>
                            <div class="row__content__2">
                                <span>POLA KHUSUS</span>
                            </div>
                            <div class="row__content__3 <?= $pragmatic['tipe_game'] ?>">
                                <div>
                                    <b>Step 1: Panaskan Mesin Slot!</b>
                                    <span>Manual <span class="spinn1"></span>x</span>
                                </div>
                                <div>
                                    <b>Step 2: Acak Pola!</b>
                                    <span>Auto <span class="spinn2"></span>x <span class="dchange1"></span> (<span
                                            class="polaa1"></span>) <i class='fas fa-circle-info pla1'></i></span>
                                </div>
                                <div>
                                    <b>Step 3: Naikkan Bet!</b>
                                    <span>Auto <span class="spinn3"></span>x <span class="dchange2"></span> (<span
                                            class="polaa2"></span>) <i class='fas fa-circle-info pla2'></i></span>
                                </div>
                                <div>
                                    <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                                    <span>Manual <span class="spinn4"></span>x</span>
                                </div>
                                <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="demo.php?demo=<?= $pragmatic['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>
            </div>

            <div class="grubgameterkait jokergaming">
                <?php foreach ($row_joker as $joker) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $joker['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/jk/<?= $joker['nama_file'] ?>"
                        alt="<?= $joker['nama_game'] ?>">
                    ../front/img/
                    <img src="{{ URL::to('/') }}/img/provider/<?= $joker['provider'] ?>-l21.png" alt="">
                </div>
                <div class="game__hot">
                    <span>HOT!!!</span>
                </div>
                <div class="progress">
                    <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                        <span class="progress-counter" data-target="93%">93%</span>
                    </div>
                </div>
                <div class="lihatpola">
                    <h5><?= $joker['nama_game'] ?></h5>
                    <button data-modal="modal-<?= $joker['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
                </div>
            </div>

            <!-- start Modal -->
            <div class="modal-rtp" id="modal-<?= $joker['id'] ?>">
                <div class="modal-sandbox"></div>
                <div class="modal-box">
                    <div class="close-modal">&#10006;</div>
                    <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
                    <div class="modal-header-rtp">
                        <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                        <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                        <h1 style="text-transform: capitalize;"><?= $joker['nama_game'] ?>
                            <span class="detprovider">Joker Gaming</span>
                        </h1>
                        <span>Tips Bermain Slot</span>
                        <img class="llprovider"
                            src="{{ URL::to('/') }}/img/provider/<?= $joker['provider'] ?>-l21.png" alt="">
                    </div>
                    <div class="modal-body-rtp">
                        <div class="row__content__1 timer-container">
                            <div>
                                <span>Min - Max Bet</span>
                                <span>Jam Gacor</span>
                                <span>Sisa Waktu Gacor</span>
                            </div>
                            <div>
                                <span>: <?= $joker['stake_bet'] ?></span>
                                <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                                <span>: <span class="tm3 countsisawaktu"></span></span>
                            </div>
                        </div>
                        <div class="row__content__2">
                            <span>POLA KHUSUS</span>
                        </div>
                        <div class="row__content__3 <?= $joker['tipe_game'] ?>">
                            <div>
                                <b>Step 1: Panaskan Mesin Slot!</b>
                                <span>Manual <span class="spinn5"></span>x</span>
                            </div>
                            <div>
                                <b>Step 2: Acak Pola!</b>
                                <span>Auto <span class="spinn6"></span>x <span class="dturbo1"></span> <i
                                        class='fas fa-circle-info pla1'></i></span>
                            </div>
                            <div>
                                <b>Step 3: Naikkan Bet!</b>
                                <span>Auto <span class="spinn7"></span>x <span class="dturbo2"></span> <i
                                        class='fas fa-circle-info pla2'></i></span>
                            </div>
                            <div>
                                <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                                <span>Manual <span class="spinn8"></span>x</span>
                            </div>
                            <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                        </div>
                        <div class="row__content__2" style="background-color: #0b0b0b;">
                            <p>Lakukan Tips Dari Awal & Ulangi</p>
                        </div>
                        <div class="row__tombol">
                            <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                    style="text-align: left; border-radius: 0 0 0 5px;"
                                    class="buttonred btndaftar">DAFTAR</button></a>
                            <a href="demo.php?demo=<?= $joker['id'] ?>"><button
                                    style="text-align: right; border-radius: 0 0 5px 0;"
                                    class="buttongreen btnlogin">DEMO</button></a>
                        </div>
                    </div>
                    <div id="popup">
                        <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                            alt="">
                    </div>
                </div>
            </div>
            <!-- end Modal -->
            <?php endforeach; ?>
            <?php endforeach; ?>
        </div>

        <div class="grubgameterkait habanero">
            <?php foreach ($row_habanero as $habanero) : ?>
            <?php foreach ($row_kontak as $kontak) : ?>
            <div class="game__item game__promo" data-id="<?= $habanero['id'] ?>">
                <div class="kurungload">
                    <div class="loading-spinner"></div>
                </div>
                <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/hb/<?= $habanero['nama_file'] ?>"
                    alt="<?= $habanero['nama_game'] ?>">
                ../front/img/
                <img src="{{ URL::to('/') }}/img/provider/<?= $habanero['provider'] ?>-l21.png" alt="">
            </div>
            <div class="game__hot">
                <span>HOT!!!</span>
            </div>
            <div class="progress">
                <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                    <span class="progress-counter" data-target="93%">93%</span>
                </div>
            </div>
            <div class="lihatpola">
                <h5><?= $habanero['nama_game'] ?></h5>
                <button data-modal="modal-<?= $habanero['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
            </div>
        </div>

        <!-- start Modal -->
        <div class="modal-rtp" id="modal-<?= $habanero['id'] ?>">
            <div class="modal-sandbox"></div>
            <div class="modal-box">
                <div class="close-modal">&#10006;</div>
                <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
                <div class="modal-header-rtp">
                    <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                    <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                    <h1 style="text-transform: capitalize;"><?= $habanero['nama_game'] ?>
                        <span class="detprovider">Habanero</span>
                    </h1>
                    <span>Tips Bermain Slot</span>
                    <img class="llprovider"
                        src="{{ URL::to('/') }}/img/provider/<?= $habanero['provider'] ?>-l21.png" alt="">
                </div>
                <div class="modal-body-rtp">
                    <div class="row__content__1 timer-container">
                        <div>
                            <span>Min - Max Bet</span>
                            <span>Jam Gacor</span>
                            <span>Sisa Waktu Gacor</span>
                        </div>
                        <div>
                            <span>: <?= $habanero['stake_bet'] ?></span>
                            <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                            <span>: <span class="tm3 countsisawaktu"></span></span>
                        </div>
                    </div>
                    <div class="row__content__2">
                        <span>POLA KHUSUS</span>
                    </div>
                    <div class="row__content__3 <?= $habanero['tipe_game'] ?>">
                        <div>
                            <b>Step 1: Panaskan Mesin Slot!</b>
                            <span>Manual <span class="spinn5"></span>x</span>
                        </div>
                        <div>
                            <b>Step 2: Acak Pola!</b>
                            <span>Auto <span class="spinn9"></span>x</span>
                        </div>
                        <div>
                            <b>Step 3: Naikkan Bet!</b>
                            <span>Auto <span class="spinn10"></span>x</span>
                        </div>
                        <div>
                            <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                            <span>Manual <span class="spinn8"></span>x</span>
                        </div>
                        <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                    </div>
                    <div class="row__content__2" style="background-color: #0b0b0b;">
                        <p>Lakukan Tips Dari Awal & Ulangi</p>
                    </div>
                    <div class="row__tombol">
                        <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                style="text-align: left; border-radius: 0 0 0 5px;"
                                class="buttonred btndaftar">DAFTAR</button></a>
                        <a href="demo.php?demo=<?= $habanero['id'] ?>"><button
                                style="text-align: right; border-radius: 0 0 5px 0;"
                                class="buttongreen btnlogin">DEMO</button></a>
                    </div>
                </div>
                <div id="popup">
                    <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
                </div>
            </div>
        </div>
        <!-- end Modal -->
        <?php endforeach; ?>
        <?php endforeach; ?>
    </div>

    <div class="grubgameterkait microgaming">
        <?php foreach ($row_microgaming as $microgaming) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $microgaming['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/mc/<?= $microgaming['nama_file'] ?>"
                alt="<?= $microgaming['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $microgaming['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $microgaming['nama_game'] ?></h5>
            <button data-modal="modal-<?= $microgaming['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $microgaming['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $microgaming['nama_game'] ?>
                    <span class="detprovider">Microgaming</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider"
                    src="{{ URL::to('/') }}/img/provider/<?= $microgaming['provider'] ?>-l21.png" alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $microgaming['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $microgaming['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn11"></span>x <span class="pcepat1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn12"></span>x <span class="pcepat2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $microgaming['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait relaxgaming">
        <?php foreach ($row_relaxgaming as $relaxgaming) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $relaxgaming['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/rg/<?= $relaxgaming['nama_file'] ?>"
                alt="<?= $relaxgaming['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $relaxgaming['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $relaxgaming['nama_game'] ?></h5>
            <button data-modal="modal-<?= $relaxgaming['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $relaxgaming['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $relaxgaming['nama_game'] ?>
                    <span class="detprovider">Relax Gaming</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider"
                    src="{{ URL::to('/') }}/img/provider/<?= $relaxgaming['provider'] ?>-l21.png" alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $relaxgaming['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $relaxgaming['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn13"></span>x <span class="rgmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn14"></span>x <span class="rgmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $relaxgaming['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait playngo">
        <?php foreach ($row_playngo as $playngo) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $playngo['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/plg/<?= $playngo['nama_file'] ?>"
                alt="<?= $playngo['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $playngo['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $playngo['nama_game'] ?></h5>
            <button data-modal="modal-<?= $playngo['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $playngo['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $playngo['nama_game'] ?>
                    <span class="detprovider">PLay n Go</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $playngo['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $playngo['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $playngo['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn15"></span>x <span class="plgmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn16"></span>x <span class="plgmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $playngo['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait playtech">
        <?php foreach ($row_playtech as $playtech) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $playtech['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/plt/<?= $playtech['nama_file'] ?>"
                alt="<?= $playtech['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $playtech['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $playtech['nama_game'] ?></h5>
            <button data-modal="modal-<?= $playtech['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $playtech['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $playtech['nama_game'] ?>
                    <span class="detprovider">PLaytech</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $playtech['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $playtech['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $playtech['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn17"></span>x <span class="pltmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn18"></span>x <span class="pltmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $playtech['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait spadegaming">
        <?php foreach ($row_spadegaming as $spadegaming) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $spadegaming['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/sg/<?= $spadegaming['nama_file'] ?>"
                alt="<?= $spadegaming['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $spadegaming['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $spadegaming['nama_game'] ?></h5>
            <button data-modal="modal-<?= $spadegaming['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $spadegaming['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $spadegaming['nama_game'] ?>
                    <span class="detprovider">Spadegaming</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider"
                    src="{{ URL::to('/') }}/img/provider/<?= $spadegaming['provider'] ?>-l21.png" alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $spadegaming['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $spadegaming['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn19"></span>x <span class="sgmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn20"></span>x <span class="sgmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $spadegaming['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait pgsoft">
        <?php foreach ($row_pgsoft as $pgsoft) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $pgsoft['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/pg/<?= $pgsoft['nama_file'] ?>"
                alt="<?= $pgsoft['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $pgsoft['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $pgsoft['nama_game'] ?></h5>
            <button data-modal="modal-<?= $pgsoft['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $pgsoft['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $pgsoft['nama_game'] ?>
                    <span class="detprovider">PGSOFT</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $pgsoft['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $pgsoft['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $pgsoft['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn21"></span>x <span class="pgmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn22"></span>x <span class="pgmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $pgsoft['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait toptrend">
        <?php foreach ($row_toptrend as $toptrend) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $toptrend['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/tt/<?= $toptrend['nama_file'] ?>"
                alt="<?= $toptrend['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $toptrend['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $toptrend['nama_game'] ?></h5>
            <button data-modal="modal-<?= $toptrend['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $toptrend['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $toptrend['nama_game'] ?>
                    <span class="detprovider">Top Trend Gaming</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $toptrend['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $toptrend['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $toptrend['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn23"></span>x <span class="ttmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn24"></span>x <span class="ttmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $toptrend['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait redtiger">
        <?php foreach ($row_redtiger as $redtiger) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $redtiger['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/rt/<?= $redtiger['nama_file'] ?>"
                alt="<?= $redtiger['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $redtiger['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $redtiger['nama_game'] ?></h5>
            <button data-modal="modal-<?= $redtiger['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $redtiger['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $redtiger['nama_game'] ?>
                    <span class="detprovider">Red Tiger</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $redtiger['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $redtiger['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $redtiger['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn25"></span>x <span class="rtmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn26"></span>x <span class="rtmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $redtiger['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait netent">
        <?php foreach ($row_netent as $netent) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $netent['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/ne/<?= $netent['nama_file'] ?>"
                alt="<?= $netent['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $netent['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $netent['nama_game'] ?></h5>
            <button data-modal="modal-<?= $netent['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $netent['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $netent['nama_game'] ?>
                    <span class="detprovider">Net Ent</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $netent['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $netent['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $netent['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn27"></span>x <span class="nemode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn28"></span>x <span class="nemode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $netent['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait genesis">
        <?php foreach ($row_genesis as $genesis) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $genesis['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/gn/<?= $genesis['nama_file'] ?>"
                alt="<?= $genesis['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $genesis['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $genesis['nama_game'] ?></h5>
            <button data-modal="modal-<?= $genesis['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $genesis['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $genesis['nama_game'] ?>
                    <span class="detprovider">Genesis</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $genesis['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $genesis['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $genesis['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn29"></span>x <span class="gnmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn30"></span>x <span class="gnmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $genesis['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait bng">
        <?php foreach ($row_bng as $bng) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $bng['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/bng/<?= $bng['nama_file'] ?>"
                alt="<?= $bng['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $bng['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $bng['nama_game'] ?></h5>
            <button data-modal="modal-<?= $bng['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $bng['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $bng['nama_game'] ?>
                    <span class="detprovider">BNG</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $bng['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $bng['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $bng['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn31"></span>x <span class="bngmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn32"></span>x <span class="bngmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $bng['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait bigtime">
        <?php foreach ($row_bigtime as $bigtime) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $bigtime['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/bt/<?= $bigtime['nama_file'] ?>"
                alt="<?= $bigtime['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $bigtime['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $bigtime['nama_game'] ?></h5>
            <button data-modal="modal-<?= $bigtime['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $bigtime['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $bigtime['nama_game'] ?>
                    <span class="detprovider">Bigtime</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $bigtime['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $bigtime['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $bigtime['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn33"></span>x <span class="btmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn34"></span>x <span class="btmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $bigtime['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait gmw">
        <?php foreach ($row_gmw as $gmw) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $gmw['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/gmw/<?= $gmw['nama_file'] ?>"
                alt="<?= $gmw['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $gmw['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $gmw['nama_game'] ?></h5>
            <button data-modal="modal-<?= $gmw['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $gmw['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $gmw['nama_game'] ?>
                    <span class="detprovider">GMW</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $gmw['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $gmw['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $gmw['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn35"></span>x <span class="gmwmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn36"></span>x <span class="gmwmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $gmw['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    <div class="grubgameterkait idnslot">
        <?php foreach ($row_idnslot as $idnslot) : ?>
        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="game__item game__promo" data-id="<?= $idnslot['id'] ?>">
            <div class="kurungload">
                <div class="loading-spinner"></div>
            </div>
            <img class="gambargamenya" src="{{ URL::to('/') }}/img/game/slot/idn/<?= $idnslot['nama_file'] ?>"
                alt="<?= $idnslot['nama_game'] ?>">
            ../front/img/
            <img src="{{ URL::to('/') }}/img/provider/<?= $idnslot['provider'] ?>-l21.png" alt="">
        </div>
        <div class="game__hot">
            <span>HOT!!!</span>
        </div>
        <div class="progress">
            <div class="progress-value" data-progress="93%" style="--progress-width: 93%;">
                <span class="progress-counter" data-target="93%">93%</span>
            </div>
        </div>
        <div class="lihatpola">
            <h5><?= $idnslot['nama_game'] ?></h5>
            <button data-modal="modal-<?= $idnslot['id'] ?>" class="buttonred modal-trigger-rtp">POLA</button>
        </div>
    </div>

    <!-- start Modal -->
    <div class="modal-rtp" id="modal-<?= $idnslot['id'] ?>">
        <div class="modal-sandbox"></div>
        <div class="modal-box">
            <div class="close-modal">&#10006;</div>
            <img class="imgsl" src="{{ URL::to('/') }}/img/img_sl.png" alt="imgsl">
            <div class="modal-header-rtp">
                <img class="imgsl2" src="{{ URL::to('/') }}/img/bubble speech.png" alt="imgsl">
                <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                <h1 style="text-transform: capitalize;"><?= $idnslot['nama_game'] ?>
                    <span class="detprovider">IDNSLOT</span>
                </h1>
                <span>Tips Bermain Slot</span>
                <img class="llprovider" src="{{ URL::to('/') }}/img/provider/<?= $idnslot['provider'] ?>-l21.png"
                    alt="">
            </div>
            <div class="modal-body-rtp">
                <div class="row__content__1 timer-container">
                    <div>
                        <span>Min - Max Bet</span>
                        <span>Jam Gacor</span>
                        <span>Sisa Waktu Gacor</span>
                    </div>
                    <div>
                        <span>: <?= $idnslot['stake_bet'] ?></span>
                        <span>: <span class="tm1"></span> - <span class="tm2"></span></span>
                        <span>: <span class="tm3 countsisawaktu"></span></span>
                    </div>
                </div>
                <div class="row__content__2">
                    <span>POLA KHUSUS</span>
                </div>
                <div class="row__content__3 <?= $idnslot['tipe_game'] ?>">
                    <div>
                        <b>Step 1: Panaskan Mesin Slot!</b>
                        <span>Manual <span class="spinn5"></span>x</span>
                    </div>
                    <div>
                        <b>Step 2: Acak Pola!</b>
                        <span>Auto <span class="spinn37"></span>x <span class="idnmode1"></span> <i
                                class='fas fa-circle-info pla1'></i></span>
                    </div>
                    <div>
                        <b>Step 3: Naikkan Bet!</b>
                        <span>Auto <span class="spinn38"></span>x <span class="idnmode2"></span> <i
                                class='fas fa-circle-info pla2'></i></span>
                    </div>
                    <div>
                        <b style="color: #f83232; text-shadow: 0 0 5px red;">Langkah Terakhir!</b>
                        <span>Manual <span class="spinn8"></span>x</span>
                    </div>
                    <img src="{{ URL::to('/') }}/img/l21-logo.png" alt="">
                </div>
                <div class="row__content__2" style="background-color: #0b0b0b;">
                    <p>Lakukan Tips Dari Awal & Ulangi</p>
                </div>
                <div class="row__tombol">
                    <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                            style="text-align: left; border-radius: 0 0 0 5px;"
                            class="buttonred btndaftar">DAFTAR</button></a>
                    <a href="demo.php?demo=<?= $idnslot['id'] ?>"><button
                            style="text-align: right; border-radius: 0 0 5px 0;"
                            class="buttongreen btnlogin">DEMO</button></a>
                </div>
            </div>
            <div id="popup">
                <img src="{{ URL::to('/') }}/img/promo/promoslot/<?= $kontak['promoslot'] ?>" alt="">
            </div>
        </div>
    </div>
    <!-- end Modal -->
    <?php endforeach; ?>
    <?php endforeach; ?>
    </div>

    </div>
    </div>


    @include('front.partial.footer', $row_kontak)


    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="{{ asset('front/Js/hadiahaa.js') }}"></script>

</body>

</html>
