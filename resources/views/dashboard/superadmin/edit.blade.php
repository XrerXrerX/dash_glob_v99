@extends('dashboard.superadmin.layout.main')

@section('container')
    <div class="col-xl-5 col-lg-5 col-md-5 mt-4 mx-auto">
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <div class="card z-index-0">
            <div class="card-header text-left pt-4 px-5">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-1 border-bottom pb-3">
                    <h5 class="text-weight-bold">EDIT USER</h5>
                </div>

            </div>
            <div class="card-body">
                <form action="/superadmins/usertrexdiat/{{ $post->id }}" method="post" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="name" class="form-control-label text-white @error('name') is-invalid @enderror">Nama
                            User</label>
                        <input class="form-control" type="text" id="name" name="name"
                            placeholder="Masukkan nama game slot" value="{{ old('nama', $post->name) }}">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="username"
                            class="form-control-label text-white @error('username') is-invalid @enderror">UserName</label>
                        <input class="form-control" type="text" id="username" name="username"
                            placeholder="Masukkan nama game slot" value="{{ old('username', $post->username) }}">
                        @if ($errors->has('username'))
                            <span class="text-danger">{{ $errors->first('username') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="divisi"
                            class="form-control-label text-white @error('divisi') is-invalid @enderror">Divisi User</label>
                        <input class="form-control" type="text" id="divisi" name="divisi"
                            placeholder="Masukkan divisi" value="{{ old('divisi', $post->divisi) }}">
                        @if ($errors->has('divisi'))
                            <span class="text-danger">{{ $errors->first('divisi') }}</span>
                        @endif

                    </div>
                    <div>
                        <button type="submit" class="btn btn-icon btn-3 btn btn-outline-light my-4 bg-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
