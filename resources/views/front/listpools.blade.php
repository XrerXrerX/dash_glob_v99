<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lotto21top : Jadwal Pools l21</title>
    <link rel="canonical" href="https://lotto21top.com/">
    <link rel="icon" href="{{ URL::to('/') }}/front/img/favicon.ico">
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
    @include('front.partial.navbar');
    <?php
    
    ?>

    <!--start KONTAINER UTAMA-->
    <div class="container part2">
        <div class="section jdpools">
            <h1 class="jdljdl">JADWAL PASARAN</h1>
            <p id="clock"></p>
            <div class="bagsearch">
                <div class="grubsearchjadwal">
                    <i class='fab fa-searchengin'></i>
                    <input type="text" placeholder="Cari Pasaran..." id="searchPasaran">
                </div>
            </div>
            <table>
                <tbody>
                    <tr class="kepalatble">
                        <th style="width: 25%;">Nama Pasaran</th>
                        <th>Jam Tutup <span>(WIB)</span></th>
                        <th>Jam Result <span>(WIB)</span></sup></th>
                        <th>Sisa Waktu Pasang</th>
                        <th colspan="3">Link Resmi</th>
                    </tr>
                    <?php foreach ($row_jadwalpools as $jadwalpools) : ?>
                    <tr class="barisdepan">
                        <td class="namapas">
                            <p><?= $jadwalpools['pasaran'] ?></p><img
                                src="{{ URL::to('/') }}/front/img/pools/logo/<?= $jadwalpools['logo'] ?>"
                                alt="">
                        </td>
                        <td class="jamtutup"><?= $jadwalpools['jamtutup'] ?></td>
                        <td class="jamresult"><?= $jadwalpools['jamresult'] ?></td>
                        <td data-senin="<?= $jadwalpools['senin'] ?>" data-selasa="<?= $jadwalpools['selasa'] ?>"
                            data-rabu="<?= $jadwalpools['rabu'] ?>" data-kamis="<?= $jadwalpools['kamis'] ?>"
                            data-jumat="<?= $jadwalpools['jumat'] ?>" data-sabtu="<?= $jadwalpools['sabtu'] ?>"
                            data-minggu="<?= $jadwalpools['minggu'] ?>" class="countdown"></td>
                        <td class="tdtombol"><a href="{{ URL::to('/') }}#groupwebsite" target="_blank"><button
                                    class="btnpsg">Pasang</button></a></td>
                        <!-- <td class="tdtombol"><a href="<?= $jadwalpools['prediksi'] ?>" target="_blank"><button class="btnpsg">Prediksi</button></a></td> -->
                        <td class="tdtombol"><a href="https://angkasyair21.com/" target="_blank"><button
                                    class="btnpsg">Prediksi</button></a></td>
                        <td class="tdtombol"><a href="<?= $jadwalpools['link'] ?>" target="_blank"><button
                                    class="btnlink">Link</button></a></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>

    @include('front.partial.loaderpage');
    @include('front.partial.footer', $row_kontak);
    <script>
        $(document).ready(function() {
            $("#searchPasaran").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $(".namapas").filter(function() {
                    $(this).parent().toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    <script>
        // Mendapatkan elemen tabel
        var table = document.querySelector('table');

        // Mendapatkan elemen countdown pada tabel
        var countdownElements = table.querySelectorAll('.countdown');

        // Mendapatkan hari ini dalam bentuk angka (1-7), dimulai dari Senin hingga Minggu
        var today = new Date().getDay();

        function hitungSisaWaktuPasang(jamTutup, countdownElement, row) {
            // Mendapatkan waktu tutup dan waktu result dari elemen "jamtutup" dan "jamresult"
            var waktuTutup = new Date();
            var waktuResult = new Date();
            var waktuTutupString = waktuTutup.getFullYear() + "-" + (waktuTutup.getMonth() + 1) + "-" + waktuTutup
                .getDate() + " " + jamTutup + ":00";
            var waktuResultString = waktuResult.getFullYear() + "-" + (waktuResult.getMonth() + 1) + "-" + waktuResult
                .getDate() + " " + row.querySelector('.jamresult').textContent + ":00";
            waktuTutup = new Date(waktuTutupString);
            waktuResult = new Date(waktuResultString);

            // Menghitung selisih waktu antara waktu tutup dan waktu sekarang
            var selisihWaktu = waktuTutup - new Date();

            // Jika waktu sekarang berada di antara waktu tutup dan waktu result, ganti teks pada elemen "countdown" menjadi "Close"
            if (selisihWaktu <= 0 && waktuResult >= new Date()) {
                countdownElement.innerHTML = "Bet Closed";
                countdownElement.classList.add("merah");
                row.classList.remove("mauhabis");
                row.classList.add("pasarantutup");
            } else {
                // Jika waktu tutup belum lewat, hitung selisih waktu dan tampilkan sisa waktu
                if (selisihWaktu > 0) {
                    // Mengonversi selisih waktu ke dalam jam, menit, dan detik
                    var jam = Math.floor(selisihWaktu / (1000 * 60 * 60));
                    var menit = Math.floor((selisihWaktu % (1000 * 60 * 60)) / (1000 * 60));
                    var detik = Math.floor((selisihWaktu % (1000 * 60)) / 1000);

                    // Mengubah format sisa waktu menjadi "HH:MM:SS"
                    var jamStr = (jam < 10) ? "0" + jam : jam;
                    var menitStr = (menit < 10) ? "0" + menit : menit;
                    var detikStr = (detik < 10) ? "0" + detik : detik;

                    // Menampilkan sisa waktu pada elemen "countdown"
                    countdownElement.innerHTML = jamStr + ":" + menitStr + ":" + detikStr;
                    // Jika sisa waktu kurang dari 15 menit dari total sisa waktu keseluruhan, tambahkan class "merah" pada elemen "countdown"
                    if (selisihWaktu <= 900000) {
                        countdownElement.classList.add("merah");
                        row.classList.add("mauhabis");
                    } else {
                        countdownElement.classList.remove("merah");
                        row.classList.remove("mauhabis");
                    }
                } else {
                    // Jika waktu tutup sudah lewat, tampilkan pesan "Closed" pada elemen "countdown"
                    countdownElement.innerHTML = "Bet Closed";
                    row.classList.add("habis");
                    row.classList.remove("pasarantutup");
                }
            }

            // Jika waktu sekarang telah lewat waktu "jamresult", hitung selisih waktu antara waktu tutup dengan 24 jam kedepan
            if (new Date() >= waktuResult) {
                // Menambahkan 24 jam ke waktu tutup
                waktuTutup.setDate(waktuTutup.getDate() + 1);
                // Menghitung selisih waktu antara waktu tutup yang sudah ditambahkan dengan 24 jam dan waktu sekarang
                selisihWaktu = waktuTutup - new Date();

                // Mengonversi selisih waktu ke dalam jam, menit, dan detik
                var jam = Math.floor(selisihWaktu / (1000 * 60 * 60));
                var menit = Math.floor((selisihWaktu % (1000 * 60 * 60)) / (1000 * 60));
                var detik = Math.floor((selisihWaktu % (1000 * 60)) / 1000);

                // Mengubah format sisa waktu menjadi "HH:MM:SS"
                var jamStr = (jam < 10) ? "0" + jam : jam;
                var menitStr = (menit < 10) ? "0" + menit : menit;
                var detikStr = (detik < 10) ? "0" + detik : detik;

                // Menampilkan sisa waktu pada elemen "countdown"
                countdownElement.innerHTML = jamStr + ":" + menitStr + ":" + detikStr;
                row.classList.remove("habis");
                row.classList.remove("pasarantutup");

                // Jika sisa waktu kurang dari 15 menit dari total sisa waktu keseluruhan, tambahkan class "merah" pada elemen "countdown"
                if (selisihWaktu <= 900000) {
                    countdownElement.classList.add("merah");
                    row.classList.add("mauhabis");
                } else {
                    countdownElement.classList.remove("merah");
                    row.classList.remove("mauhabis");
                }
            }
        }

        // Fungsi untuk menentukan nilai countdown dan status pasaran (buka/tutup) pada setiap baris tabel
        function hitungCountdown() {
            countdownElements.forEach(function(countdownElement) {
                // Mendapatkan nilai data pada elemen countdown
                var dataSenin = countdownElement.dataset.senin;
                var dataSelasa = countdownElement.dataset.selasa;
                var dataRabu = countdownElement.dataset.rabu;
                var dataKamis = countdownElement.dataset.kamis;
                var dataJumat = countdownElement.dataset.jumat;
                var dataSabtu = countdownElement.dataset.sabtu;
                var dataMinggu = countdownElement.dataset.minggu;

                // Menentukan status pasaran (buka/tutup) berdasarkan nilai data pada hari ini
                var statusPasaran = "tutup";
                if (today === 1 && dataSenin === "1") {
                    statusPasaran = "buka";
                } else if (today === 2 && dataSelasa === "1") {
                    statusPasaran = "buka";
                } else if (today === 3 && dataRabu === "1") {
                    statusPasaran = "buka";
                } else if (today === 4 && dataKamis === "1") {
                    statusPasaran = "buka";
                } else if (today === 5 && dataJumat === "1") {
                    statusPasaran = "buka";
                } else if (today === 6 && dataSabtu === "1") {
                    statusPasaran = "buka";
                } else if (today === 0 && dataMinggu === "1") {
                    statusPasaran = "buka";
                }

                // Menentukan nilai countdown pada elemen countdown
                if (statusPasaran === "buka") {
                    // Mendapatkan elemen "jamtutup" dan "barisdepan" pada setiap baris
                    var jamTutup = countdownElement.closest('.barisdepan').querySelector('.jamtutup').textContent;
                    var row = countdownElement.closest('.barisdepan');

                    // Menghitung sisa waktu pasang menggunakan fungsi "hitungSisaWaktuPasang"
                    hitungSisaWaktuPasang(jamTutup, countdownElement, row);

                } else {
                    // Jika pasaran libur, tampilkan teks "Pasaran Libur" pada elemen "countdown"
                    countdownElement.innerHTML = "Pasaran Libur";
                    // Menghapus class "merah", "mauhabis", dan "habis" pada barisdepan dan reset nilai countdown menjadi "Pasaran Libur"
                    countdownElement.classList.remove("merah");
                    countdownElement.closest('.barisdepan').classList.remove("mauhabis");
                    countdownElement.closest('.barisdepan').classList.remove("habis");
                    countdownElement.innerHTML = "Pasaran Libur";
                }
            });
        }
        // Menjalankan fungsi "hitungCountdown" setiap 1 detik
        setInterval(hitungCountdown, 1000);
    </script>


    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src="script.js"></script>
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
    <script>
        function updateTime() {
            var now = new Date();

            // buat objek Intl.DateTimeFormat dengan preferensi yang diinginkan
            var options = {
                day: 'numeric',
                month: 'long',
                year: 'numeric',
                hour: 'numeric',
                minute: 'numeric',
                second: 'numeric',
                hour12: false,
                timeZoneName: 'short'
            };
            var formatter = new Intl.DateTimeFormat('id-ID', options);

            // format tanggal dan waktu dengan formatter
            var formattedDateTime = formatter.format(now);

            // ganti format waktu dengan pemisah titik dua (:) seperti yang diinginkan dan hilangkan kata "pukul"
            formattedDateTime = formattedDateTime.replace('pukul ', '').replace(/\./g, ':');

            // tampilkan tanggal dan waktu dalam format yang diinginkan
            document.getElementById("clock").innerHTML = formattedDateTime;
        }

        // panggil fungsi updateTime setiap detik
        setInterval(updateTime, 1000);
    </script>

</body>

</html>
