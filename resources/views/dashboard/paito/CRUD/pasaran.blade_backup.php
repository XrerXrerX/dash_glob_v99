@extends('dashboard.paito.layout.main')
@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <h4 class="ms-1 font-weight-bold">LIST PASARAN</h4>
            <div class="col-md-12">
                <div class="row my-4 ">
                    
                    <div class="col-md-3">
                        <button class="btn btn-icon btn-3 btn btn-outline-light bg-dark" data-bs-toggle="modal"
                            data-bs-target="#modal-default" type="button">
                            <span class="btn-inner--text text-large"><i class="ni ni-fat-add"></i>Tambah Pasaran</span>
                        </button>
                    </div>
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-3">
                        <form action="/pasaran">
                            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                                <div class="input-group">
                                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="modal-default"
                        aria-hidden="true">
                        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                            <div class="modal-content">
                                <form action="{{ route('pasaran.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h6 class="modal-title" style="color: black;" id="modal-title-default">Tambah
                                            Pasaran</h6>
                                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true" style="color: black;">X</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleFormControlInput1"
                                                        name="pasaran_nama" placeholder="Nama Pasaran">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" id="exampleFormControlInput2"
                                                        name="pasaran_text" placeholder="Text Pasaran">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" id="submit-btn"
                                            class="btn bg-gradient-primary">Submit</button>
                                        <button type="button" class="btn btn-link ml-auto"
                                            data-bs-dismiss="modal">Batal</button>
                                    </div>
                                    {{-- <script>
                                        $(document).ready(function() {
                                            $("#submit-btn").click(function(e) {
                                                e.preventDefault();

                                                $.ajax({
                                                    url: "{{ route('pasaran.store') }}",
                                                    method: "POST",
                                                    data: {
                                                        pasaran_nama: $("#exampleFormControlInput1").val(),
                                                        pasaran_text: $("#exampleFormControlInput2").val(),
                                                        _token: "{{ csrf_token() }}"
                                                    },
                                                    success: function(response) {
                                                        // tambahkan kode untuk menangani respons dari server
                                                        $("#modal-default").modal(
                                                            "hide"); // sembunyikan modal setelah data berhasil disimpan
                                                    },
                                                    error: function(xhr) {
                                                        // tambahkan kode untuk menangani kesalahan saat mengirimkan data ke server
                                                        console.log(xhr.responseText);
                                                    }
                                                });
                                            });
                                        });
                                    </script> --}}
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center mb-0">
                            <thead style="position: sticky; z-index: 1;" class="thead-dark">
                                <tr>
                                    <th style="width: 10%" class="text-center">
                                        <h5>#</h5>
                                    </th>
                                    <th style="width: 30%" class="text-center">
                                        <h5>Pasaran Nama</h5>
                                    </th>
                                    <th style="width: 30%" class="text-center">
                                        <h5>Pasaran Text</h5>
                                    </th>
                                    <th style="width: 20%">
                                        <h5>Action</h5>
                                    </th>
                                </tr>
                            </thead>
                            <tbody data-aos="fade-up" data-aos-duration="900">
                                @foreach ($data as $item)
                                    <tr>
                                        <td class="text-center">
                                            #
                                        </td>
                                        <td class="text-center">
                                            <p class="text-white"> {{ $item->pasaran_nama }}</p>
                                        </td>
                                        <td class="text-center">
                                            <p class="text-white"> {{ $item->pasaran_text }}</p>
                                        </td>
                                        <td class="project-actions text-right">
                                            <button class="badge btn-info bg-dark" data-bs-toggle="modal"
                                                data-bs-target="#modal-default2{{ $item->id }}" href="#">
                                                <i class="fas fa-pencil-alt"></i>
                                                <span class="badge">Edit</span>
                                            </button>
                                            <form action="{{ route('pasaran.destroy', $item->id) }}" method="POST"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge btn-danger bg-dark"
                                                    onclick="return confirm('Apakah anda yakin ingin menghapus?')"> <i
                                                        class="fas fa-trash">
                                                    </i> <span class="badge">Delete</span></button>
                                            </form>
                                            <div class="modal fade" id="modal-default2{{ $item->id }}" tabindex="-1"
                                                role="dialog" aria-labelledby="modal-default" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered modal-" role="document">
                                                    <div class="modal-content">
                                                        <form method="POST"
                                                            action="{{ route('pasaran.update', $item->id) }}"
                                                            id="edit-form-{{ $item->id }}">
                                                            @csrf
                                                            @method('PUT')
                                                            <div class="modal-header">
                                                                <h6 class="modal-title" style="color: black;"
                                                                    id="modal-title-default">Edit Data</h6>
                                                                <button type="button" class="btn-close text-dark"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true"
                                                                        style="color: black;">X</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="row mt-3">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="pasaran_nama" name="pasaran_nama"
                                                                                placeholder="Nama Pasaran"
                                                                                value="{{ $item->pasaran_nama }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="pasaran_text" name="pasaran_text"
                                                                                placeholder="Text Pasaran"
                                                                                value="{{ $item->pasaran_text }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <input type="hidden" name="id"
                                                                    value="{{ $item->id }}">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="submit"
                                                                    class="btn bg-gradient-primary">Update</button>
                                                                <button type="button" class="btn btn-link ml-auto"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer pt-3  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                    <div class="col-lg-6 mb-lg-0 mb-4">
                        <div class="copyright text-center text-sm text-muted text-lg-start">
                            ©
                            <script>
                                document.write(new Date().getFullYear())
                            </script>,
                            {{-- made with <i class="fa fa-heart"></i> by --}}
                            <a href="https://www.lotto21group.com" class="font-weight-bold" target="_blank">Lotto21</a>
                            Group.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </main>
    <div class="fixed-plugin">
        <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
            <i class="fa fa-cog py-2"> </i>
        </a>
        <div class="card shadow-lg ">
            <div class="card-header pb-0 pt-3 ">
                <div class="float-start">
                    <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
                    <p>See our dashboard options.</p>
                </div>
                <div class="float-end mt-4">
                    <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <!-- End Toggle Button -->
            </div>
            <hr class="horizontal dark my-1">
            <div class="card-body pt-sm-3 pt-0">
                <!-- Sidebar Backgrounds -->
                <div>
                    <h6 class="mb-0">Sidebar Colors</h6>
                </div>
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="badge-colors my-2 text-start">
                        <span class="badge filter bg-gradient-primary active" data-color="primary"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-dark" data-color="dark"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-info" data-color="info"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-success" data-color="success"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-warning" data-color="warning"
                            onclick="sidebarColor(this)"></span>
                        <span class="badge filter bg-gradient-danger" data-color="danger"
                            onclick="sidebarColor(this)"></span>
                    </div>
                </a>
                <!-- Sidenav Type -->
                <div class="mt-3">
                    <h6 class="mb-0">Sidenav Type</h6>
                    <p class="text-sm">Choose between 2 different sidenav types.</p>
                </div>
                <div class="d-flex">
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent"
                        onclick="sidebarType(this)">Transparent</button>
                    <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white"
                        onclick="sidebarType(this)">White</button>
                </div>
                <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
                <!-- Navbar Fixed -->
                <div class="mt-3">
                    <h6 class="mb-0">Navbar Fixed</h6>
                </div>
                <div class="form-check form-switch ps-0">
                    <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed"
                        onclick="navbarFixed(this)">
                </div>
                <hr class="horizontal dark my-sm-4">
            </div>
        </div>
    </div>
    <ul class="pagination pagination-secondary justify-content-end mt-3 me-5">
        {{ $data->onEachSide(1)->links('pagination::bootstrap-4') }}
    </ul>
@endsection
