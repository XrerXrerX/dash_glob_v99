@extends('dashboard.syair.layout.main')
@section('container')
    <div class="rowsearch justify-content-center mb-3">
        <div class="col-md-6">
            <a href="posts/create"><button class="btn btn-icon btn-3 btn btn-outline-light bg-dark my-4" type="button">
                    <span class="btn-inner--text text-large"> <i class="ni ni-fat-add"></i> Tambah Postingan Syair</span>

                </button>
            </a>
        </div>
        {{-- <div class="col-md-6">
            <form action="/posts">
                <div class="input-group mb-3">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Search . ." name="search">
                    <button class="btn btn-dark" type="button" id="button-addon2">Search</button>
                </div>
            </form>
        </div> --}}

        <div class="col-md-5">
            <form action="/syair/posts">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control ps-1" placeholder="Type here..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-light" type="submit" id="button-addon2" hidden>Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="d-flex justify-content-center my-3">

        @if (session()->has('success'))
            <div class="alert alert-success col-lg-8">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('loginError'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-white text-uppercase text-secondary text-large font-weight-bolder opacity-7">No</th>
                        <th
                            class="text-white text-center text-uppercase text-secondary text-large font-weight-bolder opacity-7 ps-2">
                            Nama Pasaran</th>
                        <th
                            class="text-white text-center text-uppercase text-secondary text-large font-weight-bolder opacity-7">
                            Tanggal Post</th>
                        <th
                            class="text-white text-center text-uppercase text-secondary text-large font-weight-bolder opacity-7">
                            Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td class="text-white ">{{ $loop->iteration }}</td>
                            <td class="text-white text-center">{{ $post->nm_pasar }}</td>
                            <td class="text-white text-center">{{ $post->datepost }}</td>
                            <td class="text-white text-center">



                                <a href="https://lotto21top.net/syair/posts/{{ $post->slug }}/edit"><button
                                        class="badge btn-info bg-dark">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        <span class="badge ">Edit</span>
                                    </button></a>

                                <form action="https://lotto21top.net/syair/posts/{{ $post->slug }}" method="post"
                                    class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="badge btn-danger bg-dark"
                                        onclick="return confirm('Apakah anda yakin ingin menghapus?')"> <i
                                            class="fas fa-trash">
                                        </i> <span class="badge">Delete</span></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

        <ul class="pagination pagination-secondary justify-content-end mt-3 me-5">

            {{ $posts->onEachSide(1)->links('pagination::bootstrap-4') }}
        </ul>
    </div>
@endsection
