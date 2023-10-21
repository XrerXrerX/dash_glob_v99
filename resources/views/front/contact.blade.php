<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lotto21top : Contact l21</title>
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

    @include('front.partial.loaderpage');
    @include('front.partial.navbar');

    <!--start KONTAINER UTAMA-->
    <div class="container part2">

        <div class="section contactus">
            <h1>Contact Us</h1>
            <div class="gridcontactus">

                <div class="formcontact">
                    <form method="post">
                        <div class="form-group">
                            <input type="text" class="form-control-contactus" id="name" placeholder="Name"
                                name="name" value="">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control-contactus" id="email" placeholder="Email"
                                name="email" value="">
                        </div>

                        <div class="form-group">
                            <textarea class="form-control-contactus" rows="10" placeholder="Write your message here..." name="message"></textarea>
                        </div>

                        <a href="mailto: admin@lotto21top.info"><button id="submit" class="buttonred tombolcontactus"
                                type="submit" name="submit" value="SEND">
                                <i class='far fa-envelope'></i><span class="send-text">Send Mail</span>
                            </button></a>
                    </form>

                </div>

                <div class="contactusgrid2">
                    <ul class="contact-list">
                        <li class="list-item">
                            <i class='fas fa-map-marker-alt' style="margin-bottom: 10px;"></i><span>2 Thnou St, Sun
                                Shine Casino, Sihanoukvile Cambodia</span>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15686.416111064485!2d103.5032937!3d10.6100999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3107e19b85b6dd6f%3A0x88573520521d9682!2sHoliday%20Palace%20Sihanoukville!5e0!3m2!1sid!2sid!4v1677836932543!5m2!1sid!2sid"
                                width="100%" height="140" style="border:0; border-radius: 5px;" allowfullscreen=""
                                loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </li>
                        <?php foreach( $row_kontak as $kontak ) : ?>
                        <li class="list-item">
                            <a href="https://wa.me/<?= $kontak['whatsapp'] ?>" target="_blank"><i
                                    class='fab fa-whatsapp'></i><span>+62 813 4967 9174</span>
                        </li></a>
                        <?php endforeach; ?>

                        <li class="list-item">
                            <a href="<?= $kontak['livechat'] ?>" target="_blank"><i
                                    class="far fa-comment-dots"></i><span>Live Chat</span>
                        </li></a>

                    </ul>
                </div>
            </div>
        </div>

    </div>

    <script>
        const form = document.querySelector('form');
        const nameInput = document.querySelector('input[name="name"]');
        const emailInput = document.querySelector('input[name="email"]');
        const messageInput = document.querySelector('textarea[name="message"]');
        const submitButton = document.querySelector('#submit');

        form.addEventListener('submit', function(event) {
            event.preventDefault(); // menghentikan pengiriman form secara default

            // Memeriksa apakah semua field sudah diisi
            if (nameInput.value && emailInput.value && messageInput.value) {
                // Mengubah atribut href dari elemen a untuk mengarah ke alamat email
                submitButton.parentElement.setAttribute('href',
                    `mailto: admin@lotto21top.info?subject=Contact Us&body=Name: ${nameInput.value}%0D%0AEmail: ${emailInput.value}%0D%0AMessage: ${messageInput.value}`
                );

                // Mengklik tombol submit secara otomatis
                submitButton.parentElement.click();
            } else {
                alert('Please fill in all fields'); // Memberikan pesan error jika ada field yang kosong
            }
        });
    </script>

    @include ('front.partial.footer');

    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js'></script>
    <script src="{{ URL::to('/') }}/front/js/script.js"></script>
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
