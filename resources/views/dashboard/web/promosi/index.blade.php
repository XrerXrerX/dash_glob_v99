@extends('dashboard.web.layout.main')

@section('container')
    <div class="col-12 mt-4">
        <div class="container-fluid ">
            {{-- <h4 class="ms-1 font-weight-bold">List Promosi</h4> --}}
            <div class="row ">

                <div class="col-md-3">
                    <a class="btn btn-icon btn-3 btn btn-outline-light bg-dark" href="/web/promosi/create">
                        <span class="btn-inner--text text-large"> <i class="ni ni-fat-add"></i>
                            Tambah</a>

                </div>
                <div class="col-md-6">
                </div>
                <div class="col-md-3">
                    <form action="/web/promosi">
                        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                            <div class="input-group">
                                <span class="input-group-text text-body"><i class="fas fa-search"
                                        aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="Search..." name="search"
                                    value="{{ request('search') }}">
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead style="position: sticky; z-index: 1;" class="thead-dark">
                                    <tr>
                                        <th style="width: 10%" class="text-center">
                                            <h6>No.</h6>
                                        </th>
                                        <th style="width: 30%" class="text-center">
                                            <h6>Website</h6>
                                        </th>
                                        <th style="width: 40%" class="text-center">
                                            <h6>Situs</h6>
                                        </th>
                                        <th style="width: 100%" class="text-center">
                                            <h6>Gambar</h6>
                                        </th>

                                        <th style="width: 90%" class="text-center">
                                            <h6>Deskripsi</h6>
                                        </th>
                                        <th style="width: 10%" class="text-center">
                                            <h6>Action</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @dd($data) --}}
                                    @foreach ($data as $d)
                                        <tr>
                                            <td class="text-center text-white"> {{ $loop->iteration }} </td>
                                            <td class="text-center text-white"> {{ $d->website }} </td>
                                            <td class="text-center text-white"> {{ $d->website_url }} </td>
                                            <td class="text-left text-white">
                                                @if ($d->created_at < '2023-05-16 12:07:29')
                                                    <img src="{{ asset('storage/Web-Promosi/' . $d->image_url) }}"
                                                        class="img-thumbnail" id="gambar_promosi"
                                                        onClick="changePicture();">
                                                @else
                                                    <img src="{{ asset('storage/' . $d->image_url) }}" class="img-thumbnail"
                                                        id="gambar_promosi" onClick="changePicture();">
                                                @endif


                                            </td>

                                            <td class="text-left text-white">
                                                {{ implode(' ', array_slice(str_word_count($d->deskripsi, 1), 0, 5)) }} ...
                                            </td>

                                            <td class="project-actions text-right mt-10">

                                                <a href="{{ route('promosi.edit', $d->id) }}">
                                                    <button class="badge btn-info bg-dark d-inline"><i
                                                            class="fas fa-pencil-alt">
                                                        </i><span class="badge ">Edit</span></button></a>
                                                <form action="/web/promosi/{{ $d->id }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" class="badge btn-danger bg-dark"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus?');">
                                                        <i class="fas fa-pencil-alt"></i>
                                                        <span class="badge">Delete</span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <ul class="pagination pagination-secondary justify-content-end mt-3 me-5">
            {{ $data->onEachSide(1)->links('pagination::bootstrap-4') }}
        </ul>

        <script>
            function changePicture() {
                // var image1 = document.getElementById("gambar_promosi");
                // var url = prompt("change image source", image1.src);

                // image1.src = url;
            }
        </script>
    @endsection
