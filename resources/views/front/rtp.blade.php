@extends('front.layout.main')
@section('container part2')
    <!--start KONTAINER UTAMA-->
    <div class="container part2">

        <object id="objectElement" class="object-data" width="100%" height="1080px">
            <div class="content">
                <iframe src="https://www.rtpl21.com/" frameborder="0" width="100%" height="100%"></iframe>
            </div>
        </object>

    </div>

    @include('front.partial.footer', $row_kontak)

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
@endsection
