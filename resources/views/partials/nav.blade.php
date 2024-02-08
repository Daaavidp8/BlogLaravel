<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand">
            <h1>@yield('cabecera')</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">


                <a href="{{route('Inicio')}}">
                    <li class="list-group-item list-group-item-light menu">
                        <i class="fa-solid fa-house"></i>
                        Pagina de Inicio
                    </li>
                </a>

                <a href="{{route('posts.index')}}">
                    <li class="list-group-item list-group-item-light menu">
                        <i class="fa-regular fa-address-card"></i>
                        Listado de Posts
                    </li>
                </a>

            </ul>
        </div>
    </div>
</nav>
