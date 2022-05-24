<header>
    <div class="header-top">
        <ul class="header-top-text">
            <li>
               <a href="#">dc power visa</a>
               <span> &reg;</span>
            </li>
            <li>
                <a href="#">additional dc sites</a>
                <span> &#9660;</span>
            </li> 
        </ul>
    </div>

    <nav>
        <div class="container-nav">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset( 'images/dc-logo.png' ) }}" alt="logo">
                </a>
            </div>

            <ul class="menu-links">
                <li>
                    <a href="#">characters</a>
                </li>

                <li class="{{ Request::route()->getName() == 'comics' || Request::route()->getName() == 'singleComic' ? 'active' : '' }}">
                    <a href="{{ route('comics') }}">comics</a>
                </li>

                <li>
                    <a href="#">movies</a>
                </li>

                <li>
                    <a href="#">tv</a>
                </li>

                <li>
                    <a href="#">games</a>
                </li>

                <li>
                    <a href="#">collectibles</a>
                </li>

                <li>
                    <a href="#">videos</a>
                </li>

                <li>
                    <a href="#">fans</a>
                </li>

                <li>
                    <a href="#">news</a>
                </li>

                <li>
                    <a href="#">shop
                        <span> &#9660;</span>
                    </a>
                </li>

            </ul>

            <div class="search">
                <input type="search" placeholder="Search" name="" id="">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>

        </div>
    </nav>

</header>