<form action="https://www.rtpl21group.com/api/goksuy0k" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <input class="form-control" type="hidden" id="divisi" name="divisi" value="hb">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="nama" class="form-control-label text-white @error('nama') is-invalid @enderror">Nama
                    game</label>
                <input class="form-control" type="text" id="nama" name="nama"
                    placeholder="Masukkan nama game slot" value="{{ old('nama') }}">
                @if ($errors->has('nama'))
                    <span class="text-danger">{{ $errors->first('nama') }}</span>
                @endif
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="gambar" class="form-control-label text-white @error('gambar') is-invalid @enderror">Gambar
                    Game
                    Slot</label>
                <div class="card">
                    <div class="img-area bg-dark text-center p-5" data-img="">
                        <div class="row">
                            <i class="ni ni-cloud-upload-96 text-dark" style="font-size: 8em; color: #000;">
                            </i>
                        </div>
                        <div class="row">
                            <i class="text-dark" style="font-size: 2.5em; color: #000;"> ukuran harus : 140 x
                                93</i>
                        </div>

                    </div>
                    <div class="form-group mb-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group">
                                    <input class="form-control  @error('gambar') is-invalid @enderror" type="file"
                                        id="file" name="gambar" accept="image/*" required>
                                </div>
                            </div>
                        </div>
                        @if ($errors->has('gambar'))
                            <span class="text-danger">{{ $errors->first('gambar') }}</span>
                        @endif
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" id="priority" name="priority">
                        <label class="form-check-label font-weight-bolder text-white" for="priority">HOT
                            GAMES</label>
                    </div>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="tmb">
                        <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                        <span class="text-black font-weight-bolder"><strong>Warning!</strong> kuran harus sesuai
                            aturan karena mempengaruhi tampilan SLOT !</span>
                        <button type="button" class="btn-close font-" data-bs-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-icon btn-3 btn btn-outline-light my-1 bg-dark">Submit</button>
        </div>
    </div>

</form>
