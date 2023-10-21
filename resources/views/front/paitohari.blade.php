<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'dash_glob_v99';
$dsn = "mysql:host=$host;dbname=$db";
try {
    $pdo = new PDO($dsn, $user, $pass);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

$selected_pasaran = isset($_POST['pasaran']) ? $_POST['pasaran'] : 'pilih pasarannya';

session_start();
$selected_pasaran = isset($_SESSION['selected_pasaran']) ? $_SESSION['selected_pasaran'] : '';

if (isset($_POST['pasaran'])) {
    $selected_pasaran = $_POST['pasaran'];
    $_SESSION['selected_pasaran'] = $selected_pasaran;
    // Save the selected pasaran to localStorage
    echo "<script>localStorage.setItem('selected_pasaran', '$selected_pasaran');</script>";
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Lotto21Group : Paito l21</title>
    <link rel="canonical" href="https://lotto21group.com/">
    <link rel="icon" href="{{ URL::to('/') }}/front/img//favicon.ico">
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="{{ URL::to('/') }}/front/paito/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::to('/') }}/front/paito/css/style.css" rel="stylesheet">
    <script src="{{ URL::to('/') }}/front/paito/js/bootstrap.bundle.min.js"></script>
    <!-- sweet alert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <link rel="stylesheet" href="{{ URL::to('/') }}/front/style.css">
    <script src="{{ URL::to('/') }}/front/paito/js/jquery-3.6.3.js"></script>
    <script src="{{ URL::to('/') }}/front/paito/js/ajax.js"></script>
    <script src="{{ URL::to('/') }}/front/paito/js/script.js"></script>
</head>

<body>

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

    @include('front.partial.navbar');

    <!--start KONTAINER UTAMA-->
    <div class="container part2">

        <div class="section jadwalpools">
            <object class="objlivepools" data="../../jadwalpools/index.php" type=""
                style="width: 100%; overflow: hidden;"></object>
            <div class="listbarubaru">
                <div class="listbutjadwal">
                    <a href="../../listpools.php">Semua Jadwal</a>
                    <a href="../../listpools.php">Lihat Prediksi</a>
                    <a href="../../index.php?=#groupwebsite">Pasang Sekarang</a>
                </div>
            </div>
        </div>

        <div class="section containerrtp">

            <input type="hidden" id="selected-pasaran" name="selected_pasaran"
                data-selected-pasaran="<?php echo $selected_pasaran; ?>">
            <div id="container-style" class="container">
                <div id="row-style" class="row">
                </div>
                <form method="post">
                    @csrf
                    <div id="card-head" class="card w-90 mb-3">
                        <div class="card-body" id="card-body">
                            <div class="container text-center">
                                <div class="row">
                                    <div class="col">
                                        <div class="dropdown-center">
                                            <button id="btn-dropdown" class="btn buttonred dropdown-toggle btn-col"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                7 Col
                                            </button>
                                            <ul class="dropdown-menu" id="dropdown-menu-style">
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol7" onclick="">7 Col</a></li>
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol6" onclick="toggleColumn(6)">6 Col</a></li>
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol5" onclick="toggleColumn(5)">5 Col</a></li>
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol4" onclick="toggleColumn(4)">4 Col</a></li>
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol3" onclick="toggleColumn(3)">3 Col</a></li>
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol2" onclick="toggleColumn(2)">2 Col</a></li>
                                                <li><a id="dropdown-item" class="dropdown-item" href="#"
                                                        data-value="kol1" onclick="toggleColumn(1)">1 Col</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown-center">
                                            <button id="btn-dropdown-harian" class="btn buttonred dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                {{ $hari == '' ? 'Harian' : ucfirst($hari) }}
                                            </button>
                                            <ul class="dropdown-menu" id="dropdown-menu-harian">
                                                <li><a id="semua" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paito/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="semua hari">Semua hari</a></li>
                                                <li><a id="senin" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/senin/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="senin">Senin</a></li>
                                                <li><a id="selasa" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/selasa/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="selasa">Selasa</a></li>
                                                <li><a id="rabu" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/rabu/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="rabu">Rabu</a></li>
                                                <li><a id="kamis" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/kamis/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="kamis">Kamis</a></li>
                                                <li><a id="jumat" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/jumat/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="jumat">Jumat</a></li>
                                                <li><a id="sabtu" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/sabtu/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="sabtu">Sabtu</a></li>
                                                <li><a id="minggu" class="dropdown-item"
                                                        href="{{ URL::to('/') }}/paitohari/minggu/{{ $selected_pasaran == '' ? 'HONGKONG' : $selected_pasaran }}"
                                                        data-value="minggu">Minggu</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="dropdown-center">
                                            <button id="btn-dropdown" class="btn buttonred dropdown-toggle"
                                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <?= $selected_pasaran ?>
                                            </button>
                                            <ul class="dropdown-menu" id="dropdown-menu-style">
                                                <li>
                                                    <form method="POST">
                                                        @csrf
                                                        <?php foreach( $rows as $row ) : ?>
                                                        <input type="submit" class="dropdown-item" name="pasaran"
                                                            id="pasaran" value="<?= $row['pasaran_nama'] ?>"
                                                            <?= $row['pasaran_nama'] === $selected_pasaran ? 'disabled' : '' ?>>
                                                        <?php endforeach; ?>
                                                    </form>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <h5 class="card-title"><?php echo 'TABEL PAITO : ' . $selected_pasaran . ''; ?></h5>
                                <hr>
                                <div id="color-palette" draggable="true">
                                    <div class="colorPicker">
                                        @include('front.coba')
                                    </div>
                                    <?php
                                    $resultpasaran = [];
                                    $tables = []; // Set nilai awal variabel $tables
                                    
                                    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    //     $selected_pasaran = isset($_POST['pasaran']) ? $_POST['pasaran'] : (isset($_SESSION['selected_pasaran']) ? $_SESSION['selected_pasaran'] : 'pilih pasarannya');
                                    // } else {
                                    //     $selected_pasaran = isset($_GET['selected_pasaran']) ? $_GET['selected_pasaran'] : 'pilih pasarannya';
                                    // }
                                    
                                    // Validasi nilai $selected_pasaran
                                    if (isset($selected_pasaran) && $selected_pasaran !== 'pilih pasarannya') {
                                        $tables = $querytable;
                                    
                                        if (count($tables) > 0) {
                                            // Kode lainnya di sini
                                        } else {
                                            echo 'Tidak ada data yang ditemukan.';
                                        }
                                    } else {
                                        echo 'Harap pilih pasaran terlebih dahulu.';
                                        // Tampilkan pesan kesalahan atau lakukan tindakan lain jika nilai $selected_pasaran null atau tidak valid
                                    }
                                    
                                    ?>
                                    <div id="table-container" class="container">
                                        <table id="my-table" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <td id="thead" colspan="5">
                                                        <h3>{{ $hari == '' ? '' : ucfirst($hari) }}</h3>
                                                    </td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($tables as $table): ?>
                                                <?php $result_digits = str_split(str_replace(',', '', $table['result'])); ?>
                                                <?php for ($i = 0; $i < count($result_digits); $i++): ?>
                                                <?php if ($i % 5 == 0): ?>
                                                <tr class="number">
                                                    <?php endif; ?>
                                                    <td class="td-kolom">
                                                        <span class="angka"><?= $result_digits[$i] ?></span>
                                                    </td>
                                                    <?php if (($i + 1) % 5 == 0 || $i == count($result_digits) - 1): ?>
                                                </tr>
                                                <?php endif; ?>
                                                <?php endfor; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="askopkepekr">
                                    <label for="as"></label>
                                    <input type="text" id="as" name="as" placeholder="as"
                                        data-label="as" maxlength="1" pattern="[0-9]">

                                    <label for="kop"></label>
                                    <input type="text" id="kop" name="kop" placeholder="kop"
                                        data-label="kop" maxlength="1" pattern="[0-9]">

                                    <label for="kepala"></label>
                                    <input type="text" id="kepala" name="kepala" placeholder="kepala"
                                        data-label="kepala" maxlength="1" pattern="[0-9]">

                                    <label for="ekor"></label>
                                    <input type="text" id="ekor" name="ekor" placeholder="ekor"
                                        data-label="ekor" maxlength="1" pattern="[0-9]">

                                    <label for="jumlah"></label>
                                    <input type="text" id="jumlah" name="jumlah" placeholder="jumlah"
                                        data-label="jumlah" maxlength="1" pattern="[0-9]">

                                    <button style="color: white;" class="buttongreen"
                                        id="reset-button">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>

    @include('front.partial.footer', $row_kontak);

    <script src="{{ URL::to('/') }}/front/paito/js/colorpicker.js"></script>
    <script src="{{ URL::to('/') }}/front/paito/js/paito.js"></script>
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
