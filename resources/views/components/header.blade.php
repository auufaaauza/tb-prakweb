<!-- SIDEBAR SECTION START -->
<div class="ul-sidebar">
    <!-- header -->
    <div class="ul-sidebar-header">
        <div class="ul-sidebar-header-logo">
            <a href="home">
                <img src="assets/img/logo-dark.svg" alt="logo" class="logo">
            </a>
        </div>
        <!-- sidebar closer -->
        <button class="ul-sidebar-closer"><i class="flaticon-close"></i></button>
    </div>

    <div class="ul-sidebar-header-nav-wrapper d-block d-lg-none"></div>

    <p class="ul-sidebar-descr d-none d-lg-flex">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo magni quis illum iste, omnis sapiente, voluptatum tempora id culpa exercitationem sint sequi officia labore inventore corporis consequuntur dolor numquam, ea cupiditate ipsa dignissimos nostrum. Laboriosam voluptatem qui assumenda nostrum nesciunt, illum iste id nulla unde facilis, explicabo officia. Quae, officia.</p>

    <div class="ul-sidebar-slider-wrapper d-none d-lg-flex">
        <div class="ul-sidebar-slider-nav ul-slider-nav">
            <button class="prev"><i class="flaticon-arrow"></i></button>
            <button class="next"><i class="flaticon-right-arrow"></i></button>
        </div>

        <div class="slider-wrapper">
            <div class="ul-sidebar-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single project -->
                    <div class="swiper-slide">
                        <div class="ul-project">
                            <div class="ul-project-img"><img src="assets/img/logo.png" alt="Project Image"></div>
                            <div class="ul-project-txt">
                                <span class="ul-project-tag">Popular</span>
                                <div class="top">
                                    <div class="left">
                                        <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                        <a href="project-details.html" class="ul-project-title">Faulkner Ave</a>
                                        <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                    </div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                    </div>
                                </div>

                                <!-- bottom -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single project -->
                    <div class="swiper-slide">
                        <div class="ul-project">
                            <div class="ul-project-img"><img src="assets/img/logo.png" alt="Project Image"></div>
                            <div class="ul-project-txt">
                                <span class="ul-project-tag">Popular</span>
                                <div class="top">
                                    <div class="left">
                                        <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                        <a href="project-details.html" class="ul-project-title">Palm Harbor</a>
                                        <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                    </div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                    </div>
                                </div>

                                <!-- bottom -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- single project -->
                    <div class="swiper-slide">
                        <div class="ul-project">
                            <div class="ul-project-img"><img src="assets/img/project-4.jpg" alt="Project Image"></div>
                            <div class="ul-project-txt">
                                <span class="ul-project-tag">Popular</span>
                                <div class="top">
                                    <div class="left">
                                        <span class="ul-project-price"><span class="number">$4,500</span>/Month</span>
                                        <a href="project-details.html" class="ul-project-title">St. Crystal</a>
                                        <p class="ul-project-location">2821 Lake Sevilla, Palm Harbor, TX</p>
                                    </div>
                                    <div class="right">
                                        <button class="ul-project-add-to-favorites-btn"><i class="flaticon-heart"></i></button>
                                    </div>
                                </div>

                                <!-- bottom -->
                                <div class="ul-project-infos ul-featured-property-infos">
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bed-color"></i></span>
                                        <span class="text">3 Beds</span>
                                    </div>
                                    <!-- single info -->
                                    <div class="ul-project-info ul-featured-property-info">
                                        <span class="icon"><i class="flaticon-bath"></i></span>
                                        <span class="text">2 Bathrooms</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- sidebar footer -->
    <div class="ul-sidebar-footer">
        <span class="ul-sidebar-footer-title">Follow us</span>

        <div class="ul-sidebar-footer-social">
            <a href="#"><i class="flaticon-facebook"></i></a>
            <a href="#"><i class="flaticon-twitter"></i></a>
            <a href="#"><i class="flaticon-instagram"></i></a>
            <a href="#"><i class="flaticon-linkedin"></i></a>
        </div>
    </div>
</div>
<!-- SIDEBAR SECTION END -->

<!-- SEARCH MODAL SECTION START -->
<div class="ul-search-form-wrapper flex-grow-1 flex-shrink-0">
    <button class="ul-search-closer"><i class="flaticon-close"></i></button>

    <form action="{{ route('event') }}" method="get" class="ul-search-form">

        <div class="ul-search-form-right">
            <input type="search" name="name" id="ul-search" autocomplete="off" placeholder="Cari Event">
            <button type="submit"><span class="icon"><i class="flaticon-search"></i></span></button>
        </div>
    </form>
</div>
<!-- SEARCH MODAL SECTION END -->

<!-- HEADER SECTION START -->
<header class="ul-header ul-header--home">
    <div class="ul-header-bottom">
        <div class="ul-header-bottom-wrapper">
            <!-- header left -->
            <div class="header-bottom-left">
                <div class="logo-container">
                    <a href="index.html" class="d-inline-block"><img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="logo"></a>
                </div>
            </div>

            <!-- header nav -->
            <div class="ul-header-nav-wrapper">
                <div class="to-go-to-sidebar-in-mobile">
                    <nav class="ul-header-nav">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="{{ route('about') }}">About</a>
                        <a href="{{ route('event') }}">Event</a>
                    </nav>
                </div>
            </div>

            <!-- actions -->
            <div class="ul-header-actions">
                <button class="ul-header-search-opener"><i class="flaticon-search"></i></button>
                @if (auth()->user())
                    <a href="{{ route('filament.admin.auth.login') }}" class="add-property-btn d-xxs-none"><i class="flaticon-user"></i> {{ auth()->user()->name }}</a>
                @else
                    <a href="{{ route('filament.admin.auth.login') }}" class="add-property-btn d-xxs-none"><i class="flaticon-user"></i> Login</a>
                @endif
            </div>

            <!-- sidebar opener -->
            <div class="d-none">
                <button class="ul-header-sidebar-opener"><i class="flaticon-menu-button"></i></button>
            </div>
        </div>
    </div>
</header>
<!-- HEADER SECTION END -->
