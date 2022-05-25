<header>
    <div class="header-top">
        <ul class="header-top-text d-flex">
            <li class="d-flex">
                <a href="#" class="text-uppercase text-small">dc power visa</a>
                <span> &reg;</span>
            </li>
            <li class="d-flex">
                <a href="#" class="text-uppercase text-small">additional dc sites</a>
                <span> &#9660;</span>
            </li>
        </ul>
    </div>

    <nav>
        <div class="container-nav d-flex">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset( 'images/dc-logo.png' ) }}" alt="logo">
                </a>
            </div>

            <ul class="menu-links d-flex">
                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">characters</a>
                </li>

                <li
                    class="d-flex {{ Request::route()->getName() == 'comics' || Request::route()->getName() == 'singleComic' ? 'active' : '' }}">
                    <a href="{{ route('comics') }}" class="text-uppercase text-small">comics</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">movies</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">tv</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">games</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">collectibles</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">videos</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">fans</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">news</a>
                </li>

                <li class="d-flex">
                    <a href="#" class="text-uppercase text-small">shop
                        <span class="text-small"> &#9660;</span>
                    </a>
                </li>

            </ul>

            <div class="search p-relative">
                <input type="search" placeholder="Search" name="" id="">
                <i class="fa-solid fa-magnifying-glass text-small p-absolute"></i>
            </div>

        </div>
    </nav>

</header>
