@extends('dashboard.paito.layout.main')
@section('container')
    @php
        $search_pasaran = request()->get('search_pasaran');
        $search_hari = request()->get('search_hari');
        $search_bulan = request()->get('search_bulan');
        
        if (isset($search_pasaran) || $search_pasaran != '') {
            $search_pasaran = $search_pasaran;
        } else {
            $search_pasaran = '';
        }
        
        if (isset($search_hari) || $search_hari != '') {
            $search_hari = $search_hari;
        } else {
            $search_hari = '';
        }
        
        if (isset($search_bulan) || $search_bulan != '') {
            $search_bulan = $search_bulan;
        } else {
            $search_bulan = '';
        }
        
    @endphp
    <div class="container-fluid py-4">
        <div class="row">
            <h4 class="ms-1 font-weight-bold">DATA RESULT</h4>
            <div class="col-md-12 mt-2">
                <div class="row">
                    <div class="col-md-3">
                        <button class="btn btn-icon btn-3 btn btn-outline-light bg-dark" data-bs-toggle="modal"
                            data-bs-target="#modal-default" type="button">
                            <span class="btn-inner--text text-large"><i class="ni ni-fat-add"></i>Tambah Result</span>
                        </button>
                        <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                            aria-labelledby="modal-default" aria-hidden="true">
                            <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('result.store') }}" method="POST">
                                        @csrf
                                        <div class="modal-header">
                                            <h6 class="modal-title" style="color: black" id="modal-title-default">Tambah
                                                Result</h6>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <span aria-hidden="true" style="color: black">X</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    @php
                                                        $pasarans = app('App\Http\Controllers\PaitoResultController')->getData();
                                                    @endphp
                                                    <select class="form-select pasaran" aria-label="Default select example"
                                                        name="pasaran" id="pasaran">
                                                        <option selected>Pilih Pasarannya</option>
                                                        @foreach ($pasarans as $pasaran)
                                                            <option value="{{ $pasaran->pasaran_nama }}">
                                                                {{ $pasaran->pasaran_text }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group">
                                                        <input type="email" class="form-control" id="result"
                                                            name="hari" placeholder="Result">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="hari" name="hari">
                                                        <option selected>Hari</option>
                                                        <option value="Senin">Senin</option>
                                                        <option value="Selasa">Selasa</option>
                                                        <option value="Rabu">Rabu</option>
                                                        <option value="Kamis">Kamis</option>
                                                        <option value="Jumat">Jumat</option>
                                                        <option value="Sabtu">Sabtu</option>
                                                        <option value="Minggu">Minggu</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="bulan" name="bulan">
                                                        <option selected>Bulan</option>
                                                        <option value="Januari">Januari</option>
                                                        <option value="Februari">Februari</option>
                                                        <option value="Maret">Maret</option>
                                                        <option value="April">April</option>
                                                        <option value="Mei">Mei</option>
                                                        <option value="Juni">Juni</option>
                                                        <option value="Juli">Juli</option>
                                                        <option value="Agustus">Agustus</option>
                                                        <option value="September">September</option>
                                                        <option value="Oktober">Oktober</option>
                                                        <option value="November">November</option>
                                                        <option value="Desember">Desember</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12 mt-3">
                                                    <select class="form-select" aria-label="Default select example"
                                                        id="tahun" name="tahun">
                                                        <option selected>Tahun</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" id="submit-btn1"
                                                class="btn bg-gradient-primary">Submit</button>
                                            <button type="button" class="btn btn-link  ml-auto"
                                                data-bs-dismiss="modal">Batal</button>
                                        </div>
                                        <script>
                                            $(document).ready(function() {
                                                $("#submit-btn1").click(function(e) {
                                                    e.preventDefault();

                                                    $.ajax({
                                                        url: "{{ route('result.store') }}",
                                                        method: "POST",
                                                        data: {
                                                            pasaran: $("#pasaran").val(),
                                                            result: $("#result").val(),
                                                            hari: $("#hari").val(),
                                                            bulan: $("#bulan").val(),
                                                            tahun: $("#tahun").val(),
                                                            _token: "{{ csrf_token() }}"
                                                        },
                                                        success: function(response) {
                                                            // tambahkan kode untuk menangani respons dari server
                                                            $("#modal-default").modal("hide");
                                                            window.location
                                                                .reload(); // sembunyikan modal setelah data berhasil disimpan
                                                        },
                                                        error: function(xhr) {
                                                            // tambahkan kode untuk menangani kesalahan saat mengirimkan data ke server
                                                            console.log(xhr.responseText);
                                                        }
                                                    });
                                                });
                                            });
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        @php
                            $pasarans = app('App\Http\Controllers\PaitoResultController')->getData();
                        @endphp

                        <form method="GET">
                            <div class="row">
                                <div class="col-md-5">
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select search_pasaran" aria-label="Default select example"
                                        name="search_pasaran" id="search_pasaran">
                                        <option>Pilih Pasarannya</option>
                                        @foreach ($pasarans as $pasaran)
                                            <option value="{{ $pasaran->pasaran_nama }}"
                                                {{ $pasaran->pasaran_nama == $search_pasaran ? 'selected' : '' }}>
                                                {{ $pasaran->pasaran_text }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select hari" name="search_hari" id="search_hari">
                                        <option selected>Pilih Hari</option>
                                        <option value="Senin" {{ $search_hari == 'Senin' ? 'selected' : '' }}>Senin
                                        </option>
                                        <option value="Selasa" {{ $search_hari == 'Selasa' ? 'selected' : '' }}>Selasa
                                        </option>
                                        <option value="Rabu" {{ $search_hari == 'Rabu' ? 'selected' : '' }}>Rabu
                                        </option>
                                        <option value="Kamis" {{ $search_hari == 'Kamis' ? 'selected' : '' }}>Kamis
                                        </option>
                                        <option value="Jumat" {{ $search_hari == 'Jumat' ? 'selected' : '' }}>Jumat
                                        </option>
                                        <option value="Sabtu" {{ $search_hari == 'Sabtu' ? 'selected' : '' }}>Sabtu
                                        </option>
                                        <option value="Minggu" {{ $search_hari == 'Minggu' ? 'selected' : '' }}>Minggu
                                        </option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <select class="form-select" id="search_bulan" name="search_bulan">
                                        <option>Pilih Bulan</option>
                                        <option value="January" {{ $search_bulan == 'January' ? 'selected' : '' }}>
                                            Januari
                                        </option>
                                        <option value="February" {{ $search_bulan == 'February' ? 'selected' : '' }}>
                                            Februari
                                        </option>
                                        <option value="March" {{ $search_bulan == 'March' ? 'selected' : '' }}>Maret
                                        </option>
                                        <option value="April" {{ $search_bulan == 'April' ? 'selected' : '' }}>April
                                        </option>
                                        <option value="May" {{ $search_bulan == 'May' ? 'selected' : '' }}>Mei
                                        </option>
                                        <option value="June" {{ $search_bulan == 'June' ? 'selected' : '' }}>Juni
                                        </option>
                                        <option value="July" {{ $search_bulan == 'July' ? 'selected' : '' }}>Juli
                                        </option>
                                        <option value="August" {{ $search_bulan == 'August' ? 'selected' : '' }}>
                                            Agustus
                                        </option>
                                        <option value="September" {{ $search_bulan == 'September' ? 'selected' : '' }}>
                                            September</option>
                                        <option value="October" {{ $search_bulan == 'October' ? 'selected' : '' }}>
                                            Oktober
                                        </option>
                                        <option value="November" {{ $search_bulan == 'November' ? 'selected' : '' }}>
                                            November</option>
                                        <option value="December" {{ $search_bulan == 'December' ? 'selected' : '' }}>
                                            Desember</option>
                                    </select>
                                </div>
                                {{-- <button type="submit" class="btn btn-primary">Submit</button> --}}
                            </div>
                        </form>
                    </div>

                </div>
            </div>
            <div class="card mt-3">
                <div class="card">
                    <div class="table-responsive">
                        @if (!empty($data))
                            <table class="table align-items-center mb-0">
                                <thead style="position: sticky; z-index: 1;" class="thead-dark">
                                    <tr>
                                        <th style="width: 5%" class="text-center">
                                            <h5>#</h5>
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            <h5>Tanggal</h5>
                                        </th>
                                        <th style="width: 20%" class="text-center">
                                            <h5>Pasaran</h5>
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            <h5>Result</h5>
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            <h5>Hari</h5>
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            <h5>Bulan</h5>
                                        </th>
                                        <th style="width: 10%">
                                            <h5>Action</h5>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody data-aos="fade-up" data-aos-duration="900">
                                    @foreach ($data as $result)
                                        <tr>
                                            <td class="text-center">
                                                #
                                            </td>
                                            <td class="text-center text-white">
                                                {{ $result->created_at != '' ? \Carbon\Carbon::parse($result->created_at)->format('d-m-Y') : date('d-m-Y') }}
                                            </td>
                                            <td class="text-center text-white">
                                                {{ $result->pasaran }}
                                            </td>
                                            <td class="text-center text-white">
                                                {{ $result->result }}
                                            </td>
                                            <td class="text-center text-white">
                                                {{ $result->hari }}
                                            </td>
                                            <td class="text-center text-white">
                                                {{ $result->bulan }}
                                            </td>
                                            <td class="project-actions text-right">
                                                <button class="badge btn-info bg-dark" data-bs-toggle="modal"
                                                    data-bs-target="#modal-default1{{ $result->id }}" href="#">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    <span class="badge ">Edit</span>
                                                </button>
                                                <form action="{{ route('result.destroy', $result->id) }}" method="POST"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="badge btn-danger bg-dark"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus?')">
                                                        <i class="fas fa-trash">
                                                        </i> <span class="badge">Delete</span></button>
                                                </form>
                                                <div class="modal fade" id="modal-default1{{ $result->id }}"
                                                    tabindex="-1" role="dialog" aria-labelledby="modal-default"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog modal- modal-dialog-centered modal-"
                                                        role="document">
                                                        <div class="modal-content">
                                                            <form method="POST"
                                                                action="{{ route('result.update', $result->id) }}"
                                                                id="edit-form-{{ $result->id }}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-header">
                                                                    <h6 class="modal-title" style="color: black"
                                                                        id="modal-title-default">Edit Data</h6>
                                                                    <button type="button" class="btn-close text-dark"
                                                                        data-bs-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true"
                                                                            style="color: black">X</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row mt-3">
                                                                        <div class="col-md-12">
                                                                            @php
                                                                                $pasarans = app('App\Http\Controllers\PaitoResultController')->getData();
                                                                            @endphp
                                                                            <select class="form-select pasaran"
                                                                                aria-label="Default select example"
                                                                                name="pasaran" id="pasaran">
                                                                                <option selected>Pilih Pasarannya
                                                                                </option>
                                                                                @foreach ($pasarans as $pasaran)
                                                                                    <option
                                                                                        value="{{ $pasaran->pasaran_nama }}">
                                                                                        {{ $pasaran->pasaran_text }}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 mt-3">
                                                                            <div class="form-group">
                                                                                <input type="text" class="form-control"
                                                                                    id="result" name="result"
                                                                                    placeholder="{{ $result->result }}">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <select class="form-select"
                                                                                aria-label="Default select example"
                                                                                id="hari" name="hari">
                                                                                <option selected disabled>Hari</option>
                                                                                <option value="Senin"
                                                                                    {{ $result->hari == 'Senin' ? 'selected' : '' }}>
                                                                                    Senin</option>
                                                                                <option value="Selasa"
                                                                                    {{ $result->hari == 'Selasa' ? 'selected' : '' }}>
                                                                                    Selasa</option>
                                                                                <option value="Rabu"
                                                                                    {{ $result->hari == 'Rabu' ? 'selected' : '' }}>
                                                                                    Rabu</option>
                                                                                <option value="Kamis"
                                                                                    {{ $result->hari == 'Kamis' ? 'selected' : '' }}>
                                                                                    Kamis</option>
                                                                                <option value="Jumat"
                                                                                    {{ $result->hari == 'Jumat' ? 'selected' : '' }}>
                                                                                    Jumat</option>
                                                                                <option value="Sabtu"
                                                                                    {{ $result->hari == 'Sabtu' ? 'selected' : '' }}>
                                                                                    Sabtu</option>
                                                                                <option value="Minggu"
                                                                                    {{ $result->hari == 'Minggu' ? 'selected' : '' }}>
                                                                                    Minggu</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-12 mt-3">
                                                                            <select class="form-select" id="bulan"
                                                                                name="bulan"
                                                                                aria-label="Default select example">
                                                                                <option selected>Bulan</option>
                                                                                <option value="Januari"
                                                                                    {{ $result->bulan == 'Januari' ? 'selected' : '' }}>
                                                                                    Januari</option>
                                                                                <option value="Februari"
                                                                                    {{ $result->bulan == 'Februari' ? 'selected' : '' }}>
                                                                                    Februari</option>
                                                                                <option value="Maret"
                                                                                    {{ $result->bulan == 'Maret' ? 'selected' : '' }}>
                                                                                    Maret</option>
                                                                                <option value="April"
                                                                                    {{ $result->bulan == 'April' ? 'selected' : '' }}>
                                                                                    April</option>
                                                                                <option value="Mei"
                                                                                    {{ $result->bulan == 'Mei' ? 'selected' : '' }}>
                                                                                    Mei</option>
                                                                                <option value="Juni"
                                                                                    {{ $result->bulan == 'Juni' ? 'selected' : '' }}>
                                                                                    Juni</option>
                                                                                <option value="Juli"
                                                                                    {{ $result->bulan == 'Juli' ? 'selected' : '' }}>
                                                                                    Juli</option>
                                                                                <option value="Agustus"
                                                                                    {{ $result->bulan == 'Agustus' ? 'selected' : '' }}>
                                                                                    Agustus</option>
                                                                                <option value="September"
                                                                                    {{ $result->bulan == 'September' ? 'selected' : '' }}>
                                                                                    September</option>
                                                                                <option value="Oktober"
                                                                                    {{ $result->bulan == 'Oktober' ? 'selected' : '' }}>
                                                                                    Oktober</option>
                                                                                <option value="November"
                                                                                    {{ $result->bulan == 'November' ? 'selected' : '' }}>
                                                                                    November</option>
                                                                                <option value="Desember"
                                                                                    {{ $result->bulan == 'Desember' ? 'selected' : '' }}>
                                                                                    Desember</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="submit"
                                                                        class="btn bg-gradient-primary">Update</button>
                                                                    <button type="button" class="btn btn-link  ml-auto"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                    </div>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @if (isset($data))
        {{-- <div class="d-flex justify-content-end mt-4">
    {{ $data->appends(['pasaran_nama' => $selected_pasaran])->onEachSide(1)->links('pagination::bootstrap-4') }}
  </div> --}}


        <ul class="pagination pagination-secondary justify-content-end mt-3 me-5">
            {{ $data->appends(['search_pasaran' => $search_pasaran_get, 'search_hari' => $search_hari_get, 'search_bulan' => $search_bulan_get])->onEachSide(1)->links('pagination::bootstrap-4') }}
        </ul>
    @endif
    @if ($message != '')
        <div class="alert alert-secondary alert-dismissible fade show  text-white " role="alert">
            <span class="alert-icon"><i class="ni ni-like-2"></i></span>
            <span class="alert-text"><strong>Pilih Pasaran!</strong> {{ $message }}</span>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif
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

@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#search_pasaran').on('change', function() {
            $(this).closest('form').submit();
        });

        $('#search_hari').on('change', function() {
            if ($('#search_pasaran').val() == 'Pilih Pasarannya') {
                alert('Harap pilih pasaran nya terlebih dahulu');
                $('#search_hari').val('Pilih Hari');
            }
            $(this).closest('form').submit();
        });

        $('#search_bulan').on('change', function() {
            if ($('#search_pasaran').val() == 'Pilih Pasarannya') {
                alert('Harap pilih pasaran nya terlebih dahulu');
                $('#search_bulan').val('Pilih Bulan');
            }
            $(this).closest('form').submit();
        });

    });
</script>
