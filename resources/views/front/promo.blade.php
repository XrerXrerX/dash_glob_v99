<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto21Group : Promosi l21</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="{{ URL::to('/') }}/front/style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>


    @include('front.partial.loaderpage');
    @include('front.partial.navbar');

    <!--start KONTAINER UTAMA-->
    <div class="container part2">

        <div class="section halpromo">
            <div class="gruppromo">
                <div class="listdruppromo side">
                    <div class="sidebarpromo">
                        <h4>KATEGORI</h4>
                        <div class="btnkatpromo">
                            <button class="btnlistpromo active" data-target="semua"><img
                                    src="{{ URL::to('/') }}/front/img/ixon/ixon-all.png" alt="">
                                <p>Semua</p>
                            </button>
                            <button class="btnlistpromo" data-target="togel"><img
                                    src="{{ URL::to('/') }}/front/img/ixon/ixon-togel.png" alt="">
                                <p>Togel</p>
                            </button>
                            <button class="btnlistpromo" data-target="slot"><img
                                    src="{{ URL::to('/') }}/front/img/ixon/ixon-slot.png" alt="">
                                <p>Slot</p>
                            </button>
                            <button class="btnlistpromo" data-target="livegames"><img
                                    src="{{ URL::to('/') }}/front/img/ixon/ixon-casino.png" alt="">
                                <p>Live Games</p>
                            </button>
                            <button class="btnlistpromo" data-target="sportgames"><img
                                    src="{{ URL::to('/') }}/front/img/ixon/ixon-sport.png" alt="">
                                <p>Sport Games</p>
                            </button>
                            <button class="btnlistpromo" data-target="fishing"><img
                                    src="{{ URL::to('/') }}/front/img/ixon/ixon-fishing.png" alt="">
                                <p>Fishing</p>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="listdruppromo">

                    <div id="semua" class="listkontentpromo" style="display: flex;">
                        <?php foreach( $row_promol21 as $promol21 ) : ?>
                        <div id="<?= $promol21['id'] ?>" class="promocardkonten">
                            <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promol21['banner_promo'] ?>"
                                alt="">
                            <div class="deskpromodet">
                                <div class="promojudwaktu">
                                    <h4><?= $promol21['judul_promo'] ?></h4>
                                    <p>Periode Promo : <span class="periodepromo"><span
                                                class="startpromo"><?= $promol21['start_promo'] ?></span> - <span
                                                class="closepromo"><?= $promol21['close_promo'] ?></span></span><sup
                                            class="infopromo"></sup></p>
                                </div>
                                <button class="buttonred detailpromo modal-trigger-rtp"
                                    data-modal="promo-<?= $promol21['id'] ?>"><i class='fas fa-gift'></i> Detail
                                    Promosi</button>
                            </div>
                        </div>

                        <div class="modal-rtp" id="promo-<?= $promol21['id'] ?>"
                            data-waktu="<?= $promol21['close_promo'] ?>">
                            <div class="modal-sandbox"></div>
                            <div class="modal-box halpagepromo">
                                <div class="close-modal">&#10006;</div>
                                <div class="modal-header-hadiah">
                                    <h1><?= $promol21['judul_promo'] ?></h1>
                                </div>
                                <div class="modal-body-hadiah">
                                    <div id="carouselkonten111" class="row__content__hadiah">
                                        <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promol21['banner_promo'] ?>"
                                            alt="">
                                        <p><?= $promol21['desk_lengkap'] ?></p>
                                        <span id="scrollpromo" class="scrldown">Scroll<i
                                                class='fas fa-angle-double-down'></i></span>
                                        <div class="sisawktpromo">
                                            <div class="ssbox1"></div>
                                            <div class="ssbox2"></div>
                                            <span style="letter-spacing: 2px;">Sisa Waktu Promo</span>
                                            <div class="grupsisawaktu">
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu hari"></span>
                                                    <span class="headsisawaktu">Hari</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu jam"></span>
                                                    <span class="headsisawaktu">Jam</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu menit"></span>
                                                    <span class="headsisawaktu">Menit</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu detik"></span>
                                                    <span class="headsisawaktu">Detik</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__tombol tombollogodiskon">
                                        <img style="bottom: -4px;" src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                            alt="">
                                        <a href="<?= $promol21['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: left; border-radius: 0 0 0 5px;"
                                                class="buttonred btndaftar">DAFTAR</button></a>
                                        <a href="<?= $promol21['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: right; border-radius: 0 0 5px 0;"
                                                class="buttongreen btnlogin">CLAIM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="togel" class="listkontentpromo" style="display: none;">
                        <?php foreach( $row_promotogel as $promotogel ) : ?>
                        <div id="<?= $promotogel['id'] ?>" class="promocardkonten">
                            <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promotogel['banner_promo'] ?>"
                                alt="">
                            <div class="deskpromodet">
                                <div class="promojudwaktu">
                                    <h4><?= $promotogel['judul_promo'] ?></h4>
                                    <p>Periode Promo : <span class="periodepromo"><span
                                                class="startpromo"><?= $promotogel['start_promo'] ?></span> - <span
                                                class="closepromo"><?= $promotogel['close_promo'] ?></span></span><sup
                                            class="infopromo"></sup></p>
                                </div>
                                <button class="buttonred detailpromo modal-trigger-rtp"
                                    data-modal="promo-togel-<?= $promotogel['id'] ?>"><i class='fas fa-gift'></i>
                                    Detail Promosi</button>
                            </div>
                        </div>

                        <div class="modal-rtp" id="promo-togel-<?= $promotogel['id'] ?>"
                            data-waktu="<?= $promotogel['close_promo'] ?>">
                            <div class="modal-sandbox"></div>
                            <div class="modal-box halpagepromo">
                                <div class="close-modal">&#10006;</div>
                                <div class="modal-header-hadiah">
                                    <h1><?= $promotogel['judul_promo'] ?></h1>
                                </div>
                                <div class="modal-body-hadiah">
                                    <div id="carouselkonten111" class="row__content__hadiah">
                                        <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promotogel['banner_promo'] ?>"
                                            alt="">
                                        <p><?= $promotogel['desk_lengkap'] ?></p>
                                        <span id="scrollpromo" class="scrldown">Scroll<i
                                                class='fas fa-angle-double-down'></i></span>
                                        <div class="sisawktpromo">
                                            <div class="ssbox1"></div>
                                            <div class="ssbox2"></div>
                                            <span style="letter-spacing: 2px;">Sisa Waktu Promo</span>
                                            <div class="grupsisawaktu">
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu hari"></span>
                                                    <span class="headsisawaktu">Hari</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu jam"></span>
                                                    <span class="headsisawaktu">Jam</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu menit"></span>
                                                    <span class="headsisawaktu">Menit</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu detik"></span>
                                                    <span class="headsisawaktu">Detik</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__tombol tombollogodiskon">
                                        <img style="bottom: -4px;" src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                            alt="">
                                        <a href="<?= $promotogel['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: left; border-radius: 0 0 0 5px;"
                                                class="buttonred btndaftar">DAFTAR</button></a>
                                        <a href="<?= $promotogel['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: right; border-radius: 0 0 5px 0;"
                                                class="buttongreen btnlogin">CLAIM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="slot" class="listkontentpromo" style="display: none;">
                        <?php foreach( $row_promoslot as $promoslot ) : ?>
                        <div id="<?= $promoslot['id'] ?>" class="promocardkonten">
                            <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promoslot['banner_promo'] ?>"
                                alt="">
                            <div class="deskpromodet">
                                <div class="promojudwaktu">
                                    <h4><?= $promoslot['judul_promo'] ?></h4>
                                    <p>Periode Promo : <span class="periodepromo"><span
                                                class="startpromo"><?= $promoslot['start_promo'] ?></span> - <span
                                                class="closepromo"><?= $promoslot['close_promo'] ?></span></span><sup
                                            class="infopromo"></sup></p>
                                </div>
                                <button class="buttonred detailpromo modal-trigger-rtp"
                                    data-modal="promo-slot-<?= $promoslot['id'] ?>"><i class='fas fa-gift'></i> Detail
                                    Promosi</button>
                            </div>
                        </div>

                        <div class="modal-rtp" id="promo-slot-<?= $promoslot['id'] ?>"
                            data-waktu="<?= $promoslot['close_promo'] ?>">
                            <div class="modal-sandbox"></div>
                            <div class="modal-box halpagepromo">
                                <div class="close-modal">&#10006;</div>
                                <div class="modal-header-hadiah">
                                    <h1><?= $promoslot['judul_promo'] ?></h1>
                                </div>
                                <div class="modal-body-hadiah">
                                    <div id="carouselkonten111" class="row__content__hadiah">
                                        <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promoslot['banner_promo'] ?>"
                                            alt="">
                                        <p><?= $promoslot['desk_lengkap'] ?></p>
                                        <span id="scrollpromo" class="scrldown">Scroll<i
                                                class='fas fa-angle-double-down'></i></span>
                                        <div class="sisawktpromo">
                                            <div class="ssbox1"></div>
                                            <div class="ssbox2"></div>
                                            <span style="letter-spacing: 2px;">Sisa Waktu Promo</span>
                                            <div class="grupsisawaktu">
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu hari"></span>
                                                    <span class="headsisawaktu">Hari</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu jam"></span>
                                                    <span class="headsisawaktu">Jam</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu menit"></span>
                                                    <span class="headsisawaktu">Menit</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu detik"></span>
                                                    <span class="headsisawaktu">Detik</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__tombol tombollogodiskon">
                                        <img style="bottom: -4px;" src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                            alt="">
                                        <a href="<?= $promoslot['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: left; border-radius: 0 0 0 5px;"
                                                class="buttonred btndaftar">DAFTAR</button></a>
                                        <a href="<?= $promoslot['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: right; border-radius: 0 0 5px 0;"
                                                class="buttongreen btnlogin">CLAIM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="livegames" class="listkontentpromo" style="display: none;">
                        <?php foreach( $row_promolivegames as $promolivegames ) : ?>
                        <div id="<?= $promolivegames['id'] ?>" class="promocardkonten">
                            <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promolivegames['banner_promo'] ?>"
                                alt="">
                            <div class="deskpromodet">
                                <div class="promojudwaktu">
                                    <h4><?= $promolivegames['judul_promo'] ?></h4>
                                    <p>Periode Promo : <span class="periodepromo"><span
                                                class="startpromo"><?= $promolivegames['start_promo'] ?></span> - <span
                                                class="closepromo"><?= $promolivegames['close_promo'] ?></span></span><sup
                                            class="infopromo"></sup></p>
                                </div>
                                <button class="buttonred detailpromo modal-trigger-rtp"
                                    data-modal="promo-live-<?= $promolivegames['id'] ?>"><i class='fas fa-gift'></i>
                                    Detail Promosi</button>
                            </div>
                        </div>

                        <div class="modal-rtp" id="promo-live-<?= $promolivegames['id'] ?>"
                            data-waktu="<?= $promolivegames['close_promo'] ?>">
                            <div class="modal-sandbox"></div>
                            <div class="modal-box halpagepromo">
                                <div class="close-modal">&#10006;</div>
                                <div class="modal-header-hadiah">
                                    <h1><?= $promolivegames['judul_promo'] ?></h1>
                                </div>
                                <div class="modal-body-hadiah">
                                    <div id="carouselkonten111" class="row__content__hadiah">
                                        <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promolivegames['banner_promo'] ?>"
                                            alt="">
                                        <p><?= $promolivegames['desk_lengkap'] ?></p>
                                        <span id="scrollpromo" class="scrldown">Scroll<i
                                                class='fas fa-angle-double-down'></i></span>
                                        <div class="sisawktpromo">
                                            <div class="ssbox1"></div>
                                            <div class="ssbox2"></div>
                                            <span style="letter-spacing: 2px;">Sisa Waktu Promo</span>
                                            <div class="grupsisawaktu">
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu hari"></span>
                                                    <span class="headsisawaktu">Hari</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu jam"></span>
                                                    <span class="headsisawaktu">Jam</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu menit"></span>
                                                    <span class="headsisawaktu">Menit</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu detik"></span>
                                                    <span class="headsisawaktu">Detik</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__tombol tombollogodiskon">
                                        <img style="bottom: -4px;" src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                            alt="">
                                        <a href="<?= $promolivegames['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: left; border-radius: 0 0 0 5px;"
                                                class="buttonred btndaftar">DAFTAR</button></a>
                                        <a href="<?= $promolivegames['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: right; border-radius: 0 0 5px 0;"
                                                class="buttongreen btnlogin">CLAIM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="sportgames" class="listkontentpromo" style="display: none;">
                        <?php foreach( $row_promosportgames as $promosportgames ) : ?>
                        <div id="<?= $promosportgames['id'] ?>" class="promocardkonten">
                            <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promosportgames['banner_promo'] ?>"
                                alt="">
                            <div class="deskpromodet">
                                <div class="promojudwaktu">
                                    <h4><?= $promosportgames['judul_promo'] ?></h4>
                                    <p>Periode Promo : <span class="periodepromo"><span
                                                class="startpromo"><?= $promosportgames['start_promo'] ?></span> -
                                            <span
                                                class="closepromo"><?= $promosportgames['close_promo'] ?></span></span><sup
                                            class="infopromo"></sup></p>
                                </div>
                                <button class="buttonred detailpromo modal-trigger-rtp"
                                    data-modal="promo-sport-<?= $promosportgames['id'] ?>"><i class='fas fa-gift'></i>
                                    Detail Promosi</button>
                            </div>
                        </div>

                        <div class="modal-rtp" id="promo-sport-<?= $promosportgames['id'] ?>"
                            data-waktu="<?= $promosportgames['close_promo'] ?>">
                            <div class="modal-sandbox"></div>
                            <div class="modal-box halpagepromo">
                                <div class="close-modal">&#10006;</div>
                                <div class="modal-header-hadiah">
                                    <h1><?= $promosportgames['judul_promo'] ?></h1>
                                </div>
                                <div class="modal-body-hadiah">
                                    <div id="carouselkonten111" class="row__content__hadiah">
                                        <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promosportgames['banner_promo'] ?>"
                                            alt="">
                                        <p><?= $promosportgames['desk_lengkap'] ?></p>
                                        <span id="scrollpromo" class="scrldown">Scroll<i
                                                class='fas fa-angle-double-down'></i></span>
                                        <div class="sisawktpromo">
                                            <div class="ssbox1"></div>
                                            <div class="ssbox2"></div>
                                            <span style="letter-spacing: 2px;">Sisa Waktu Promo</span>
                                            <div class="grupsisawaktu">
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu hari"></span>
                                                    <span class="headsisawaktu">Hari</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu jam"></span>
                                                    <span class="headsisawaktu">Jam</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu menit"></span>
                                                    <span class="headsisawaktu">Menit</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu detik"></span>
                                                    <span class="headsisawaktu">Detik</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__tombol tombollogodiskon">
                                        <img style="bottom: -4px;" src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                            alt="">
                                        <a href="<?= $promosportgames['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: left; border-radius: 0 0 0 5px;"
                                                class="buttonred btndaftar">DAFTAR</button></a>
                                        <a href="<?= $promosportgames['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: right; border-radius: 0 0 5px 0;"
                                                class="buttongreen btnlogin">CLAIM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                    <div id="fishing" class="listkontentpromo" style="display: none;">
                        <?php foreach( $row_promofishing as $promofishing ) : ?>
                        <div id="<?= $promofishing['id'] ?>" class="promocardkonten">
                            <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promofishing['banner_promo'] ?>"
                                alt="">
                            <div class="deskpromodet">
                                <div class="promojudwaktu">
                                    <h4><?= $promofishing['judul_promo'] ?></h4>
                                    <p>Periode Promo : <span class="periodepromo"><span
                                                class="startpromo"><?= $promofishing['start_promo'] ?></span> - <span
                                                class="closepromo"><?= $promofishing['close_promo'] ?></span></span><sup
                                            class="infopromo"></sup></p>
                                </div>
                                <button class="buttonred detailpromo modal-trigger-rtp"
                                    data-modal="promo-fishing-<?= $promofishing['id'] ?>"><i class='fas fa-gift'></i>
                                    Detail Promosi</button>
                            </div>
                        </div>

                        <div class="modal-rtp" id="promo-fishing-<?= $promofishing['id'] ?>"
                            data-waktu="<?= $promofishing['close_promo'] ?>">
                            <div class="modal-sandbox"></div>
                            <div class="modal-box halpagepromo">
                                <div class="close-modal">&#10006;</div>
                                <div class="modal-header-hadiah">
                                    <h1><?= $promofishing['judul_promo'] ?></h1>
                                </div>
                                <div class="modal-body-hadiah">
                                    <div id="carouselkonten111" class="row__content__hadiah">
                                        <img src="{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $promofishing['banner_promo'] ?>"
                                            alt="">
                                        <p><?= $promofishing['desk_lengkap'] ?></p>
                                        <span id="scrollpromo" class="scrldown">Scroll<i
                                                class='fas fa-angle-double-down'></i></span>
                                        <div class="sisawktpromo">
                                            <div class="ssbox1"></div>
                                            <div class="ssbox2"></div>
                                            <span style="letter-spacing: 2px;">Sisa Waktu Promo</span>
                                            <div class="grupsisawaktu">
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu hari"></span>
                                                    <span class="headsisawaktu">Hari</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu jam"></span>
                                                    <span class="headsisawaktu">Jam</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu menit"></span>
                                                    <span class="headsisawaktu">Menit</span>
                                                </div>
                                                <div class="detsisawaktu">
                                                    <span class="hasilsisawaktu detik"></span>
                                                    <span class="headsisawaktu">Detik</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row__tombol tombollogodiskon">
                                        <img style="bottom: -4px;" src="{{ URL::to('/') }}/front/img/l21-logo.png"
                                            alt="">
                                        <a href="<?= $promofishing['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: left; border-radius: 0 0 0 5px;"
                                                class="buttonred btndaftar">DAFTAR</button></a>
                                        <a href="<?= $promofishing['link_web_rekom'] ?>" target="_blank"><button
                                                style="text-align: right; border-radius: 0 0 5px 0;"
                                                class="buttongreen btnlogin">CLAIM</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>
        </div>

    </div>


    @include('front.partial.footer', $row_kontak);


    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>

    <script>
        const startPromoElements = document.querySelectorAll('.startpromo');
        const closePromoElements = document.querySelectorAll('.closepromo');
        const modalElements = document.querySelectorAll('.modal-rtp');

        // Ubah format tanggal pada elemen startpromo
        startPromoElements.forEach(element => {
            const startDate = new Date(element.textContent);
            const formattedStartDate = startDate.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            element.textContent = formattedStartDate;
        });

        // Ubah format tanggal pada elemen closepromo
        closePromoElements.forEach(element => {
            const closeDate = new Date(element.textContent);
            const formattedCloseDate = closeDate.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            element.textContent = formattedCloseDate;
        });

        // Ubah format tanggal pada atribut data-waktu pada elemen modal-rtp
        modalElements.forEach(modalElement => {
            const waktu = modalElement.getAttribute('data-waktu');
            const waktuDate = new Date(waktu);
            const formattedWaktu = waktuDate.toLocaleDateString('id-ID', {
                day: '2-digit',
                month: 'long',
                year: 'numeric'
            });
            modalElement.setAttribute('data-waktu', formattedWaktu);
        });
    </script>

    <script>
        const btns = document.querySelectorAll('.btnlistpromo');
        const contents = document.querySelectorAll('.listkontentpromo');

        btns.forEach(btn => {
            btn.addEventListener('click', () => {
                const target = btn.getAttribute('data-target');
                btns.forEach(btn => {
                    btn.classList.remove('active');
                });
                btn.classList.add('active');
                contents.forEach(content => {
                    if (content.getAttribute('id') === target) {
                        content.style.display = 'flex';
                    } else {
                        content.style.display = 'none';
                    }
                });
            });
        });
    </script>

    <script>
        function parseTanggalIndonesia(tanggalString) {
            var months = {
                'Januari': '01',
                'Februari': '02',
                'Maret': '03',
                'April': '04',
                'Mei': '05',
                'Juni': '06',
                'Juli': '07',
                'Agustus': '08',
                'September': '09',
                'Oktober': '10',
                'November': '11',
                'Desember': '12'
            };

            var dateParts = tanggalString.split(' ');
            var day = dateParts[0].padStart(2, '0');
            var month = months[dateParts[1]];
            var year = dateParts[2];

            return new Date(`${year}-${month}-${day}`);
        }

        $(document).ready(function() {
            $('.listkontentpromo .promocardkonten').each(function() {
                var closePromoDate = parseTanggalIndonesia($(this).find('.closepromo').text().trim());
                // tambahkan 1 hari
                closePromoDate.setDate(closePromoDate.getDate() + 1);
                var currentDate = new Date();

                if (currentDate <= closePromoDate) {
                    $(this).find('.infopromo').addClass('active').text('Active');
                } else {
                    $(this).find('.infopromo').addClass('expired').text('Expired');
                }
            });
        });
    </script>

    <script>
        // Show the modal
        function showModal() {
            modal.classList.add('fade-in');
        }

        $(".modal-trigger-rtp").click(function(e) {
            e.preventDefault();
            dataModal = $(this).attr("data-modal");
            $("#" + dataModal).css({
                "display": "flex"
            });
            // $("body").css({"overflow-y": "hidden"}); //Prevent double scrollbar.
        });

        $(".close-modal, .modal-sandbox").click(function() {
            $(".modal-rtp").css({
                "display": "none"
            });
            // tambahkan kode berikut
            originalTextList = [];
            const bubbletextList = document.querySelectorAll('.bubbletext');
            bubbletextList.forEach(bubbletext => {
                bubbletext.textContent = '';
            });
        });

        function copyToClipboard(input) {
            navigator.clipboard.writeText(input.value)
                .then(() => {
                    console.log('Text copied to clipboard');
                    Swal.fire({
                        title: 'Link Alternatif di Copy!',
                        icon: 'success',
                        timer: 1000,
                        timerProgressBar: true,
                        showConfirmButton: false,
                        titleFontSize: '8px'
                    });
                })
                .catch((err) => {
                    console.error('Failed to copy text: ', err);
                });
        }

        //POPUP BANNER RTP
        function showPopup(popup) {
            // Set the popup style to "popup-show" after a 2 second delay
            setTimeout(() => {
                popup.style.animation = 'popup-show 3s ease forwards';
            }, 3000);
        }

        document.addEventListener('DOMContentLoaded', function() {
            const modalRTPs = document.querySelectorAll('.modal-rtp');

            modalRTPs.forEach(modalRTP => {
                const popup = modalRTP.querySelector('#popup');
                if (popup) {
                    showPopup(popup);
                }
            });
        });
    </script>

    <script>
        const modalsRtp = document.querySelectorAll('.modal-rtp');

        modalsRtp.forEach(modalRtp => {
            const waktuTargetStr = modalRtp.getAttribute('data-waktu');
            const tanggalArr = waktuTargetStr.split(" ");
            const bulan = {
                "Januari": "01",
                "Februari": "02",
                "Maret": "03",
                "April": "04",
                "Mei": "05",
                "Juni": "06",
                "Juli": "07",
                "Agustus": "08",
                "September": "09",
                "Oktober": "10",
                "November": "11",
                "Desember": "12"
            };
            const tanggalBaru = tanggalArr[2] + "-" + bulan[tanggalArr[1]] + "-" + tanggalArr[0];

            const waktuTarget = new Date(Date.UTC(tanggalArr[2], bulan[tanggalArr[1]] - 1, tanggalArr[0], 17, 0,
                0));

            const hariElem = modalRtp.querySelector('.hasilsisawaktu.hari');
            const jamElem = modalRtp.querySelector('.hasilsisawaktu.jam');
            const menitElem = modalRtp.querySelector('.hasilsisawaktu.menit');
            const detikElem = modalRtp.querySelector('.hasilsisawaktu.detik');

            const intervalId = setInterval(() => {
                const sekarang = Date.now();
                const selisih = waktuTarget.getTime() - sekarang;
                const sisaHari = Math.max(Math.floor(selisih / (1000 * 60 * 60 * 24)), 0);
                const sisaJam = Math.max(Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)),
                    0);
                const sisaMenit = Math.max(Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60)), 0);
                const sisaDetik = Math.max(Math.floor((selisih % (1000 * 60)) / 1000), 0);
                if (sisaHari < 1) {
                    hariElem.textContent = Math.max(Math.floor(selisih / (1000 * 60 * 60)), 0);
                    jamElem.textContent = sisaJam === 0 ? "-" : sisaJam;
                    menitElem.textContent = sisaMenit === 0 ? "-" : sisaMenit;
                    detikElem.textContent = sisaDetik === 0 ? "-" : sisaDetik;

                    hariElem.classList.add('sse');
                    jamElem.classList.add('sse');
                    menitElem.classList.add('sse');
                    detikElem.classList.add('sse');
                } else {
                    hariElem.textContent = sisaHari;
                    jamElem.textContent = sisaJam;
                    menitElem.textContent = sisaMenit;
                    detikElem.textContent = sisaDetik;
                }

                if (selisih < 0) {
                    clearInterval(intervalId);
                    hariElem.textContent = 'expired';
                    jamElem.textContent = 'expired';
                    menitElem.textContent = 'expired';
                    detikElem.textContent = 'expired';
                    hariElem.classList.add('expired');
                    jamElem.classList.add('expired');
                    menitElem.classList.add('expired');
                    detikElem.classList.add('expired');
                } else {
                    hariElem.textContent = sisaHari > 0 ? sisaHari : '0';
                    jamElem.textContent = sisaJam > 0 ? sisaJam : '0';
                    menitElem.textContent = sisaMenit > 0 ? sisaMenit : '0';
                    detikElem.textContent = sisaDetik > 0 ? sisaDetik : '0';
                }
            }, 1000);
        });
    </script>

    <script>
        window.addEventListener("load", function() {
            // dapatkan semua elemen dengan class promocardkonten
            const promoCardKonten = document.querySelectorAll(".promocardkonten");

            // loop melalui setiap elemen dan periksa apakah nilai infopromo adalah 'expired'
            promoCardKonten.forEach(function(promo) {
                const infoPromo = promo.querySelector(".infopromo").innerText;
                if (infoPromo.toLowerCase() === "expired") {
                    // jika ya, atur display none pada elemen promocardkonten yang sesuai
                    promo.style.display = "none";
                }
            });
        });
    </script>

</body>

</html>
