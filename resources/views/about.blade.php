<x-app-layout>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">About us</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">About us</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->
    <!-- TEAM SECTION START -->
    <section class="ul-team ul-section-spacing">
        <div class="ul-inner-page-container wow animate__fadeInUp">
            <!-- heading -->
            <div class="ul-section-heading">
                <div class="left">
                    <span class="ul-section-sub-title">Tim Kami</span>
                    <h2 class="ul-section-title">Perkenalkan, Tim TixNow Kami</h2>
                </div>
            </div>

            <!-- team slider -->
            <div class="ul-team-slider swiper">
                <div class="swiper-wrapper">
                    <!-- single team -->
                    <div class="swiper-slide">
                        <div class="ul-team-card">
                            <div class="ul-team-card-img">
                                <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Team Image">
                            </div>

                            <div class="ul-team-card-txt">
                                <div class="ul-team-card-socials">
                                    <div class="ul-team-card-socials-links">
                                        <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                        <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                        <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                        <a href="https://instagram.com/auufaaauza_" class=""><i class="flaticon-instagram"></i></a>
                                    </div>
                                    <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                </div>
                                <h4 class="ul-team-card-title"><a href="team-details.html">Aufa</a></h4>
                                <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                            </div>
                        </div>
                    </div>

                    <!-- single team -->
                    <div class="swiper-slide">
                        <div class="ul-team-card">
                            <div class="ul-team-card-img">
                                <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Team Image">
                            </div>

                            <div class="ul-team-card-txt">
                                <div class="ul-team-card-socials">
                                    <div class="ul-team-card-socials-links">
                                        <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                        <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                        <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                        <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                    </div>
                                    <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                </div>
                                <h4 class="ul-team-card-title"><a href="team-details.html">Dela</a></h4>
                                <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                            </div>
                        </div>
                    </div>

                    <!-- single team -->
                    <div class="swiper-slide">
                        <div class="ul-team-card">
                            <div class="ul-team-card-img">
                                <img src="{{ asset('assets/img/team-1.jpg') }}" alt="Team Image">
                            </div>

                            <div class="ul-team-card-txt">
                                <div class="ul-team-card-socials">
                                    <div class="ul-team-card-socials-links">
                                        <a href="#" class=""><i class="flaticon-facebook"></i></a>
                                        <a href="#" class=""><i class="flaticon-twitter"></i></a>
                                        <a href="#" class=""><i class="flaticon-linkedin"></i></a>
                                        <a href="#" class=""><i class="flaticon-instagram"></i></a>
                                    </div>
                                    <div class="ul-team-card-socials-icon"><i class="flaticon-share"></i></div>
                                </div>
                                <h4 class="ul-team-card-title"><a href="team-details.html">Firzha</a></h4>
                                <span class="ul-team-card-subtitle">Call <a href="tel:01236547890">+0123 654 7890</a></span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- TEAM SECTION END -->
</x-app-layout>
