<nav class="navbar navbar-expand-lg navbar-light bg-light">
    {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
    <a class="navbar-brand" href="{{ route('videos.index') }}">SUCCESS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                {{-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> --}}
                {{-- <a class="nav-link" href="{{ route('videos.index') }}">Home <span class="sr-only">(current)</span></a> --}}

            {{-- </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> --}}
        </ul>
        {{-- <form class="form-inline my-2 my-lg-0"> --}}
            <form class="form-inline my-2 my-lg-0" mechod="GET" action="{{ route('videos.index') }}">
            {{-- <input class="form-control mr-sm-2" type="search" placeholder="Search"> --}}
            <input class="form-control mr-sm-2" type="search" name="category" placeholder="カテゴリ">
            <input class="form-control mr-sm-2" type="search" name="name" placeholder="コーチの名前">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>