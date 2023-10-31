<header>
    <nav class="
        navbar
        bg-primary
        shadow
        px-4
        d-flex flex-column flex-nowrap
        flex-sm-row
    ">
        <x-logo class="wf-45" />
        <a class="navbar-brand text-white ms-2 p-0" href="{{ route('home') }}">
            <b>MemeG</b><span class="fs-6">enerator</span>
        </a>

        <div class="
            navbar-nav
            d-flex flex-row
            justify-content-end
            w-100
        ">
            <a href="{{ route('login') }}" class="text-white text-decoration-none">
                Entrar
            </a>
{{--                <b class="text-white me-1">--}}
{{--                    Auth::user()->name--}}
{{--                </b>--}}

{{--                <div>--}}
{{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST">--}}
{{--                        @csrf--}}
{{--                        <input--}}
{{--                            type="submit"--}}
{{--                            class="btn text-white py-0"--}}
{{--                            value="{{ __('common.logout') }}"--}}
{{--                        />--}}
{{--                    </form>--}}
{{--                </div>--}}
        </div>

    </nav>
</header>
