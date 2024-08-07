<header class="bg-warning mb-5">

    <div class="row mx-0 justify-content-center py-2">
        <div class="col-10">
            <div class="row mx-0 justify-content-around">
                <div class="col-2">

                    <img src="/img/logo.jpg" class="logo w-100 circled rounded-5">

                </div>

                <div class="col-6 my-auto">
                    <nav class="fw-bold fs-4 text-end">

                        <a href="{{ route('home') }}"
                            class="px-3 text-decoration-none text-dark py-4 rounded-5 @if (Route::currentRouteName() == 'home') active @endif">HOME</a>
                        <a href="{{ route('comicsList') }}"
                            class="px-3 text-decoration-none text-dark py-4 rounded-5 @if (Route::currentRouteName() == 'comicsList') active @endif">COMICS
                            LIST</a>

                    </nav>
                </div>
            </div>
        </div>
    </div>

</header>
