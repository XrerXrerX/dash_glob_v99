@extends('dashboard.web.layout.main')

@section('container')
    <div class="card col-md-6">
        <div class="card-header" style="padding: 1em 1rem; border-bottom: 2px solid white">
            <h5><b> Create Promosi <b></h5>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="card-body">
            <form action="{{ route('promosi.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="website"
                                class="form-control-label text-white @error('username') is-invalid @enderror">Website</label>
                            <input class="form-control" type="text" id="website" name="website"
                                placeholder="Masukkan nama website" value="">
                            @if ($errors->has('website'))
                                <span class="text-danger">{{ $errors->first('website') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="website_url"
                                class="form-control-label text-white @error('username') is-invalid @enderror">URL
                                Website</label>
                            <input class="form-control" type="text" id="website_url" name="website_url"
                                placeholder="Masukkan url website">
                            @if ($errors->has('website_url'))
                                <span class="text-danger">{{ $errors->first('website_url') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="website_url"
                                class="form-control-label text-white @error('image_url') is-invalid @enderror">Gambar
                                Promosi</label>
                            <div class="container">
                                <input type="file" id="file" name="image_url" accept="image/*" hidden>
                                <input type="text" id="image_url2" name="image_url2" hidden>
                                <div class="d-flex justify-content-center">
                                    <div class="img-area" data-img="">
                                        <i class="ni ni-cloud-upload-96 text-dark ms-5"
                                            style="font-size: 10em; color: #000;"></i>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <button type="button" class="select-image btn btn-3 btn-dark col-md-12">Upload
                                            Image Baru</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-3 btn-dark col-md-12 col-md-12" data-bs-toggle="modal"
                                            data-bs-target="#modal-default" type="button">
                                            Pilih Dari Gallery
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <h3 class="text-center">Upload Image</h3>
                            <p class="text-center"> Image size must be less than <span>2MB</span></p>
                            <label for="deskripsi"
                                class="form-control-label text-white @error('deskripsi') is-invalid @enderror">Deskripsi</label>

                            <textarea class="form-control" type="text" id="deskripsi" rows="6" name="deskripsi"
                                placeholder="Masukkan Deskripsi"></textarea>
                            @if ($errors->has('deskripsi'))
                                <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-12 d-flex justify-content-end">
                    <div style="margin-right: 10px">
                        <button type="submit" class="btn btn-icon btn-3 btn btn-outline-light my-4 bg-dark">Submit</button>
                    </div>
                    <div>
                        <a href="/web/promosi" class="btn btn-icon btn-3 btn btn-outline-light my-4 bg-default">Cancel</a>
                    </div>
                </div>


            </form>
        </div>
    </div>


    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
        aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-secondary" id="modalChooseImageTitle">Pilih Gambar</h5>
                    <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="close-btn-popup">X</span>
                    </button>
                </div>

                <div class="modal-footer">
                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button> --}}
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <button type="button" class="btn btn-danger float-left" id="btnRemoveImage"
                                    style="display:none"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus?');">Hapus</button>
                            </div>
                            <div class="col-md-6 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" id="btnChooseImage">Pilih</button>3
                                <button type="button" id="cancel-btn-edit" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Batal</button>
                            </div>

                        </div>
                    </div>





                </div>
            </div>
        </div>
    </div>
    <script>
        if ({{ session('id_bo') != '' }}) {
            var id = {{ session('id_bo') }};

            fetch(`https://lotto21top.net/apk/bo/datapromosi/${id}`).then(response => response.json()).then(data => {
                console.log(data);
                document.getElementById('website').value = data.nama;
                document.getElementById('website_url').value = data.site;

            });

        };

        const selectImage = document.querySelector('.select-image');
        const inputFile = document.querySelector('#file');
        const imgArea = document.querySelector('.img-area');

        selectImage.addEventListener('click', function() {
            inputFile.click();

        });

        inputFile.addEventListener('change', function() {
            const image = this.files[0];
            if (image.size < 2000000) {
                const reader = new FileReader();
                reader.onload = () => {
                    const allImg = imgArea.querySelectorAll('img');
                    allImg.forEach(item => item.remove());
                    const alli = imgArea.querySelectorAll('i');
                    alli.forEach(item => item.remove());
                    const imgUrl = reader.result;
                    const img = document.createElement('img');
                    img.src = imgUrl;
                    imgArea.appendChild(img);
                    img.classList.add('ms-4 mb-2');
                    imgArea.classList.add('active');
                    imgArea.dataset.img = image.name;
                };
                reader.readAsDataURL(image);
                const inputFile = document.querySelector('#image_url2');
                inputFile.value = '';

            } else {
                alert("Image size more than 2MB");
            }
        });


        window.onload = function() {
            var hasReloaded = sessionStorage.getItem('hasReloaded');
            if (!hasReloaded) {
                sessionStorage.setItem('hasReloaded', true);
                window.location.reload();
            } else {
                sessionStorage.removeItem('hasReloaded');
            }
        };
    </script>
@endsection
