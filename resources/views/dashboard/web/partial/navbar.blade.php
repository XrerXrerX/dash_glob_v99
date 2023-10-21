<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
        navbar-scroll="true">
        <div class="container-fluid py-1 px-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">{{ Auth::user()->divisi }}
                    </li>
                </ol>
                {{-- <h6 class="font-weight-bolder mb-0">{{ $title }}</h6> --}}
            </nav>
            {{-- <div class="dropdown">
          <button class="btn dropdown-toggle text-white" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user me-sm-1 text-white" aria-hidden="true"></i> {{ auth()->user()->username }}
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            {{-- <li><a class="dropdown-item" href="/changepassword"><i class="fas fa-share-square"></i> Change Passowrd</a></li> --}}
            {{-- <li><a class="dropdown-item" href="{{ route('logout') }}"><i class="fas fa-reply-all"></i> Logout</a></li> --}}
            {{-- <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item"><i class="fas fa-reply-all"></i> logout
                </button>
            </form>
            </ul>
        </div> --}}
        </div>
    </nav>
    <!-- End Navbar -->
