@extends('front.layout.main')
@section('container part2')
    <!--start KONTAINER UTAMA-->
    <div class="container part2">

        <div class="section nonpeding" style="background-color: transparent;">
            <div class="carousel">
                <div class="carousel-items">
                    <?php foreach ($row_carousel as $carousel) : ?>
                    <div class="carousel-item"
                        style="background-image: url('{{ URL::to('/') }}/front/img/promo/promowebsite/<?= $carousel['banner_promo'] ?>');">
                        <div class="detail__slide">
                            <h1><?= $carousel['judul_promo'] ?></h1>
                            <P><?= $carousel['desk_singkat'] ?></P>
                            <a href="{{ URL::to('/') }}/promo"><button class="buttonredpulse">Details</button></a>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="carousel-controls">
                    <button class="carousel-control prev"><i class='fas fa-arrow-alt-circle-left'></i></button>
                    <button class="carousel-control next"><i class='fas fa-arrow-alt-circle-right'></i></button>
                </div>
                <div class="carousel-indicators"></div>
            </div>
        </div>

        <?php foreach ($row_kontak as $kontak) : ?>
        <div class="marquee-container">
            <div class="speaker-icon">
                <i class="fas fa-volume-high" style="margin: 0 10px;"></i>

            </div>
            <marquee behavior="scroll" direction="left" scrollamount="5" style="margin-right: 10px;">
                <?= $kontak['runningtext'] ?>
            </marquee>
        </div>
        <?php endforeach; ?>

        <div class="section">
            <div class="mediaslot">
                <div class="mediaslot1">
                    <a href="{{ URL::to('/') }}/rtp" style="display: flex; align-items: center; justify-content: center;">
                        <img src="{{ URL::to('/') }}/front/img/slot-machine-l21.png" alt="slot-machine-l21">
                        <span
                            style="padding-right: 2px; font-size: 25px; background: linear-gradient(to top, #721817, #f83232); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">RTP</span><span
                            style="margin-left: 5px; padding-right: 2px; font-size: 25px; background: linear-gradient(to top, #707070, #ffffff); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">SLOT</span></a>
                </div>

                <div class="mediaslot2">
                    <div class="card__list__container">
                        <div class="card__list__slot">
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/pragmaticplay-l21.png"
                                        alt="pragmaticplay">
                                    <span>PRAGMATIC</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/jokergaming-l21.png"
                                        alt="jokergaming-l21">
                                    <span>JOKER</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/habanero-l21.png" alt="habanero-l21">
                                    <span>HABANERO</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/microgaming-l21.png"
                                        alt="microgaming-l21">
                                    <span>MICRO</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/relaxgaming-l21.png"
                                        alt="relaxgaming-l21">
                                    <span>RELAX</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/playngo-l21.png" alt="playngo-l21">
                                    <span>PLAY N GO</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/playtech-l21.png" alt="playtech-l21">
                                    <span>PLAYTECH</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/spadegaming-l21.png"
                                        alt="spadegaming-l21">
                                    <span>SPADEGAMING</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/pgsoft-l21.png" alt="pgsoft-l21">
                                    <span>PGSOFT</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/toptrend-l21.png" alt="toptrend-l21">
                                    <span>TOPTREND</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/redtiger-l21.png" alt="redtiger-l21">
                                    <span>RED TIGER</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/netent-l21.png" alt="netent-l21">
                                    <span>NET ENT</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/bigtime-l21.png" alt="bigtime-l21">
                                    <span>BIG TIME</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/genesis-l21.png" alt="genesis-l21">
                                    <span>GENESIS</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/bng-l21.png" alt="bng-l21">
                                    <span>BNG</span>
                                </div>
                            </a>
                            <a href="{{ URL::to('/') }}/rtp">
                                <div class="list__provider">
                                    <img src="{{ URL::to('/') }}/front/img/provider/gmw-l21.png" alt="gmw-l21">
                                    <span>GMW</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <button class="prevslot">&#10094;</button>
                    <button class="nextslot">&#10095;</button>
                </div>


                <div class="mediaslot1">
                    <a href="{{ URL::to('/') }}/rtp"><button class="buttonred slot">Lihat Semua</button></a>
                </div>

            </div>
        </div>

        <!--start REKOMENDASI GAME-->
        <div class="section rekomendasi">

            <div class="game__rekomendasi">
                <?php foreach ($row_pragmatic as $pragmatic) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $pragmatic['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/pp/<?= $pragmatic['nama_file'] ?>"
                        alt="<?= $pragmatic['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $pragmatic['provider'] ?>-l21.png"
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $pragmatic['nama_game'] ?>
                                <span class="detprovider">Pragmatic Play</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $pragmatic['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $pragmatic['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_joker as $joker) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $joker['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/jk/<?= $joker['nama_file'] ?>"
                        alt="<?= $joker['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $joker['provider'] ?>-l21.png"
                            alt="">
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $joker['nama_game'] ?>
                                <span class="detprovider">Joker Gaming</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $joker['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $joker['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_habanero as $habanero) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $habanero['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/hb/<?= $habanero['nama_file'] ?>"
                        alt="<?= $habanero['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $habanero['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $habanero['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $habanero['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $habanero['nama_game'] ?>
                                <span class="detprovider">Habanero</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $habanero['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $habanero['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_microgaming as $microgaming) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $microgaming['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/mc/<?= $microgaming['nama_file'] ?>"
                        alt="<?= $microgaming['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $microgaming['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $microgaming['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $microgaming['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $microgaming['nama_game'] ?>
                                <span class="detprovider">Microgaming</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $microgaming['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $microgaming['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_relaxgaming as $relaxgaming) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $relaxgaming['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/rg/<?= $relaxgaming['nama_file'] ?>"
                        alt="<?= $relaxgaming['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $relaxgaming['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $relaxgaming['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $relaxgaming['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $relaxgaming['nama_game'] ?>
                                <span class="detprovider">Relax Gaming</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $relaxgaming['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $relaxgaming['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_playngo as $playngo) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $playngo['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/plg/<?= $playngo['nama_file'] ?>"
                        alt="<?= $playngo['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $playngo['provider'] ?>-l21.png"
                            alt="">
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $playngo['nama_game'] ?>
                                <span class="detprovider">PLay n Go</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $playngo['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $playngo['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_playtech as $playtech) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $playtech['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/plt/<?= $playtech['nama_file'] ?>"
                        alt="<?= $playtech['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $playtech['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $playtech['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $playtech['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $playtech['nama_game'] ?>
                                <span class="detprovider">PLaytech</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $playtech['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $playtech['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_spadegaming as $spadegaming) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $spadegaming['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/sg/<?= $spadegaming['nama_file'] ?>"
                        alt="<?= $spadegaming['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $spadegaming['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $spadegaming['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $spadegaming['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $spadegaming['nama_game'] ?>
                                <span class="detprovider">Spadegaming</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $spadegaming['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $spadegaming['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_pgsoft as $pgsoft) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $pgsoft['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/pg/<?= $pgsoft['nama_file'] ?>"
                        alt="<?= $pgsoft['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $pgsoft['provider'] ?>-l21.png"
                            alt="">
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $pgsoft['nama_game'] ?>
                                <span class="detprovider">PGSOFT</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $pgsoft['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $pgsoft['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_toptrend as $toptrend) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $toptrend['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/tt/<?= $toptrend['nama_file'] ?>"
                        alt="<?= $toptrend['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $toptrend['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $toptrend['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $toptrend['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $toptrend['nama_game'] ?>
                                <span class="detprovider">Top Trend Gaming</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $toptrend['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $toptrend['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_redtiger as $redtiger) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $redtiger['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/rt/<?= $redtiger['nama_file'] ?>"
                        alt="<?= $redtiger['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $redtiger['provider'] ?>-l21.png"
                            alt="">
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
                        <button data-modal="modal-<?= $redtiger['id'] ?>"
                            class="buttonred modal-trigger-rtp">POLA</button>
                    </div>
                </div>

                <!-- start Modal -->
                <div class="modal-rtp" id="modal-<?= $redtiger['id'] ?>">
                    <div class="modal-sandbox"></div>
                    <div class="modal-box">
                        <div class="close-modal">&#10006;</div>
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $redtiger['nama_game'] ?>
                                <span class="detprovider">Red Tiger</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $redtiger['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $redtiger['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_netent as $netent) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $netent['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/ne/<?= $netent['nama_file'] ?>"
                        alt="<?= $netent['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $netent['provider'] ?>-l21.png"
                            alt="">
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $netent['nama_game'] ?>
                                <span class="detprovider">Net Ent</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $netent['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $netent['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_genesis as $genesis) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $genesis['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/gn/<?= $genesis['nama_file'] ?>"
                        alt="<?= $genesis['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $genesis['provider'] ?>-l21.png"
                            alt="">
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png" alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $genesis['nama_game'] ?>
                                <span class="detprovider">Genesis</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $genesis['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $genesis['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

                <?php foreach ($row_bng as $bng) : ?>
                <?php foreach ($row_kontak as $kontak) : ?>
                <div class="game__item game__promo" data-id="<?= $bng['id'] ?>">
                    <div class="kurungload">
                        <div class="loading-spinner"></div>
                    </div>
                    <img class="gambargamenya"
                        src="{{ URL::to('/') }}/front/img/game/slot/bng/<?= $bng['nama_file'] ?>"
                        alt="<?= $bng['nama_game'] ?>">
                    <div class="game__provider">
                        <img src="{{ URL::to('/') }}/front/img/provider/<?= $bng['provider'] ?>-l21.png"
                            alt="">
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
                        <img class="imgsl" src="{{ URL::to('/') }}/front/img/img_sl.png" alt="imgsl">
                        <div class="modal-header-rtp">
                            <img class="imgsl2" src="{{ URL::to('/') }}/front/img/bubble speech.png"
                                alt="imgsl">
                            <span class="bubbletext"><?= $kontak['ket_promoslot'] ?></span>
                            <h1 style="text-transform: capitalize;"><?= $bng['nama_game'] ?>
                                <span class="detprovider">BNG</span>
                            </h1>
                            <span>Tips Bermain Slot</span>
                            <img class="llprovider"
                                src="{{ URL::to('/') }}/front/img/provider/<?= $bng['provider'] ?>-l21.png"
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
                                <img src="{{ URL::to('/') }}/front/img/l21-logo.png" alt="">
                            </div>
                            <div class="row__content__2" style="background-color: #0b0b0b;">
                                <p>Lakukan Tips Dari Awal & Ulangi</p>
                            </div>
                            <div class="row__tombol">
                                <a href="<?= $kontak['webrekomen'] ?>" target="_blank"><button
                                        style="text-align: left; border-radius: 0 0 0 5px;"
                                        class="buttonred btndaftar">DAFTAR</button></a>
                                <a href="{{ URL::to('/') }}/promo/<?= $bng['id'] ?>"><button
                                        style="text-align: right; border-radius: 0 0 5px 0;"
                                        class="buttongreen btnlogin">DEMO</button></a>
                            </div>
                        </div>
                        <div id="popup">
                            <img src="{{ URL::to('/') }}/front/img/promo/promoslot/<?= $kontak['promoslot'] ?>"
                                alt="">
                        </div>
                    </div>
                </div>
                <!-- end Modal -->
                <?php endforeach; ?>
                <?php endforeach; ?>

            </div>

        </div>
        <!--end REKOMENDASI GAME-->

        <!--start WEBSITE-->
        <div class="section website" id="groupwebsite">
            <?php foreach ($row_website['data'] as $website) : ?>
            <div class="partwebsite" data-id="<?= $website['id'] ?>">
                <span><?= $website['website'] ?></span>
                <div class="kurungloadutama">
                    <div class="loading-spinnerutama"></div>
                </div>
                <img class="gifbannerutama" src="{{ URL::to('/') }}/front/img/banner/<?= $website['gambar'] ?>"
                    alt="<?= $website['website'] ?>">
                <a class="dwnlink" href="<?= $website['linkapk'] ?>" target="_blank">
                    <div class="downloadlinklik">
                        <img class="dwn1" src="{{ URL::to('/') }}/front/img/android.png" alt="">
                        <div class="veriff">
                            <img class="dwn2" src="{{ URL::to('/') }}/front/img/dicon.png" alt="">
                            <p class="dwn3">Download</p>
                        </div>
                    </div>
                </a>
                <div class="table-website">
                    <table>
                        <tr>
                            <th>Pasaran</th>
                            <td><?= $website['pasaran'] ?></td>
                        </tr>
                        <tr>
                            <th>Deposit</th>
                            <td><?= $website['deposit'] ?></td>
                        </tr>
                        <tr class="barisodd">
                            <th>Withdraw</th>
                            <td><?= $website['withdraw'] ?></td>
                        </tr>
                        <tr>
                            <th>Hadiah/Diskon</th>
                            <td><button data-modal="hadiah-<?= $website['website'] ?>"
                                    class="buttontablehd modal-trigger-rtp">Klik Disini</button></td>
                        </tr>
                        <tr class="barisodd">
                            <th>Promo</th>
                            <td><button data-modal="promo-<?= $website['website'] ?>"
                                    class="buttontablehd modal-trigger-rtp">Klik Disini</button></td>
                        </tr>
                        <tr>
                            <th>Bukti Jackpot</th>
                            <td><a href="<?= $website['buktijp'] ?>" target="_blank"><button
                                        class="buttontablehd">Klik Disini</button></a></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="thlinkalternat">
                                <div class="dropdown">
                                    <input type="checkbox" id="dropdown-<?= $website['website'] ?>" value=""
                                        name="my-checkbox">
                                    <label for="dropdown-<?= $website['website'] ?>" data-toggle="dropdown">
                                        Link Alternatif
                                    </label>
                                    <ul>
                                        <li>
                                            <input type="text" class="text"
                                                value="<?= $website['linkalternatif1'] ?>">
                                            <i class="fas fa-copy"
                                                onclick="copyToClipboard(this.previousElementSibling)">copy</i>
                                        </li>
                                        <li>
                                            <input type="text" class="text"
                                                value="<?= $website['linkalternatif2'] ?>">
                                            <i class="fas fa-copy"
                                                onclick="copyToClipboard(this.previousElementSibling)">copy</i>
                                        </li>
                                        <li>
                                            <input type="text" class="text"
                                                value="<?= $website['linkalternatif3'] ?>">
                                            <i class="fas fa-copy"
                                                onclick="copyToClipboard(this.previousElementSibling)">copy</i>
                                        </li>
                                    </ul>
                                </div>
                            </th>
                        </tr>
                    </table>
                    <div class="groupbutton">
                        <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                                class="buttonred daftarweb">DAFTAR</button></a>
                        <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                                class="buttongreen loginweb">LOGIN</button></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>

        <!-- start Modal hadiah -->
        <?php foreach ($row_hadiah as $hadiah) : ?>
        <div class="modal-rtp" id="hadiah-<?= $hadiah['website'] ?>">
            <div class="modal-sandbox"></div>
            <div class="modal-box hadiahdandiskon">
                <div class="close-modal">&#10006;</div>
                <div class="modal-header-hadiah">
                    <h1>HADIAH & DISKON</h1>
                </div>
                <div class="modal-body-hadiah">
                    <div class="row__content__hadiah dishddisc">
                        <div class="grubbtnhd">
                            <button class="tbbtn active" data-target="tbbetdiskon">BET DISKON</button>
                            <button class="tbbtn" data-target="tbbetfull">BET FULL</button>
                            <button class="tbbtn" data-target="tbbetbb">BOLAK BALIK</button>
                            <button class="tbbtn" data-target="tbbetprize">BET PRIZE123</button>
                            <button class="tbbtn" data-target="tbbetv2">BET V2</button>
                        </div>
                        <div class="tutuphdds"></div>
                        <div class="row__hadiah__1 disdishd">
                            <div id="tbbetdiskon" class="disdatahadiah" style="display: block">
                                <table>
                                    <tbody>
                                        <tr class="distabhead123">
                                            <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;"
                                                colspan="4">PEMASANGAN DISKON</th>
                                        </tr>
                                        <tr class="distabhead">
                                            <th style="width: 40%;">Jenis Bet</th>
                                            <th>Minimal Bet</th>
                                            <th>Diskon</th>
                                            <th>Hadiah</th>
                                        </tr>
                                        <tr>
                                            <td>4D <?= $hadiah['disc4dket'] ?></td>
                                            <td>Rp <?= $hadiah['disc4dmin'] ?></td>
                                            <td><?= $hadiah['disc4ddisk'] ?></td>
                                            <td><?= $hadiah['disc4dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D <?= $hadiah['disc3dket'] ?></td>
                                            <td>Rp <?= $hadiah['disc3dmin'] ?></td>
                                            <td><?= $hadiah['disc3ddisk'] ?></td>
                                            <td><?= $hadiah['disc3dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Belakang <?= $hadiah['disc2dblkket'] ?></td>
                                            <td>Rp <?= $hadiah['disc2dblkmin'] ?></td>
                                            <td><?= $hadiah['disc2dblkdisk'] ?></td>
                                            <td><?= $hadiah['disc2dblkhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Depan <?= $hadiah['disc2ddpnket'] ?></td>
                                            <td>Rp <?= $hadiah['disc2ddpnmin'] ?></td>
                                            <td><?= $hadiah['disc2ddpndisk'] ?></td>
                                            <td><?= $hadiah['disc2ddpnhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Tengah <?= $hadiah['disc2dtghket'] ?></td>
                                            <td>Rp <?= $hadiah['disc2dtghmin'] ?></td>
                                            <td><?= $hadiah['disc2dtghdisk'] ?></td>
                                            <td><?= $hadiah['disc2dtghhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Bebas <?= $hadiah['disccbket'] ?></td>
                                            <td>Rp <?= $hadiah['disccbmin'] ?></td>
                                            <td><?= $hadiah['disccbdisk'] ?></td>
                                            <td><?= $hadiah['disccbhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D <?= $hadiah['disccb2dket'] ?></td>
                                            <td>Rp <?= $hadiah['disccb2dmin'] ?></td>
                                            <td><?= $hadiah['disccb2ddisk'] ?></td>
                                            <td><?= $hadiah['disccb2dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 3 Angka <?= $hadiah['disccb2d3ket'] ?></td>
                                            <td>Rp <?= $hadiah['disccb2d3min'] ?></td>
                                            <td><?= $hadiah['disccb2d3disk'] ?></td>
                                            <td><?= $hadiah['disccb2d3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 4 Angka <?= $hadiah['disccb2d4ket'] ?></td>
                                            <td>Rp <?= $hadiah['disccb2d4min'] ?></td>
                                            <td><?= $hadiah['disccb2d4disk'] ?></td>
                                            <td><?= $hadiah['disccb2d4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Naga <?= $hadiah['disccbnagaket'] ?></td>
                                            <td>Rp <?= $hadiah['disccbnagamin'] ?></td>
                                            <td><?= $hadiah['disccbnagadisk'] ?></td>
                                            <td><?= $hadiah['disccbnagahd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Naga 4 Angka <?= $hadiah['disccbnaga4ket'] ?></td>
                                            <td>Rp <?= $hadiah['disccbnaga4min'] ?></td>
                                            <td><?= $hadiah['disccbnaga4disk'] ?></td>
                                            <td><?= $hadiah['disccbnaga4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Jitu <?= $hadiah['disccjituket'] ?></td>
                                            <td>Rp <?= $hadiah['disccjitumin'] ?></td>
                                            <td><?= $hadiah['disccjitudisk'] ?></td>
                                            <td><?= $hadiah['disccjituhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tengah Tepi <?= $hadiah['discttepiket'] ?></td>
                                            <td>Rp <?= $hadiah['discttepimin'] ?></td>
                                            <td><?= $hadiah['discttepidisk'] ?></td>
                                            <td><?= $hadiah['discttepihd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dasar <?= $hadiah['discdsrket'] ?></td>
                                            <td>Rp <?= $hadiah['discdsrmin'] ?></td>
                                            <td><?= $hadiah['discdsrdisk'] ?></td>
                                            <td><?= $hadiah['discdsrhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kombinasi <?= $hadiah['disckombket'] ?></td>
                                            <td>Rp <?= $hadiah['disckombmin'] ?></td>
                                            <td><?= $hadiah['disckombdisk'] ?></td>
                                            <td><?= $hadiah['disckombhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>50-50 <?= $hadiah['disc5050ket'] ?></td>
                                            <td>Rp <?= $hadiah['disc5050min'] ?></td>
                                            <td><?= $hadiah['disc5050disk'] ?></td>
                                            <td><?= $hadiah['disc5050hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shio <span class="showshow"><?= $hadiah['discshioket'] ?></span></td>
                                            <td>Rp <?= $hadiah['discshiomin'] ?></td>
                                            <td><?= $hadiah['discshiodisk'] ?></td>
                                            <td><?= $hadiah['discshiohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Silang Homo <?= $hadiah['discshomoket'] ?></td>
                                            <td>Rp <?= $hadiah['discshomomin'] ?></td>
                                            <td><?= $hadiah['discshomodisk'] ?></td>
                                            <td><?= $hadiah['discshomohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kembang Kempis <?= $hadiah['disckkempisket'] ?></td>
                                            <td>Rp <?= $hadiah['disckkempismin'] ?></td>
                                            <td><?= $hadiah['disckkempisdisk'] ?></td>
                                            <td><?= $hadiah['disckkempishd'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tbbetfull" class="disdatahadiah" style="display: none">
                                <table>
                                    <tbody>
                                        <tr class="distabhead123">
                                            <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;"
                                                colspan="4">PEMASANGAN FULL</th>
                                        </tr>
                                        <tr class="distabhead">
                                            <th style="width: 40%;">Jenis Bet</th>
                                            <th>Minimal Bet</th>
                                            <th>Diskon</th>
                                            <th>Hadiah</th>
                                        </tr>
                                        <tr>
                                            <td>4D <?= $hadiah['full4dket'] ?></td>
                                            <td>Rp <?= $hadiah['full4dmin'] ?></td>
                                            <td><?= $hadiah['full4ddisk'] ?></td>
                                            <td><?= $hadiah['full4dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D <?= $hadiah['full3dket'] ?></td>
                                            <td>Rp <?= $hadiah['full3dmin'] ?></td>
                                            <td><?= $hadiah['full3ddisk'] ?></td>
                                            <td><?= $hadiah['full3dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Belakang <?= $hadiah['full2dblkket'] ?></td>
                                            <td>Rp <?= $hadiah['full2dblkmin'] ?></td>
                                            <td><?= $hadiah['full2dblkdisk'] ?></td>
                                            <td><?= $hadiah['full2dblkhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Bebas <?= $hadiah['fullcbket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcbmin'] ?></td>
                                            <td><?= $hadiah['fullcbdisk'] ?></td>
                                            <td><?= $hadiah['fullcbdisk'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D <?= $hadiah['fullcb2dket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcb2dmin'] ?></td>
                                            <td><?= $hadiah['fullcb2ddisk'] ?></td>
                                            <td><?= $hadiah['fullcb2dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 3 Angka <?= $hadiah['fullcb2d3ket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcb2d3min'] ?></td>
                                            <td><?= $hadiah['fullcb2d3disk'] ?></td>
                                            <td><?= $hadiah['fullcb2d3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 4 Angka <?= $hadiah['fullcb2d4ket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcb2d4min'] ?></td>
                                            <td><?= $hadiah['fullcb2d4disk'] ?></td>
                                            <td><?= $hadiah['fullcb2d4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Naga <?= $hadiah['fullcbnagaket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcbnagamin'] ?></td>
                                            <td><?= $hadiah['fullcbnagadisk'] ?></td>
                                            <td><?= $hadiah['fullcbnagahd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Naga 4 Angka <?= $hadiah['fullcbnaga4ket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcbnaga4min'] ?></td>
                                            <td><?= $hadiah['fullcbnaga4disk'] ?></td>
                                            <td><?= $hadiah['fullcbnaga4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Jitu <?= $hadiah['fullcjituket'] ?></td>
                                            <td>Rp <?= $hadiah['fullcjitumin'] ?></td>
                                            <td><?= $hadiah['fullcjitudisk'] ?></td>
                                            <td><?= $hadiah['fullcjituhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tengah Tepi <?= $hadiah['fullttepiket'] ?></td>
                                            <td>Rp <?= $hadiah['fullttepimin'] ?></td>
                                            <td><?= $hadiah['fullttepidisk'] ?></td>
                                            <td><?= $hadiah['fullttepihd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dasar <?= $hadiah['fulldsrket'] ?></td>
                                            <td>Rp <?= $hadiah['fulldsrmin'] ?></td>
                                            <td><?= $hadiah['fulldsrdisk'] ?></td>
                                            <td><?= $hadiah['fulldsrhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kombinasi <?= $hadiah['fullkombket'] ?></td>
                                            <td>Rp <?= $hadiah['fullkombmin'] ?></td>
                                            <td><?= $hadiah['fullkombdisk'] ?></td>
                                            <td><?= $hadiah['fullkombhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>50-50 <?= $hadiah['full5050ket'] ?></td>
                                            <td>Rp <?= $hadiah['full5050min'] ?></td>
                                            <td><?= $hadiah['full5050disk'] ?></td>
                                            <td><?= $hadiah['full5050hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shio <span class="showshow"><?= $hadiah['fullshioket'] ?></span></td>
                                            <td>Rp <?= $hadiah['fullshiomin'] ?></td>
                                            <td><?= $hadiah['fullshiodisk'] ?></td>
                                            <td><?= $hadiah['fullshiohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Silang Homo <?= $hadiah['fullshomoket'] ?></td>
                                            <td>Rp <?= $hadiah['fullshomomin'] ?></td>
                                            <td><?= $hadiah['fullshomodisk'] ?></td>
                                            <td><?= $hadiah['fullshomohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kembang Kempis <?= $hadiah['fullkkempisket'] ?></td>
                                            <td>Rp <?= $hadiah['fullkkempismin'] ?></td>
                                            <td><?= $hadiah['fullkkempisdisk'] ?></td>
                                            <td><?= $hadiah['fullkkempishd'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tbbetbb" class="disdatahadiah" style="display: none">
                                <table>
                                    <tbody>
                                        <tr class="distabhead123">
                                            <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;"
                                                colspan="4">PEMASANGAN BOLAK BALIK</th>
                                        </tr>
                                        <tr class="distabhead">
                                            <th style="width: 40%;">Jenis Bet</th>
                                            <th>Minimal Bet</th>
                                            <th>Diskon</th>
                                            <th>Hadiah</th>
                                        </tr>
                                        <tr>
                                            <td>4D (TEPAT) <?= $hadiah['betbb4dtptket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb4dtptmin'] ?></td>
                                            <td><?= $hadiah['betbb4dtptdisk'] ?></td>
                                            <td><?= $hadiah['betbb4dtpthd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>4D (TERBALIK) <?= $hadiah['betbb4dblkket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb4dblkmin'] ?></td>
                                            <td><?= $hadiah['betbb4dblkdisk'] ?></td>
                                            <td><?= $hadiah['betbb4dblkhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D (TEPAT) <?= $hadiah['betbb3dtptket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb3dtptmin'] ?></td>
                                            <td><?= $hadiah['betbb3dtptdisk'] ?></td>
                                            <td><?= $hadiah['betbb3dtpthd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D (TERBALIK) <?= $hadiah['betbb3dblkket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb3dblkmin'] ?></td>
                                            <td><?= $hadiah['betbb3dblkdisk'] ?></td>
                                            <td><?= $hadiah['betbb3dblkhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Belakang (TEPAT) <?= $hadiah['betbb2dtptblkket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb2dtptblkmin'] ?></td>
                                            <td><?= $hadiah['betbb2dtptblkdisk'] ?></td>
                                            <td><?= $hadiah['betbb2dtptblkhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Belakang (TERBALIK) <?= $hadiah['betbb2dblkket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb2dblkmin'] ?></td>
                                            <td><?= $hadiah['betbb2dblkdisk'] ?></td>
                                            <td><?= $hadiah['betbb2dblkhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Bebas <?= $hadiah['betbbcbket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcbmin'] ?></td>
                                            <td><?= $hadiah['betbbcbdisk'] ?></td>
                                            <td><?= $hadiah['betbbcbhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D <?= $hadiah['betbbcb2dket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcb2dmin'] ?></td>
                                            <td><?= $hadiah['betbbcb2ddisk'] ?></td>
                                            <td><?= $hadiah['betbbcb2dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 3 Angka <?= $hadiah['betbbcb2d3ket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcb2d3min'] ?></td>
                                            <td><?= $hadiah['betbbcb2d3disk'] ?></td>
                                            <td><?= $hadiah['betbbcb2d3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 4 Angka <?= $hadiah['betbbcb2d4ket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcb2d4min'] ?></td>
                                            <td><?= $hadiah['betbbcb2d4disk'] ?></td>
                                            <td><?= $hadiah['betbbcb2d4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Naga <?= $hadiah['betbbcbnagaket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcbnagamin'] ?></td>
                                            <td><?= $hadiah['betbbcbnagadisk'] ?></td>
                                            <td><?= $hadiah['betbbcbnagahd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Naga 4 Angka <?= $hadiah['betbbcbnaga4ket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcbnaga4min'] ?></td>
                                            <td><?= $hadiah['betbbcbnaga4disk'] ?></td>
                                            <td><?= $hadiah['betbbcbnaga4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Jitu <?= $hadiah['betbbcjituket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbcjitumin'] ?></td>
                                            <td><?= $hadiah['betbbcjitudisk'] ?></td>
                                            <td><?= $hadiah['betbbcjituhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tengah Tepi <?= $hadiah['betbbttepiket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbttepimin'] ?></td>
                                            <td><?= $hadiah['betbbttepidisk'] ?></td>
                                            <td><?= $hadiah['betbbttepihd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dasar <?= $hadiah['betbbdsrket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbdsrmin'] ?></td>
                                            <td><?= $hadiah['betbbdsrdisk'] ?></td>
                                            <td><?= $hadiah['betbbdsrhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kombinasi <?= $hadiah['betbbkombket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbkombmin'] ?></td>
                                            <td><?= $hadiah['betbbkombdisk'] ?></td>
                                            <td><?= $hadiah['betbbkombhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>50-50 <?= $hadiah['betbb5050ket'] ?></td>
                                            <td>Rp <?= $hadiah['betbb5050min'] ?></td>
                                            <td><?= $hadiah['betbb5050disk'] ?></td>
                                            <td><?= $hadiah['betbb5050hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shio <span class="showshow"><?= $hadiah['betbbshioket'] ?></span></td>
                                            <td>Rp <?= $hadiah['betbbshiomin'] ?></td>
                                            <td><?= $hadiah['betbbshiodisk'] ?></td>
                                            <td><?= $hadiah['betbbshiohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Silang Homo <?= $hadiah['betbbshomoket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbshomomin'] ?></td>
                                            <td><?= $hadiah['betbbshomodisk'] ?></td>
                                            <td><?= $hadiah['betbbshomohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kembang Kempis <?= $hadiah['betbbkkempisket'] ?></td>
                                            <td>Rp <?= $hadiah['betbbkkempismin'] ?></td>
                                            <td><?= $hadiah['betbbkkempisdisk'] ?></td>
                                            <td><?= $hadiah['betbbkkempishd'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tbbetprize" class="disdatahadiah" style="display: none">
                                <table>
                                    <tbody>
                                        <tr class="distabhead123">
                                            <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;"
                                                colspan="4">PEMASANGAN PRIZE 123</th>
                                        </tr>
                                        <tr class="distabhead">
                                            <th style="width: 40%;">Jenis Bet</th>
                                            <th>Minimal Bet</th>
                                            <th>Diskon</th>
                                            <th>Hadiah</th>
                                        </tr>
                                        <tr>
                                            <td>4D (PRIZE 1) <?= $hadiah['prize4dp1ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize4dp1min'] ?></td>
                                            <td><?= $hadiah['prize4dp1disk'] ?></td>
                                            <td><?= $hadiah['prize4dp1hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>4D (PRIZE 2) <?= $hadiah['prize4dp2ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize4dp2min'] ?></td>
                                            <td><?= $hadiah['prize4dp2disk'] ?></td>
                                            <td><?= $hadiah['prize4dp2hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>4D (PRIZE 3) <?= $hadiah['prize4dp3ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize4dp3min'] ?></td>
                                            <td><?= $hadiah['prize4dp3disk'] ?></td>
                                            <td><?= $hadiah['prize4dp3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D (PRIZE 1) <?= $hadiah['prize3dp1ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize3dp1min'] ?></td>
                                            <td><?= $hadiah['prize3dp1disk'] ?></td>
                                            <td><?= $hadiah['prize3dp1hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D (PRIZE 2) <?= $hadiah['prize3dp2ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize3dp2min'] ?></td>
                                            <td><?= $hadiah['prize3dp2disk'] ?></td>
                                            <td><?= $hadiah['prize3dp2hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D (PRIZE 3) <?= $hadiah['prize3dp3ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize3dp3min'] ?></td>
                                            <td><?= $hadiah['prize3dp3disk'] ?></td>
                                            <td><?= $hadiah['prize3dp3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Depan/Tengah/Belakang (PRIZE 1) <?= $hadiah['prize2dp1ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize2dp1min'] ?></td>
                                            <td><?= $hadiah['prize2dp1disk'] ?></td>
                                            <td><?= $hadiah['prize2dp1hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Depan/Tengah/Belakang (PRIZE 2) <?= $hadiah['prize2dp2ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize2dp2min'] ?></td>
                                            <td><?= $hadiah['prize2dp2disk'] ?></td>
                                            <td><?= $hadiah['prize2dp2hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Depan/Tengah/Belakang (PRIZE 3) <?= $hadiah['prize2dp3ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize2dp3min'] ?></td>
                                            <td><?= $hadiah['prize2dp3disk'] ?></td>
                                            <td><?= $hadiah['prize2dp3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Bebas <?= $hadiah['prizecbket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecbmin'] ?></td>
                                            <td><?= $hadiah['prizecbdisk'] ?></td>
                                            <td><?= $hadiah['prizecbhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D <?= $hadiah['prizecb2dket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecb2dmin'] ?></td>
                                            <td><?= $hadiah['prizecb2ddisk'] ?></td>
                                            <td><?= $hadiah['prizecb2dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 3 Angka <?= $hadiah['prizecb2d3ket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecb2d3min'] ?></td>
                                            <td><?= $hadiah['prizecb2d3disk'] ?></td>
                                            <td><?= $hadiah['prizecb2d3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 4 Angka <?= $hadiah['prizecb2d4ket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecb2d4min'] ?></td>
                                            <td><?= $hadiah['prizecb2d4disk'] ?></td>
                                            <td><?= $hadiah['prizecb2d4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Naga <?= $hadiah['prizecbnagaket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecbnagamin'] ?></td>
                                            <td><?= $hadiah['prizecbnagadisk'] ?></td>
                                            <td><?= $hadiah['prizecbnagahd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Naga 4 Angka <?= $hadiah['prizecbnaga4ket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecbnaga4min'] ?></td>
                                            <td><?= $hadiah['prizecbnaga4disk'] ?></td>
                                            <td><?= $hadiah['prizecbnaga4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Jitu <?= $hadiah['prizecjituket'] ?></td>
                                            <td>Rp <?= $hadiah['prizecjitumin'] ?></td>
                                            <td><?= $hadiah['prizecjitudisk'] ?></td>
                                            <td><?= $hadiah['prizecjituhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tengah Tepi <?= $hadiah['prizettepiket'] ?></td>
                                            <td>Rp <?= $hadiah['prizettepimin'] ?></td>
                                            <td><?= $hadiah['prizettepidisk'] ?></td>
                                            <td><?= $hadiah['prizettepihd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dasar <?= $hadiah['prizedsrket'] ?></td>
                                            <td>Rp <?= $hadiah['prizedsrmin'] ?></td>
                                            <td><?= $hadiah['prizedsrdisk'] ?></td>
                                            <td><?= $hadiah['prizedsrhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kombinasi <?= $hadiah['prizekombket'] ?></td>
                                            <td>Rp <?= $hadiah['prizekombmin'] ?></td>
                                            <td><?= $hadiah['prizekombdisk'] ?></td>
                                            <td><?= $hadiah['prizekombhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>50-50 <?= $hadiah['prize5050ket'] ?></td>
                                            <td>Rp <?= $hadiah['prize5050min'] ?></td>
                                            <td><?= $hadiah['prize5050disk'] ?></td>
                                            <td><?= $hadiah['prize5050hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shio <span class="showshow"><?= $hadiah['prizeshioket'] ?></span></td>
                                            <td>Rp <?= $hadiah['prizeshiomin'] ?></td>
                                            <td><?= $hadiah['prizeshiodisk'] ?></td>
                                            <td><?= $hadiah['prizeshiohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Silang Homo <?= $hadiah['prizeshomoket'] ?></td>
                                            <td>Rp <?= $hadiah['prizeshomomin'] ?></td>
                                            <td><?= $hadiah['prizeshomodisk'] ?></td>
                                            <td><?= $hadiah['prizeshomohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kembang Kempis <?= $hadiah['prizekkempisket'] ?></td>
                                            <td>Rp <?= $hadiah['prizekkempismin'] ?></td>
                                            <td><?= $hadiah['prizekkempisdisk'] ?></td>
                                            <td><?= $hadiah['prizekkempishd'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div id="tbbetv2" class="disdatahadiah" style="display: none">
                                <table>
                                    <tbody>
                                        <tr class="distabhead123">
                                            <th style="text-align: center; text-shadow: 1px 1px 2px #00000085; white-space: pre-line;"
                                                colspan="4">PEMASANGAN V2
                                                <span>Khusus Pasaran Singapore V2 dan Hongkong V2</span>
                                            </th>
                                        </tr>
                                        <tr class="distabhead prizev2">
                                            <th style="width: 40%;">Jenis Bet</th>
                                            <th>Minimal Bet</th>
                                            <th>Diskon</th>
                                            <th>Hadiah</th>
                                        </tr>
                                        <tr>
                                            <td>4D <?= $hadiah['betv24dket'] ?></td>
                                            <td>Rp <?= $hadiah['betv24dmin'] ?></td>
                                            <td><?= $hadiah['betv24ddisk'] ?></td>
                                            <td><?= $hadiah['betv24dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>3D <?= $hadiah['betv23dket'] ?></td>
                                            <td>Rp <?= $hadiah['betv23dmin'] ?></td>
                                            <td><?= $hadiah['betv23ddisk'] ?></td>
                                            <td><?= $hadiah['betv23dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>2D Depan/Tengah/Belakang <?= $hadiah['betv22dket'] ?></td>
                                            <td>Rp <?= $hadiah['betv22dmin'] ?></td>
                                            <td><?= $hadiah['betv22ddisk'] ?></td>
                                            <td><?= $hadiah['betv22dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Bebas <?= $hadiah['betv2cbket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cbmin'] ?></td>
                                            <td><?= $hadiah['betv2cbdisk'] ?></td>
                                            <td><?= $hadiah['betv2cbhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D <?= $hadiah['betv2cb2dket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cb2dmin'] ?></td>
                                            <td><?= $hadiah['betv2cb2ddisk'] ?></td>
                                            <td><?= $hadiah['betv2cb2dhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 3 Angka <?= $hadiah['betv2cb2d3ket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cb2d3min'] ?></td>
                                            <td><?= $hadiah['betv2cb2d3disk'] ?></td>
                                            <td><?= $hadiah['betv2cb2d3hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Bebas 2D 4 Angka <?= $hadiah['betv2cb2d4ket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cb2d4min'] ?></td>
                                            <td><?= $hadiah['betv2cb2d4disk'] ?></td>
                                            <td><?= $hadiah['betv2cb2d4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Naga <?= $hadiah['betv2cbnagaket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cbnagamin'] ?></td>
                                            <td><?= $hadiah['betv2cbnagadisk'] ?></td>
                                            <td><?= $hadiah['betv2cbnagahd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>C. Naga 4 Angka <?= $hadiah['betv2cbnaga4ket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cbnaga4min'] ?></td>
                                            <td><?= $hadiah['betv2cbnaga4disk'] ?></td>
                                            <td><?= $hadiah['betv2cbnaga4hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Colok Jitu <?= $hadiah['betv2cjituket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2cjitumin'] ?></td>
                                            <td><?= $hadiah['betv2cjitudisk'] ?></td>
                                            <td><?= $hadiah['betv2cjituhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tengah Tepi <?= $hadiah['betv2ttepiket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2ttepimin'] ?></td>
                                            <td><?= $hadiah['betv2ttepidisk'] ?></td>
                                            <td><?= $hadiah['betv2ttepihd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Dasar <?= $hadiah['betv2dsrket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2dsrmin'] ?></td>
                                            <td><?= $hadiah['betv2dsrdisk'] ?></td>
                                            <td><?= $hadiah['betv2dsrhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kombinasi <?= $hadiah['betv2kombket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2kombmin'] ?></td>
                                            <td><?= $hadiah['betv2kombdisk'] ?></td>
                                            <td><?= $hadiah['betv2kombhd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>50-50 <?= $hadiah['betv25050ket'] ?></td>
                                            <td>Rp <?= $hadiah['betv25050min'] ?></td>
                                            <td><?= $hadiah['betv25050disk'] ?></td>
                                            <td><?= $hadiah['betv25050hd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Shio <span class="showshow"><?= $hadiah['betv2shioket'] ?></span></td>
                                            <td>Rp <?= $hadiah['betv2shiomin'] ?></td>
                                            <td><?= $hadiah['betv2shiodisk'] ?></td>
                                            <td><?= $hadiah['betv2shiohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Silang Homo <?= $hadiah['betv2shomoket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2shomomin'] ?></td>
                                            <td><?= $hadiah['betv2shomodisk'] ?></td>
                                            <td><?= $hadiah['betv2shomohd'] ?></td>
                                        </tr>
                                        <tr>
                                            <td>Kembang Kempis <?= $hadiah['betv2kkempisket'] ?></td>
                                            <td>Rp <?= $hadiah['betv2kkempismin'] ?></td>
                                            <td><?= $hadiah['betv2kkempisdisk'] ?></td>
                                            <td><?= $hadiah['betv2kkempishd'] ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <p class="scrldown">Scroll<i class='fas fa-angle-double-down'></i></p>
                        </div>
                        <div style="margin: 10px 0;">
                            <object class="objlivepools" data="jadwalpools/index.php" type=""
                                style="width: 100%; overflow: hidden;"></object>
                            <div class="listbarubaru">
                                <div class="listbutjadwalmodal">
                                    <a href="listpools.php">Semua Jadwal</a>
                                    <a href="listpools.php">Lihat Prediksi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row__tombol tombollogodiskon">
                        <?php foreach ($row_website['data'] as $website) : ?>
                        <?php if ($website["website"] == $hadiah["website"]) : ?>
                        <img src="{{ URL::to('/') }}/front/img/logo/<?= $website['img'] ?>" alt="">
                        <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                                style="text-align: left; border-radius: 0 0 0 5px;"
                                class="buttonred btndaftar">DAFTAR</button></a>
                        <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                                style="text-align: right; border-radius: 0 0 5px 0;"
                                class="buttongreen btnlogin">PASANG</button></a>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <a href="<?= $website['promourl'] ?>" target="_blank"><img class="promotogel21"
                        src="{{ URL::to('/') }}/front/img/promo/promotogel/<?= $website['promotogel'] ?>"
                        alt=""></a>
            </div>

        </div>
        <?php endforeach; ?>
        <!-- end Modal hadiah -->

        <?php foreach ($row_website['data'] as $website) : ?>
        <!-- start Modal promo -->
        <div class="modal-rtp" id="promo-<?= $website['website'] ?>">
            <div class="modal-sandbox"></div>
            <div class="modal-box promomodal">
                <div class="close-modal">&#10006;</div>
                <div class="modal-header-hadiah">
                    <h1>PROMO <?= $website['website'] ?></h1>
                </div>
                <div class="modal-body-hadiah">
                    <div class="row__content__hadiah">

                        <object style="overflow: hidden;" width="100%" height="700px"
                            data="<?= $website['promourl'] ?>"></object>

                    </div>
                    <div class="row__tombol tombollogodiskon">
                        <img src="{{ URL::to('/') }}/front/img/logo/<?= $website['img'] ?>" alt="">
                        <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                                style="text-align: left; border-radius: 0 0 0 5px;"
                                class="buttonred btndaftar">DAFTAR</button></a>
                        <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                                style="text-align: right; border-radius: 0 0 5px 0;"
                                class="buttongreen btnlogin">LOGIN</button></a>
                    </div>
                </div>
            </div>

        </div>
        <?php endforeach; ?>
        <!-- end Modal promo -->

    </div>
    <!--end WEBSITE-->





    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="{{ asset('front/Js/script.js') }}"></script>
    <script src="{{ asset('front/Js/crew.js') }}"></script>


    @include('front.partial.footer', $row_kontak)
@endsection
