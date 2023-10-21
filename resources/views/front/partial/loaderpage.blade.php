<style>
    /* loader */
    .loaderpage {
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: #0b0b0b;
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 1;
        transition: opacity 0.5s ease-in-out;
    }

    .loaderpage.fade-out {
        opacity: 0;
    }

    .dank-ass-loader {
        width: 4.5rem;
        display: flex;
        flex-direction: column;
        align-items: center;
        background-image: url(../front/img/l21-logo-1.png);
        background-position: center;
        background-size: 110%;
        background-repeat: no-repeat;
    }

    .dank-ass-loader .row {
        display: flex;
    }

    .arrow {
        width: 0;
        height: 0;
        margin: 0 -6px;
        border-left: 12px solid transparent;
        border-right: 12px solid transparent;
        border-bottom: 21.6px solid #960300;
        -webkit-animation: blink 1s infinite;
        animation: blink 1s infinite;
        filter: drop-shadow(0 0 18px #960300);
    }

    .arrow.down {
        transform: rotate(180deg);
    }

    .arrow.outer-1 {
        -webkit-animation-delay: -0.0555555556s;
        animation-delay: -0.0555555556s;
    }

    .arrow.outer-2 {
        -webkit-animation-delay: -0.1111111111s;
        animation-delay: -0.1111111111s;
    }

    .arrow.outer-3 {
        -webkit-animation-delay: -0.1666666667s;
        animation-delay: -0.1666666667s;
    }

    .arrow.outer-4 {
        -webkit-animation-delay: -0.2222222222s;
        animation-delay: -0.2222222222s;
    }

    .arrow.outer-5 {
        -webkit-animation-delay: -0.2777777778s;
        animation-delay: -0.2777777778s;
    }

    .arrow.outer-6 {
        -webkit-animation-delay: -0.3333333333s;
        animation-delay: -0.3333333333s;
    }

    .arrow.outer-7 {
        -webkit-animation-delay: -0.3888888889s;
        animation-delay: -0.3888888889s;
    }

    .arrow.outer-8 {
        -webkit-animation-delay: -0.4444444444s;
        animation-delay: -0.4444444444s;
    }

    .arrow.outer-9 {
        -webkit-animation-delay: -0.5s;
        animation-delay: -0.5s;
    }

    .arrow.outer-10 {
        -webkit-animation-delay: -0.5555555556s;
        animation-delay: -0.5555555556s;
    }

    .arrow.outer-11 {
        -webkit-animation-delay: -0.6111111111s;
        animation-delay: -0.6111111111s;
    }

    .arrow.outer-12 {
        -webkit-animation-delay: -0.6666666667s;
        animation-delay: -0.6666666667s;
    }

    .arrow.outer-13 {
        -webkit-animation-delay: -0.7222222222s;
        animation-delay: -0.7222222222s;
    }

    .arrow.outer-14 {
        -webkit-animation-delay: -0.7777777778s;
        animation-delay: -0.7777777778s;
    }

    .arrow.outer-15 {
        -webkit-animation-delay: -0.8333333333s;
        animation-delay: -0.8333333333s;
    }

    .arrow.outer-16 {
        -webkit-animation-delay: -0.8888888889s;
        animation-delay: -0.8888888889s;
    }

    .arrow.outer-17 {
        -webkit-animation-delay: -0.9444444444s;
        animation-delay: -0.9444444444s;
    }

    .arrow.outer-18 {
        -webkit-animation-delay: -1s;
        animation-delay: -1s;
    }

    .arrow.inner-1 {
        -webkit-animation-delay: -0.1666666667s;
        animation-delay: -0.1666666667s;
    }

    .arrow.inner-2 {
        -webkit-animation-delay: -0.3333333333s;
        animation-delay: -0.3333333333s;
    }

    .arrow.inner-3 {
        -webkit-animation-delay: -0.5s;
        animation-delay: -0.5s;
    }

    .arrow.inner-4 {
        -webkit-animation-delay: -0.6666666667s;
        animation-delay: -0.6666666667s;
    }

    .arrow.inner-5 {
        -webkit-animation-delay: -0.8333333333s;
        animation-delay: -0.8333333333s;
    }

    .arrow.inner-6 {
        -webkit-animation-delay: -1s;
        animation-delay: -1s;
    }

    @-webkit-keyframes blink {
        0% {
            opacity: 0.1;
        }

        30% {
            opacity: 1;
        }

        100% {
            opacity: 0.1;
        }
    }

    @keyframes blink {
        0% {
            opacity: 0.1;
        }

        30% {
            opacity: 1;
        }

        100% {
            opacity: 0.1;
        }
    }
</style>

<!-- start loader -->
<main class="loaderpage">
    <div class="dank-ass-loader">
        <div class="row">
            <div class="arrow up outer outer-18"></div>
            <div class="arrow down outer outer-17"></div>
            <div class="arrow up outer outer-16"></div>
            <div class="arrow down outer outer-15"></div>
            <div class="arrow up outer outer-14"></div>
        </div>
        <div class="row">
            <div class="arrow up outer outer-1"></div>
            <div class="arrow down outer outer-2"></div>
            <div class="arrow up inner inner-6"></div>
            <div class="arrow down inner inner-5"></div>
            <div class="arrow up inner inner-4"></div>
            <div class="arrow down outer outer-13"></div>
            <div class="arrow up outer outer-12"></div>
        </div>
        <div class="row">
            <div class="arrow down outer outer-3"></div>
            <div class="arrow up outer outer-4"></div>
            <div class="arrow down inner inner-1"></div>
            <div class="arrow up inner inner-2"></div>
            <div class="arrow down inner inner-3"></div>
            <div class="arrow up outer outer-11"></div>
            <div class="arrow down outer outer-10"></div>
        </div>
        <div class="row">
            <div class="arrow down outer outer-5"></div>
            <div class="arrow up outer outer-6"></div>
            <div class="arrow down outer outer-7"></div>
            <div class="arrow up outer outer-8"></div>
            <div class="arrow down outer outer-9"></div>
        </div>
    </div>
</main>
<!-- end loader -->

<script>
    // Menunjukkan loader selama 5 detik
    setTimeout(function() {
        // Mengambil elemen loader
        var loader = document.querySelector(".loaderpage");

        // Mengatur loader menjadi hidden menggunakan fadeout
        loader.style.opacity = 0;
        setTimeout(function() {
            loader.style.display = "none";
        }, 500);

        // Menunjukkan elemen body setelah loader dihilangkan
        document.body.style.display = "flex";
    }, 1000);
</script>
