 <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><b>Contacts Management</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('site.contact.create') }}">Criar
                            Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('site.contact.index') }}">Lista
                            de Contactos</a>
                    </li>
                    <li class="nav-item">


                        {{-- <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                            <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div> --}}


                        <!-- Authentication -->
                        @if (isset(Auth::user()->name))

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <a class="nav-link text-danger" href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    Terminar sessão
                                </a>
                            </form>

                        @else
                            <a class="nav-link" href="{{ url('login') }}">Iniciar Sessão</a>
                        @endif





                    </li>

                </ul>

            </div>
        </div>
    </nav>
