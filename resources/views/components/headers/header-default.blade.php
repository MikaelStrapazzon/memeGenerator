<header class="p-2 mb-3 border-bottom bg-primary shadow">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('home') }}" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <x-logo class="wf-45" />
                <b class="ms-2 fs-5">MemeG</b><span>enerator</span>
            </a>

            <span class="nav col-12 col-lg-auto me-lg-auto mb-2 mb-md-0">
            </span>

            <div class="dropdown text-end">
                @if(Auth::check())
                    <a href="#" class="d-flex text-decoration-none dropdown-toggle align-items-center text-white" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <x-icon-user class="wf-16 me-2" />
                        <b>Mario</b>
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1" style="">
                        <li><a class="dropdown-item" href="#">Histórico</a></li>
                        <li><a class="dropdown-item" href="#">Templates</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <input type="submit" class="dropdown-item" value="Deslogar" />
                            </form>
                        </li>
                    </ul>
                @else
                    <a href="{{ route('login') }}">
                        <button type="button" class="btn btn-outline-light">Entrar</button>
                    </a>
                @endif
            </div>
        </div>
    </div>
</header>
