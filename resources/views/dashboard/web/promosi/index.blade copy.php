@extends('dashboard.syair.layout.main')
@section('container')
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
    <div class="col-md-10 ms-3">
        <a href="/syair/posts/create"><button class="btn btn-icon btn-3 btn btn-outline-light bg-dark my-4" type="button">
                <span class="btn-inner--text text-large"> <i class="ni ni-fat-add"></i> Tambah Postingan Syair</span>

            </button></a>
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
                                {{-- <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye" class="align-text-bottom"></span></a> --}}


                                <a href="/syair/posts/{{ $post->slug }}/edit"><button class="badge btn-info bg-dark">
                                        <i class="fas fa-pencil-alt">
                                        </i>
                                        <span class="badge ">Edit</span>
                                    </button></a>

                                <form action="/syair/posts/{{ $post->slug }}" method="post" class="d-inline">
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
    </div>
@endsection
