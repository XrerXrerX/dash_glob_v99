@extends('dashboard.syair.layout.main')
@section('container')
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-left text-dark bg-dark-login mt-3 ms-2 rounded"> Ubah Title </h1>



    <div class="card col-md-11 ms-2 mt-5">

        <table class="border">
            <thead class="border">
                <tr>
                    <th
                        class="text-white text-center text-uppercase text-secondary text-large font-weight-bolder opacity-7 ps-2 w-45 ">
                        title</th>
                    <th
                        class="text-white text-center text-uppercase text-secondary text-large font-weight-bolder opacity-7 w-45">
                        body</th>
                    <th
                        class="text-white text-center text-uppercase text-secondary text-large font-weight-bolder opacity-7 w-10">
                        Action</th>
                </tr>
            </thead>
            <tbody class="border">

                <tr>

                    <td class="border ">{{ $title1->title }}</td>
                    <td class="border">{{ $title1->body }}</td>
                    <td class="text-white text-center">

                        <a href="https://lotto21top.net/syair/title/{{ $title1->id }}/edit">
                            <button class="badge btn-info bg-dark">
                                <i class="fas fa-pencil-alt"></i>
                                <span class="badge">Edit</span>
                            </button>
                        </a>
                    </td>
                </tr>


            </tbody>
        </table>

    </div>
@endsection
