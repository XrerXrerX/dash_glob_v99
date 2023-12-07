<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lotto21</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
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

    <style>
        .hadiahdandiskon {
            margin: 10px 0;
            width: 100%;
        }

        .tombollogodiskon img {
            bottom: -11px;
        }

        .tombollogodiskon {
            width: 100%;
        }

        .modal-box {
            animation: none;
        }

        body {
            width: 100%;
        }

        .objlivepools {
            height: 6vh;
        }

        .listbutjadwalmodal a {
            margin: 0;
        }

        .tombollogodiskon {
            position: relative;
        }

        .grubbtnhd {
            width: 99.8%;
        }
    </style>
    <!-- start Modal hadiah -->
    <?php foreach( $row_hadiah as $hadiah ) : ?>

    <div class="modal-box hadiahdandiskon">
        <div class="modal-header-hadiah">
            <h1><?= $hadiah->website ?></h1>
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
                                    <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;" colspan="4">
                                        PEMASANGAN DISKON</th>
                                </tr>
                                <tr class="distabhead">
                                    <th style="width: 40%;">Jenis Bet</th>
                                    <th>Minimal Bet</th>
                                    <th>Diskon</th>
                                    <th>Hadiah</th>
                                </tr>
                                <tr>
                                    <td>4D <?= $hadiah->disc4dket ?></td>
                                    <td>Rp <?= $hadiah->disc4dmin ?></td>
                                    <td><?= $hadiah->disc4ddisk ?></td>
                                    <td><?= $hadiah->disc4dhd ?></td>
                                </tr>
                                <tr>
                                    <td>3D <?= $hadiah->disc3dket ?></td>
                                    <td>Rp <?= $hadiah->disc3dmin ?></td>
                                    <td><?= $hadiah->disc3ddisk ?></td>
                                    <td><?= $hadiah->disc3dhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Belakang <?= $hadiah->disc2dblkket ?></td>
                                    <td>Rp <?= $hadiah->disc2dblkmin ?></td>
                                    <td><?= $hadiah->disc2dblkdisk ?></td>
                                    <td><?= $hadiah->disc2dblkhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Depan <?= $hadiah->disc2ddpnket ?></td>
                                    <td>Rp <?= $hadiah->disc2ddpnmin ?></td>
                                    <td><?= $hadiah->disc2ddpndisk ?></td>
                                    <td><?= $hadiah->disc2ddpnhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Tengah <?= $hadiah->disc2dtghket ?></td>
                                    <td>Rp <?= $hadiah->disc2dtghmin ?></td>
                                    <td><?= $hadiah->disc2dtghdisk ?></td>
                                    <td><?= $hadiah->disc2dtghhd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Bebas <?= $hadiah->disccbket ?></td>
                                    <td>Rp <?= $hadiah->disccbmin ?></td>
                                    <td><?= $hadiah->disccbdisk ?></td>
                                    <td><?= $hadiah->disccbhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D <?= $hadiah->disccb2dket ?></td>
                                    <td>Rp <?= $hadiah->disccb2dmin ?></td>
                                    <td><?= $hadiah->disccb2ddisk ?></td>
                                    <td><?= $hadiah->disccb2dhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 3 Angka <?= $hadiah->disccb2d3ket ?></td>
                                    <td>Rp <?= $hadiah->disccb2d3min ?></td>
                                    <td><?= $hadiah->disccb2d3disk ?></td>
                                    <td><?= $hadiah->disccb2d3hd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 4 Angka <?= $hadiah->disccb2d4ket ?></td>
                                    <td>Rp <?= $hadiah->disccb2d4min ?></td>
                                    <td><?= $hadiah->disccb2d4disk ?></td>
                                    <td><?= $hadiah->disccb2d4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Naga <?= $hadiah->disccbnagaket ?></td>
                                    <td>Rp <?= $hadiah->disccbnagamin ?></td>
                                    <td><?= $hadiah->disccbnagadisk ?></td>
                                    <td><?= $hadiah->disccbnagahd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Naga 4 Angka <?= $hadiah->disccbnaga4ket ?></td>
                                    <td>Rp <?= $hadiah->disccbnaga4min ?></td>
                                    <td><?= $hadiah->disccbnaga4disk ?></td>
                                    <td><?= $hadiah->disccbnaga4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Jitu <?= $hadiah->disccjituket ?></td>
                                    <td>Rp <?= $hadiah->disccjitumin ?></td>
                                    <td><?= $hadiah->disccjitudisk ?></td>
                                    <td><?= $hadiah->disccjituhd ?></td>
                                </tr>
                                <tr>
                                    <td>Tengah Tepi <?= $hadiah->discttepiket ?></td>
                                    <td>Rp <?= $hadiah->discttepimin ?></td>
                                    <td><?= $hadiah->discttepidisk ?></td>
                                    <td><?= $hadiah->discttepihd ?></td>
                                </tr>
                                <tr>
                                    <td>Dasar <?= $hadiah->discdsrket ?></td>
                                    <td>Rp <?= $hadiah->discdsrmin ?></td>
                                    <td><?= $hadiah->discdsrdisk ?></td>
                                    <td><?= $hadiah->discdsrhd ?></td>
                                </tr>
                                <tr>
                                    <td>Kombinasi <?= $hadiah->disckombket ?></td>
                                    <td>Rp <?= $hadiah->disckombmin ?></td>
                                    <td><?= $hadiah->disckombdisk ?></td>
                                    <td><?= $hadiah->disckombhd ?></td>
                                </tr>
                                <tr>
                                    <td>50-50 <?= $hadiah->disc5050ket ?></td>
                                    <td>Rp <?= $hadiah->disc5050min ?></td>
                                    <td><?= $hadiah->disc5050disk ?></td>
                                    <td><?= $hadiah->disc5050hd ?></td>
                                </tr>
                                <tr>
                                    <td>Shio <span class="showshow"><?= $hadiah->discshioket ?></span></td>
                                    <td>Rp <?= $hadiah->discshiomin ?></td>
                                    <td><?= $hadiah->discshiodisk ?></td>
                                    <td><?= $hadiah->discshiohd ?></td>
                                </tr>
                                <tr>
                                    <td>Silang Homo <?= $hadiah->discshomoket ?></td>
                                    <td>Rp <?= $hadiah->discshomomin ?></td>
                                    <td><?= $hadiah->discshomodisk ?></td>
                                    <td><?= $hadiah->discshomohd ?></td>
                                </tr>
                                <tr>
                                    <td>Kembang Kempis <?= $hadiah->disckkempisket ?></td>
                                    <td>Rp <?= $hadiah->disckkempismin ?></td>
                                    <td><?= $hadiah->disckkempisdisk ?></td>
                                    <td><?= $hadiah->disckkempishd ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="tbbetfull" class="disdatahadiah" style="display: none">
                        <table>
                            <tbody>
                                <tr class="distabhead123">
                                    <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;" colspan="4">
                                        PEMASANGAN FULL</th>
                                </tr>
                                <tr class="distabhead">
                                    <th style="width: 40%;">Jenis Bet</th>
                                    <th>Minimal Bet</th>
                                    <th>Diskon</th>
                                    <th>Hadiah</th>
                                </tr>
                                <tr>
                                    <td>4D <?= $hadiah->full4dket ?></td>
                                    <td>Rp <?= $hadiah->full4dmin ?></td>
                                    <td><?= $hadiah->full4ddisk ?></td>
                                    <td><?= $hadiah->full4dhd ?></td>
                                </tr>
                                <tr>
                                    <td>3D <?= $hadiah->full3dket ?></td>
                                    <td>Rp <?= $hadiah->full3dmin ?></td>
                                    <td><?= $hadiah->full3ddisk ?></td>
                                    <td><?= $hadiah->full3dhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Belakang <?= $hadiah->full2dblkket ?></td>
                                    <td>Rp <?= $hadiah->full2dblkmin ?></td>
                                    <td><?= $hadiah->full2dblkdisk ?></td>
                                    <td><?= $hadiah->full2dblkhd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Bebas <?= $hadiah->fullcbket ?></td>
                                    <td>Rp <?= $hadiah->fullcbmin ?></td>
                                    <td><?= $hadiah->fullcbdisk ?></td>
                                    <td><?= $hadiah->fullcbdisk ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D <?= $hadiah->fullcb2dket ?></td>
                                    <td>Rp <?= $hadiah->fullcb2dmin ?></td>
                                    <td><?= $hadiah->fullcb2ddisk ?></td>
                                    <td><?= $hadiah->fullcb2dhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 3 Angka <?= $hadiah->fullcb2d3ket ?></td>
                                    <td>Rp <?= $hadiah->fullcb2d3min ?></td>
                                    <td><?= $hadiah->fullcb2d3disk ?></td>
                                    <td><?= $hadiah->fullcb2d3hd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 4 Angka <?= $hadiah->fullcb2d4ket ?></td>
                                    <td>Rp <?= $hadiah->fullcb2d4min ?></td>
                                    <td><?= $hadiah->fullcb2d4disk ?></td>
                                    <td><?= $hadiah->fullcb2d4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Naga <?= $hadiah->fullcbnagaket ?></td>
                                    <td>Rp <?= $hadiah->fullcbnagamin ?></td>
                                    <td><?= $hadiah->fullcbnagadisk ?></td>
                                    <td><?= $hadiah->fullcbnagahd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Naga 4 Angka <?= $hadiah->fullcbnaga4ket ?></td>
                                    <td>Rp <?= $hadiah->fullcbnaga4min ?></td>
                                    <td><?= $hadiah->fullcbnaga4disk ?></td>
                                    <td><?= $hadiah->fullcbnaga4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Jitu <?= $hadiah->fullcjituket ?></td>
                                    <td>Rp <?= $hadiah->fullcjitumin ?></td>
                                    <td><?= $hadiah->fullcjitudisk ?></td>
                                    <td><?= $hadiah->fullcjituhd ?></td>
                                </tr>
                                <tr>
                                    <td>Tengah Tepi <?= $hadiah->fullttepiket ?></td>
                                    <td>Rp <?= $hadiah->fullttepimin ?></td>
                                    <td><?= $hadiah->fullttepidisk ?></td>
                                    <td><?= $hadiah->fullttepihd ?></td>
                                </tr>
                                <tr>
                                    <td>Dasar <?= $hadiah->fulldsrket ?></td>
                                    <td>Rp <?= $hadiah->fulldsrmin ?></td>
                                    <td><?= $hadiah->fulldsrdisk ?></td>
                                    <td><?= $hadiah->fulldsrhd ?></td>
                                </tr>
                                <tr>
                                    <td>Kombinasi <?= $hadiah->fullkombket ?></td>
                                    <td>Rp <?= $hadiah->fullkombmin ?></td>
                                    <td><?= $hadiah->fullkombdisk ?></td>
                                    <td><?= $hadiah->fullkombhd ?></td>
                                </tr>
                                <tr>
                                    <td>50-50 <?= $hadiah->full5050ket ?></td>
                                    <td>Rp <?= $hadiah->full5050min ?></td>
                                    <td><?= $hadiah->full5050disk ?></td>
                                    <td><?= $hadiah->full5050hd ?></td>
                                </tr>
                                <tr>
                                    <td>Shio <span class="showshow"><?= $hadiah->fullshioket ?></span></td>
                                    <td>Rp <?= $hadiah->fullshiomin ?></td>
                                    <td><?= $hadiah->fullshiodisk ?></td>
                                    <td><?= $hadiah->fullshiohd ?></td>
                                </tr>
                                <tr>
                                    <td>Silang Homo <?= $hadiah->fullshomoket ?></td>
                                    <td>Rp <?= $hadiah->fullshomomin ?></td>
                                    <td><?= $hadiah->fullshomodisk ?></td>
                                    <td><?= $hadiah->fullshomohd ?></td>
                                </tr>
                                <tr>
                                    <td>Kembang Kempis <?= $hadiah->fullkkempisket ?></td>
                                    <td>Rp <?= $hadiah->fullkkempismin ?></td>
                                    <td><?= $hadiah->fullkkempisdisk ?></td>
                                    <td><?= $hadiah->fullkkempishd ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="tbbetbb" class="disdatahadiah" style="display: none">
                        <table>
                            <tbody>
                                <tr class="distabhead123">
                                    <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;" colspan="4">
                                        PEMASANGAN BOLAK BALIK</th>
                                </tr>
                                <tr class="distabhead">
                                    <th style="width: 40%;">Jenis Bet</th>
                                    <th>Minimal Bet</th>
                                    <th>Diskon</th>
                                    <th>Hadiah</th>
                                </tr>
                                <tr>
                                    <td>4D (TEPAT) <?= $hadiah->betbb4dtptket ?></td>
                                    <td>Rp <?= $hadiah->betbb4dtptmin ?></td>
                                    <td><?= $hadiah->betbb4dtptdisk ?></td>
                                    <td><?= $hadiah->betbb4dtpthd ?></td>
                                </tr>
                                <tr>
                                    <td>4D (TERBALIK) <?= $hadiah->betbb4dblkket ?></td>
                                    <td>Rp <?= $hadiah->betbb4dblkmin ?></td>
                                    <td><?= $hadiah->betbb4dblkdisk ?></td>
                                    <td><?= $hadiah->betbb4dblkhd ?></td>
                                </tr>
                                <tr>
                                    <td>3D (TEPAT) <?= $hadiah->betbb3dtptket ?></td>
                                    <td>Rp <?= $hadiah->betbb3dtptmin ?></td>
                                    <td><?= $hadiah->betbb3dtptdisk ?></td>
                                    <td><?= $hadiah->betbb3dtpthd ?></td>
                                </tr>
                                <tr>
                                    <td>3D (TERBALIK) <?= $hadiah->betbb3dblkket ?></td>
                                    <td>Rp <?= $hadiah->betbb3dblkmin ?></td>
                                    <td><?= $hadiah->betbb3dblkdisk ?></td>
                                    <td><?= $hadiah->betbb3dblkhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Belakang (TEPAT) <?= $hadiah->betbb2dtptblkket ?></td>
                                    <td>Rp <?= $hadiah->betbb2dtptblkmin ?></td>
                                    <td><?= $hadiah->betbb2dtptblkdisk ?></td>
                                    <td><?= $hadiah->betbb2dtptblkhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Belakang (TERBALIK) <?= $hadiah->betbb2dblkket ?></td>
                                    <td>Rp <?= $hadiah->betbb2dblkmin ?></td>
                                    <td><?= $hadiah->betbb2dblkdisk ?></td>
                                    <td><?= $hadiah->betbb2dblkhd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Bebas <?= $hadiah->betbbcbket ?></td>
                                    <td>Rp <?= $hadiah->betbbcbmin ?></td>
                                    <td><?= $hadiah->betbbcbdisk ?></td>
                                    <td><?= $hadiah->betbbcbhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D <?= $hadiah->betbbcb2dket ?></td>
                                    <td>Rp <?= $hadiah->betbbcb2dmin ?></td>
                                    <td><?= $hadiah->betbbcb2ddisk ?></td>
                                    <td><?= $hadiah->betbbcb2dhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 3 Angka <?= $hadiah->betbbcb2d3ket ?></td>
                                    <td>Rp <?= $hadiah->betbbcb2d3min ?></td>
                                    <td><?= $hadiah->betbbcb2d3disk ?></td>
                                    <td><?= $hadiah->betbbcb2d3hd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 4 Angka <?= $hadiah->betbbcb2d4ket ?></td>
                                    <td>Rp <?= $hadiah->betbbcb2d4min ?></td>
                                    <td><?= $hadiah->betbbcb2d4disk ?></td>
                                    <td><?= $hadiah->betbbcb2d4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Naga <?= $hadiah->betbbcbnagaket ?></td>
                                    <td>Rp <?= $hadiah->betbbcbnagamin ?></td>
                                    <td><?= $hadiah->betbbcbnagadisk ?></td>
                                    <td><?= $hadiah->betbbcbnagahd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Naga 4 Angka <?= $hadiah->betbbcbnaga4ket ?></td>
                                    <td>Rp <?= $hadiah->betbbcbnaga4min ?></td>
                                    <td><?= $hadiah->betbbcbnaga4disk ?></td>
                                    <td><?= $hadiah->betbbcbnaga4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Jitu <?= $hadiah->betbbcjituket ?></td>
                                    <td>Rp <?= $hadiah->betbbcjitumin ?></td>
                                    <td><?= $hadiah->betbbcjitudisk ?></td>
                                    <td><?= $hadiah->betbbcjituhd ?></td>
                                </tr>
                                <tr>
                                    <td>Tengah Tepi <?= $hadiah->betbbttepiket ?></td>
                                    <td>Rp <?= $hadiah->betbbttepimin ?></td>
                                    <td><?= $hadiah->betbbttepidisk ?></td>
                                    <td><?= $hadiah->betbbttepihd ?></td>
                                </tr>
                                <tr>
                                    <td>Dasar <?= $hadiah->betbbdsrket ?></td>
                                    <td>Rp <?= $hadiah->betbbdsrmin ?></td>
                                    <td><?= $hadiah->betbbdsrdisk ?></td>
                                    <td><?= $hadiah->betbbdsrhd ?></td>
                                </tr>
                                <tr>
                                    <td>Kombinasi <?= $hadiah->betbbkombket ?></td>
                                    <td>Rp <?= $hadiah->betbbkombmin ?></td>
                                    <td><?= $hadiah->betbbkombdisk ?></td>
                                    <td><?= $hadiah->betbbkombhd ?></td>
                                </tr>
                                <tr>
                                    <td>50-50 <?= $hadiah->betbb5050ket ?></td>
                                    <td>Rp <?= $hadiah->betbb5050min ?></td>
                                    <td><?= $hadiah->betbb5050disk ?></td>
                                    <td><?= $hadiah->betbb5050hd ?></td>
                                </tr>
                                <tr>
                                    <td>Shio <span class="showshow"><?= $hadiah->betbbshioket ?></span></td>
                                    <td>Rp <?= $hadiah->betbbshiomin ?></td>
                                    <td><?= $hadiah->betbbshiodisk ?></td>
                                    <td><?= $hadiah->betbbshiohd ?></td>
                                </tr>
                                <tr>
                                    <td>Silang Homo <?= $hadiah->betbbshomoket ?></td>
                                    <td>Rp <?= $hadiah->betbbshomomin ?></td>
                                    <td><?= $hadiah->betbbshomodisk ?></td>
                                    <td><?= $hadiah->betbbshomohd ?></td>
                                </tr>
                                <tr>
                                    <td>Kembang Kempis <?= $hadiah->betbbkkempisket ?></td>
                                    <td>Rp <?= $hadiah->betbbkkempismin ?></td>
                                    <td><?= $hadiah->betbbkkempisdisk ?></td>
                                    <td><?= $hadiah->betbbkkempishd ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div id="tbbetprize" class="disdatahadiah" style="display: none">
                        <table>
                            <tbody>
                                <tr class="distabhead123">
                                    <th style="text-align: center; text-shadow: 1px 1px 2px #00000085;" colspan="4">
                                        PEMASANGAN PRIZE 123</th>
                                </tr>
                                <tr class="distabhead">
                                    <th style="width: 40%;">Jenis Bet</th>
                                    <th>Minimal Bet</th>
                                    <th>Diskon</th>
                                    <th>Hadiah</th>
                                </tr>
                                <tr>
                                    <td>4D (PRIZE 1) <?= $hadiah->prize4dp1ket ?></td>
                                    <td>Rp <?= $hadiah->prize4dp1min ?></td>
                                    <td><?= $hadiah->prize4dp1disk ?></td>
                                    <td><?= $hadiah->prize4dp1hd ?></td>
                                </tr>
                                <tr>
                                    <td>4D (PRIZE 2) <?= $hadiah->prize4dp2ket ?></td>
                                    <td>Rp <?= $hadiah->prize4dp2min ?></td>
                                    <td><?= $hadiah->prize4dp2disk ?></td>
                                    <td><?= $hadiah->prize4dp2hd ?></td>
                                </tr>
                                <tr>
                                    <td>4D (PRIZE 3) <?= $hadiah->prize4dp3ket ?></td>
                                    <td>Rp <?= $hadiah->prize4dp3min ?></td>
                                    <td><?= $hadiah->prize4dp3disk ?></td>
                                    <td><?= $hadiah->prize4dp3hd ?></td>
                                </tr>
                                <tr>
                                    <td>3D (PRIZE 1) <?= $hadiah->prize3dp1ket ?></td>
                                    <td>Rp <?= $hadiah->prize3dp1min ?></td>
                                    <td><?= $hadiah->prize3dp1disk ?></td>
                                    <td><?= $hadiah->prize3dp1hd ?></td>
                                </tr>
                                <tr>
                                    <td>3D (PRIZE 2) <?= $hadiah->prize3dp2ket ?></td>
                                    <td>Rp <?= $hadiah->prize3dp2min ?></td>
                                    <td><?= $hadiah->prize3dp2disk ?></td>
                                    <td><?= $hadiah->prize3dp2hd ?></td>
                                </tr>
                                <tr>
                                    <td>3D (PRIZE 3) <?= $hadiah->prize3dp3ket ?></td>
                                    <td>Rp <?= $hadiah->prize3dp3min ?></td>
                                    <td><?= $hadiah->prize3dp3disk ?></td>
                                    <td><?= $hadiah->prize3dp3hd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Depan/Tengah/Belakang (PRIZE 1) <?= $hadiah->prize2dp1ket ?></td>
                                    <td>Rp <?= $hadiah->prize2dp1min ?></td>
                                    <td><?= $hadiah->prize2dp1disk ?></td>
                                    <td><?= $hadiah->prize2dp1hd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Depan/Tengah/Belakang (PRIZE 2) <?= $hadiah->prize2dp2ket ?></td>
                                    <td>Rp <?= $hadiah->prize2dp2min ?></td>
                                    <td><?= $hadiah->prize2dp2disk ?></td>
                                    <td><?= $hadiah->prize2dp2hd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Depan/Tengah/Belakang (PRIZE 3) <?= $hadiah->prize2dp3ket ?></td>
                                    <td>Rp <?= $hadiah->prize2dp3min ?></td>
                                    <td><?= $hadiah->prize2dp3disk ?></td>
                                    <td><?= $hadiah->prize2dp3hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Bebas <?= $hadiah->prizecbket ?></td>
                                    <td>Rp <?= $hadiah->prizecbmin ?></td>
                                    <td><?= $hadiah->prizecbdisk ?></td>
                                    <td><?= $hadiah->prizecbhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D <?= $hadiah->prizecb2dket ?></td>
                                    <td>Rp <?= $hadiah->prizecb2dmin ?></td>
                                    <td><?= $hadiah->prizecb2ddisk ?></td>
                                    <td><?= $hadiah->prizecb2dhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 3 Angka <?= $hadiah->prizecb2d3ket ?></td>
                                    <td>Rp <?= $hadiah->prizecb2d3min ?></td>
                                    <td><?= $hadiah->prizecb2d3disk ?></td>
                                    <td><?= $hadiah->prizecb2d3hd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 4 Angka <?= $hadiah->prizecb2d4ket ?></td>
                                    <td>Rp <?= $hadiah->prizecb2d4min ?></td>
                                    <td><?= $hadiah->prizecb2d4disk ?></td>
                                    <td><?= $hadiah->prizecb2d4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Naga <?= $hadiah->prizecbnagaket ?></td>
                                    <td>Rp <?= $hadiah->prizecbnagamin ?></td>
                                    <td><?= $hadiah->prizecbnagadisk ?></td>
                                    <td><?= $hadiah->prizecbnagahd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Naga 4 Angka <?= $hadiah->prizecbnaga4ket ?></td>
                                    <td>Rp <?= $hadiah->prizecbnaga4min ?></td>
                                    <td><?= $hadiah->prizecbnaga4disk ?></td>
                                    <td><?= $hadiah->prizecbnaga4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Jitu <?= $hadiah->prizecjituket ?></td>
                                    <td>Rp <?= $hadiah->prizecjitumin ?></td>
                                    <td><?= $hadiah->prizecjitudisk ?></td>
                                    <td><?= $hadiah->prizecjituhd ?></td>
                                </tr>
                                <tr>
                                    <td>Tengah Tepi <?= $hadiah->prizettepiket ?></td>
                                    <td>Rp <?= $hadiah->prizettepimin ?></td>
                                    <td><?= $hadiah->prizettepidisk ?></td>
                                    <td><?= $hadiah->prizettepihd ?></td>
                                </tr>
                                <tr>
                                    <td>Dasar <?= $hadiah->prizedsrket ?></td>
                                    <td>Rp <?= $hadiah->prizedsrmin ?></td>
                                    <td><?= $hadiah->prizedsrdisk ?></td>
                                    <td><?= $hadiah->prizedsrhd ?></td>
                                </tr>
                                <tr>
                                    <td>Kombinasi <?= $hadiah->prizekombket ?></td>
                                    <td>Rp <?= $hadiah->prizekombmin ?></td>
                                    <td><?= $hadiah->prizekombdisk ?></td>
                                    <td><?= $hadiah->prizekombhd ?></td>
                                </tr>
                                <tr>
                                    <td>50-50 <?= $hadiah->prize5050ket ?></td>
                                    <td>Rp <?= $hadiah->prize5050min ?></td>
                                    <td><?= $hadiah->prize5050disk ?></td>
                                    <td><?= $hadiah->prize5050hd ?></td>
                                </tr>
                                <tr>
                                    <td>Shio <span class="showshow"><?= $hadiah->prizeshioket ?></span></td>
                                    <td>Rp <?= $hadiah->prizeshiomin ?></td>
                                    <td><?= $hadiah->prizeshiodisk ?></td>
                                    <td><?= $hadiah->prizeshiohd ?></td>
                                </tr>
                                <tr>
                                    <td>Silang Homo <?= $hadiah->prizeshomoket ?></td>
                                    <td>Rp <?= $hadiah->prizeshomomin ?></td>
                                    <td><?= $hadiah->prizeshomodisk ?></td>
                                    <td><?= $hadiah->prizeshomohd ?></td>
                                </tr>
                                <tr>
                                    <td>Kembang Kempis <?= $hadiah->prizekkempisket ?></td>
                                    <td>Rp <?= $hadiah->prizekkempismin ?></td>
                                    <td><?= $hadiah->prizekkempisdisk ?></td>
                                    <td><?= $hadiah->prizekkempishd ?></td>
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
                                    <td>4D <?= $hadiah->betv24dket ?></td>
                                    <td>Rp <?= $hadiah->betv24dmin ?></td>
                                    <td><?= $hadiah->betv24ddisk ?></td>
                                    <td><?= $hadiah->betv24dhd ?></td>
                                </tr>
                                <tr>
                                    <td>3D <?= $hadiah->betv23dket ?></td>
                                    <td>Rp <?= $hadiah->betv23dmin ?></td>
                                    <td><?= $hadiah->betv23ddisk ?></td>
                                    <td><?= $hadiah->betv23dhd ?></td>
                                </tr>
                                <tr>
                                    <td>2D Depan/Tengah/Belakang <?= $hadiah->betv22dket ?></td>
                                    <td>Rp <?= $hadiah->betv22dmin ?></td>
                                    <td><?= $hadiah->betv22ddisk ?></td>
                                    <td><?= $hadiah->betv22dhd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Bebas <?= $hadiah->betv2cbket ?></td>
                                    <td>Rp <?= $hadiah->betv2cbmin ?></td>
                                    <td><?= $hadiah->betv2cbdisk ?></td>
                                    <td><?= $hadiah->betv2cbhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D <?= $hadiah->betv2cb2dket ?></td>
                                    <td>Rp <?= $hadiah->betv2cb2dmin ?></td>
                                    <td><?= $hadiah->betv2cb2ddisk ?></td>
                                    <td><?= $hadiah->betv2cb2dhd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 3 Angka <?= $hadiah->betv2cb2d3ket ?></td>
                                    <td>Rp <?= $hadiah->betv2cb2d3min ?></td>
                                    <td><?= $hadiah->betv2cb2d3disk ?></td>
                                    <td><?= $hadiah->betv2cb2d3hd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Bebas 2D 4 Angka <?= $hadiah->betv2cb2d4ket ?></td>
                                    <td>Rp <?= $hadiah->betv2cb2d4min ?></td>
                                    <td><?= $hadiah->betv2cb2d4disk ?></td>
                                    <td><?= $hadiah->betv2cb2d4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Naga <?= $hadiah->betv2cbnagaket ?></td>
                                    <td>Rp <?= $hadiah->betv2cbnagamin ?></td>
                                    <td><?= $hadiah->betv2cbnagadisk ?></td>
                                    <td><?= $hadiah->betv2cbnagahd ?></td>
                                </tr>
                                <tr>
                                    <td>C. Naga 4 Angka <?= $hadiah->betv2cbnaga4ket ?></td>
                                    <td>Rp <?= $hadiah->betv2cbnaga4min ?></td>
                                    <td><?= $hadiah->betv2cbnaga4disk ?></td>
                                    <td><?= $hadiah->betv2cbnaga4hd ?></td>
                                </tr>
                                <tr>
                                    <td>Colok Jitu <?= $hadiah->betv2cjituket ?></td>
                                    <td>Rp <?= $hadiah->betv2cjitumin ?></td>
                                    <td><?= $hadiah->betv2cjitudisk ?></td>
                                    <td><?= $hadiah->betv2cjituhd ?></td>
                                </tr>
                                <tr>
                                    <td>Tengah Tepi <?= $hadiah->betv2ttepiket ?></td>
                                    <td>Rp <?= $hadiah->betv2ttepimin ?></td>
                                    <td><?= $hadiah->betv2ttepidisk ?></td>
                                    <td><?= $hadiah->betv2ttepihd ?></td>
                                </tr>
                                <tr>
                                    <td>Dasar <?= $hadiah->betv2dsrket ?></td>
                                    <td>Rp <?= $hadiah->betv2dsrmin ?></td>
                                    <td><?= $hadiah->betv2dsrdisk ?></td>
                                    <td><?= $hadiah->betv2dsrhd ?></td>
                                </tr>
                                <tr>
                                    <td>Kombinasi <?= $hadiah->betv2kombket ?></td>
                                    <td>Rp <?= $hadiah->betv2kombmin ?></td>
                                    <td><?= $hadiah->betv2kombdisk ?></td>
                                    <td><?= $hadiah->betv2kombhd ?></td>
                                </tr>
                                <tr>
                                    <td>50-50 <?= $hadiah->betv25050ket ?></td>
                                    <td>Rp <?= $hadiah->betv25050min ?></td>
                                    <td><?= $hadiah->betv25050disk ?></td>
                                    <td><?= $hadiah->betv25050hd ?></td>
                                </tr>
                                <tr>
                                    <td>Shio <span class="showshow"><?= $hadiah->betv2shioket ?></span></td>
                                    <td>Rp <?= $hadiah->betv2shiomin ?></td>
                                    <td><?= $hadiah->betv2shiodisk ?></td>
                                    <td><?= $hadiah->betv2shiohd ?></td>
                                </tr>
                                <tr>
                                    <td>Silang Homo <?= $hadiah->betv2shomoket ?></td>
                                    <td>Rp <?= $hadiah->betv2shomomin ?></td>
                                    <td><?= $hadiah->betv2shomodisk ?></td>
                                    <td><?= $hadiah->betv2shomohd ?></td>
                                </tr>
                                <tr>
                                    <td>Kembang Kempis <?= $hadiah->betv2kkempisket ?></td>
                                    <td>Rp <?= $hadiah->betv2kkempismin ?></td>
                                    <td><?= $hadiah->betv2kkempisdisk ?></td>
                                    <td><?= $hadiah->betv2kkempishd ?></td>
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
                <?php foreach( $row_website as $website ) : ?>

                <?php if($website["website"] == $hadiah->website): ?>
                <img src="{{ URL::to('/') }}/front/img/logo/<?= $website['img'] ?>" alt="">
                <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                        style="text-align: left; border-radius: 0 0 0 5px;"
                        class="buttonred btndaftar">DAFTAR</button></a>
                <a href="<?= $website['linkbutton'] ?>" target="_blank"><button
                        style="text-align: right; border-radius: 0 0 5px 0;"
                        class="buttongreen btnlogin">PASANG</button></a>
            </div>
        </div>
        <img class="promotogel21" src="{{ URL::to('/') }}/front/img/promo/promotogel/<?= $website['promotogel'] ?>"
            alt="">
    </div>

    </div>
    <?php endif; ?>
    <?php endforeach; ?>
    <?php endforeach; ?>
    <!-- end Modal hadiah -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Fungsi untuk menampilkan class disdatahadiah yang sesuai
            function showSelectedDataHadiah(target) {
                $('.disdatahadiah').each(function() {
                    if ($(this).attr('id') === target) {
                        $(this).css('display', 'block');
                    } else {
                        $(this).css('display', 'none');
                    }
                });
            }

            // Event ketika tombol tbbtn diklik
            $('.tbbtn').on('click', function() {
                // Hapus class active dari semua tombol tbbtn
                $('.tbbtn').removeClass('active');
                // Tambahkan class active ke tombol yang diklik
                $(this).addClass('active');

                // Ambil nilai data-target dari tombol yang diklik
                var target = $(this).data('target');

                // Tampilkan class disdatahadiah yang sesuai
                showSelectedDataHadiah(target);
            });
        });
    </script>
</body>

</html>
