@extends('dashboard.syair.layout.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom">
        <h1 class="h2">Create New Syair Post</h1>
    </div>

    <div class="card-body col-md-8 bg-dark-login mx-auto">
        <form method="post" action="https://lotto21top.net/syair/posts" class="mb-2" enctype="multipart/form-data">
            @csrf
            <div class="col-md-10">

                <div class="form-group mb-2 ms-2 ms-2 ">
                    <label for="nm_pasar" class="text-white">Pilih Pasaran</label>
                    <select class="form-select" id="nm_pasar" name="nm_pasar">
                        <option selected>Pilih Pasaran </option>
                        @foreach ($pasarans as $pasaran)
                            @if (old('category_id') == $pasaran->id)
                                <option value="{{ $pasaran->name }}" selected>{{ strtoupper($pasaran->name) }}</option>
                            @else
                                <option value="{{ $pasaran->name }}">{{ strtoupper($pasaran->name) }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-2 ms-2 ms-2">
                    <label for="datepost" class="form-label text-white">Tanggal Post</label>
                    <select class="form-select" id="datepost" name="datepost">
                        <option selected>Pilih Tanggal </option>
                        <option value="{{ \Carbon\Carbon::now()->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->format('d F Y') }}</option>
                        <option value="{{ \Carbon\Carbon::now()->addDays(1)->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->addDays(1)->format('d F Y') }}</option>
                        <option value="{{ \Carbon\Carbon::now()->addDays(2)->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->addDays(2)->format('d F Y') }}</option>
                        <option value="{{ \Carbon\Carbon::now()->addDays(3)->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->addDays(3)->format('d F Y') }}</option>
                        <option value="{{ \Carbon\Carbon::now()->addDays(4)->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->addDays(4)->format('d F Y') }}</option>
                        <option value="{{ \Carbon\Carbon::now()->addDays(5)->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->addDays(5)->format('d F Y') }}</option>
                        <option value="{{ \Carbon\Carbon::now()->addDays(6)->format('Y-m-d H:i:s') }}">
                            {{ \Carbon\Carbon::now()->addDays(6)->format('d F Y') }}</option>

                    </select>
                </div>
                <div class="mb-4 ms-2">
                    <label for="slug" class="form-label" style="display: ">Slug</label>
                    <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug"
                        name="slug" required value="{{ old('slug') }}" style="display: " readonly>
                    @error('slug')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Arta4D..</button>
                                <input class="form-control  @error('artaimage') is-invalid @enderror" type="file"
                                    id="artaimage" name="artaimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="artaPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Doyan...</button>
                                <input class="form-control  @error('doyanimage') is-invalid @enderror" type="file"
                                    id="doyanimage" name="doyanimage" onchange="previewimage()">
                            </div>
                        </div>

                        <div class="col-2">
                            <img src="" alt="" class="doyanPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Duo4d...</button>
                                <input class="form-control  @error('duoimage') is-invalid @enderror" type="file"
                                    id="duoimage" name="duoimage" onchange="previewimage()">
                            </div>
                        </div>

                        <div class="col-2">
                            <img src="" alt="" class="duoPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Neon4d.</button>
                                <input class="form-control  @error('neonimage') is-invalid @enderror" type="file"
                                    id="neonimage" name="neonimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="neonPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Toke4d..</button>
                                <input class="form-control  @error('tokeimage') is-invalid @enderror" type="file"
                                    id="tokeimage" name="tokeimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="tokePreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Zara4d..</button>
                                <input class="form-control  @error('zaraimage') is-invalid @enderror" type="file"
                                    id="zaraimage" name="zaraimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="zaraPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>

                </div>
                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Nero4d..</button>
                                <input class="form-control  @error('neroimage') is-invalid @enderror" type="file"
                                    id="neroimage" name="neroimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="neroPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Roma4d.</button>
                                <input class="form-control  @error('romaimage') is-invalid @enderror" type="file"
                                    id="romaimage" name="romaimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="romaPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Tstoto..</button>
                                <input class="form-control  @error('tsimage') is-invalid @enderror" type="file"
                                    id="tsimage" name="tsimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="tsPreview img-fluid d-block mx-auto mb-1">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Arwana</button>
                                <input class="form-control  @error('arwanaimage') is-invalid @enderror" type="file"
                                    id="arwanaimage" name="arwanaimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="arwanaPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>

                <div class="form-group mb-4 ms-2">
                    <div class="row">
                        <div class="col-10">
                            <div class="input-group">
                                <button class="btn btn-dark mb-0" type="button" disabled>Jeeptoto</button>
                                <input class="form-control  @error('jeepimage') is-invalid @enderror" type="file"
                                    id="jeepimage" name="jeepimage" onchange="previewimage()">
                            </div>
                        </div>
                        <div class="col-2">
                            <img src="" alt="" class="jeepPreview img-fluid d-block mx-auto ">
                        </div>
                    </div>
                </div>
                <div class="col-10 ms-5 mt-2">
                    <button type="submit" class="btn bg-gradient-dark btn-lg w-100 pl-5">Create Post</button>
                </div>
            </div>
        </form>

    </div>


    </form>


    <script>
        const datepost = document.querySelector('#datepost');
        const slug = document.querySelector('#slug');
        datepost.addEventListener('change', function() {
            fetch('https://lotto21top.net/syair/checkSlug?datepost=' + datepost.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
        });

        function previewimage() {
            const artaimage = document.querySelector('#artaimage');
            const artaPreview = document.querySelector('.artaPreview');
            const arwanaimage = document.querySelector('#arwanaimage');
            const arwanaPreview = document.querySelector('.arwanaPreview');
            const doyanimage = document.querySelector('#doyanimage');
            const doyanPreview = document.querySelector('.doyanPreview');
            const duoimage = document.querySelector('#duoimage');
            const duoPreview = document.querySelector('.duoPreview');
            const jeepimage = document.querySelector('#jeepimage');
            const jeepPreview = document.querySelector('.jeepPreview');
            const neonimage = document.querySelector('#neonimage');
            const neonPreview = document.querySelector('.neonPreview');
            const neroimage = document.querySelector('#neroimage');
            const neroPreview = document.querySelector('.neroPreview');
            const romaimage = document.querySelector('#romaimage');
            const romaPreview = document.querySelector('.romaPreview');
            const tokeimage = document.querySelector('#tokeimage');
            const tokePreview = document.querySelector('.tokePreview');
            const zaraimage = document.querySelector('#zaraimage');
            const zaraPreview = document.querySelector('.zaraPreview');
            const tsimage = document.querySelector('#tsimage');
            const tsPreview = document.querySelector('.tsPreview');


            if (artaimage.files && artaimage.files[0]) {
                artaPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    artaPreview.src = e.target.result;
                }
                reader.readAsDataURL(artaimage.files[0]);
            }
            if (arwanaimage.files && arwanaimage.files[0]) {
                arwanaPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    arwanaPreview.src = e.target.result;
                }
                reader.readAsDataURL(arwanaimage.files[0]);
            }

            if (doyanimage.files && doyanimage.files[0]) {
                doyanPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    doyanPreview.src = e.target.result;
                }
                reader.readAsDataURL(doyanimage.files[0]);
            }

            if (duoimage.files && duoimage.files[0]) {
                duoPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    duoPreview.src = e.target.result;
                }
                reader.readAsDataURL(duoimage.files[0]);
            }
            if (jeepimage.files && jeepimage.files[0]) {
                jeepPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    jeepPreview.src = e.target.result;
                }
                reader.readAsDataURL(jeepimage.files[0]);
            }

            if (neonimage.files && neonimage.files[0]) {
                neonPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    neonPreview.src = e.target.result;
                }
                reader.readAsDataURL(neonimage.files[0]);
            }

            if (neroimage.files && neroimage.files[0]) {
                neroPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    neroPreview.src = e.target.result;
                }
                reader.readAsDataURL(neroimage.files[0]);
            }

            if (romaimage.files && romaimage.files[0]) {
                romaPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    romaPreview.src = e.target.result;
                }
                reader.readAsDataURL(romaimage.files[0]);
            }

            if (tokeimage.files && tokeimage.files[0]) {
                tokePreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    tokePreview.src = e.target.result;
                }
                reader.readAsDataURL(tokeimage.files[0]);
            }


            if (zaraimage.files && zaraimage.files[0]) {
                zaraPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    zaraPreview.src = e.target.result;
                }
                reader.readAsDataURL(zaraimage.files[0]);
            }

            if (tsimage.files && tsimage.files[0]) {
                tsPreview.style.display = 'block';
                const reader = new FileReader();
                reader.onload = function(e) {
                    tsPreview.src = e.target.result;
                }
                reader.readAsDataURL(tsimage.files[0]);
            }
        }
    </script>
@endsection
