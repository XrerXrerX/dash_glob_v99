@extends('dashboard.superadmin.layout.main')
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
    <div class="rowsearch justify-content-center my-5 border-bottom">
        <h2 class="text-dark "> USER L21 MANAGEMENT</h2>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Divisi</th>

                        <th class="text-secondary opacity-7 text-center">Ubah Divisi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <div>
                                        <img src="https://sinardewi.com/asset/img/user-icon.png"
                                            class="avatar avatar-sm me-3">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="mb-0 text-xs">{{ $post->name }}</h6>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">{{ $post->divisi }}</p>
                                <p class="text-xs text-secondary mb-0">Maintenance</p>
                            </td>
                            {{-- 
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td> --}}
                            <td class="align-middle text-center ">
                                <div class="dropdown mt-3 text-center">
                                    {{-- <button class="badge bg-gradient-dark dropdown-toggle" type="button"
                                        id="dropdownMenuButton" data-bs-toggle="dropdown">
                                        Ubah Divisi
                                    </button> --}}

                                    <a href="/superadmins/usertrexdiat/{{ $post->id }}/edit">
                                        <button type="buttpn" class="badge bg-gradient-dark dropdown-toggle"
                                            data-bs-toggle="modal" data-bs-target="#modal-form">Ubah Divisi</button>
                                    </a>


                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
















    {{-- <ul class="pagination pagination-secondary justify-content-end mt-3 me-5">

        {{ $posts->onEachSide(1)->links('pagination::bootstrap-4') }}
    </ul> --}}
    </div>
@endsection
