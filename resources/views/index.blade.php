<x-app-layout>
    <!-- BANNER SECTION START -->
    <section class="ul-banner">
        <!-- top -->
        <div class="top">
            <div class="ul-banner-slider swiper">
                <div class="swiper-wrapper">
                    @foreach ($event->take(5) as $key => $value)
                        <div class="swiper-slide">
                            <div class="ul-banner-slide">
                                <div class="ul-banner-container">
                                    <div class="row align-items-center flex-sm-row flex-column-reverse">
                                        <!-- banner text -->
                                        <div class="col-md-9 col-sm-8">
                                            <span class="ul-banner-slide-shadow-title">TixNow</span>
                                            <div class="ul-banner-slide-txt wow animate__fadeInUp">
                                                <h1 class="ul-banner-slide-title">{{ $value->name }}</h1>
                                                <p class="ul-banner-slide-descr">{{ substr($value->description, 0, 227) }}</p>
                                                <div class="ul-banner-slide-btns">
                                                    <a href="/event" class="ul-btn">Beli Tiket</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- banner image -->
                                        <div class="col-md-3 col-sm-4">
                                            <div class="ul-banner-slide-img wow animate__fadeInUp">
                                                <img src="{{ asset('storage/' . $value->image) }}" alt="Banner Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- bottom -->
        <div class="bottom">
            <div class="left wow animate__fadeInUp">
                <div class="ul-banner-address-slider swiper">
                    <div class="swiper-wrapper">
                        @foreach ($event->take(5) as $key => $value)
                            <div class="swiper-slide">
                                <span class="address-1">{{ $value->city->name }}</span>
                                <span class="address-2">{{ $value->address }}</span>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>

            <div class="right wow animate__fadeInUp">
                <div class="ul-banner-slider-pagination"></div>
                <div class="ul-banner-slider-nav ul-slider-nav">
                    <button class="prev"><i class="flaticon-left"></i></button>
                    <button class="next"><i class="flaticon-right"></i></button>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER SECTION END -->


    <!-- CITIES SECTION START -->
    <section class="ul-cities ul-section-spacing">
        <div class="ul-container wow animate__fadeInUp">
            <!-- section heading -->
            <div class="ul-section-heading">
                <div class="left">
                    <h2 class="ul-section-title">Cari Konser di kota anda</h2>
                    <p class="ul-section-descr">Cari, Temukan, Nikmati. Konser Pilihanmu</p>
                </div>
                <div class="right">
                    <a href="{{ route('event') }}" class="ul-btn">Lihat Semua </a>
                </div>
            </div>

            <!-- cities -->
            <div class="row row-cols-xl-4 row-cols-md-3 row-cols-2 row-cols-xxs-1 g-4 mx-auto">
                @foreach ($city->take(8) as $key => $value)
                    <div class="col">
                        <div class="ul-city">
                            <div class="txt text-center">
                                <center>
                                    <h3 class="ul-city-title"><a href="projects.html">{{ $value->name }}</a></h3>
                                </center>
                                <span class="ul-city-count">{{ $value->event->count() }} Event</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- vector -->
        <div class="ul-cities-vectors">
            <img src="assets/img/cities-vector-1.svg" alt="vector" class="vector-1 wow animate__fadeInLeft">
            <img src="assets/img/cities-vector-2.svg" alt="vector" class="vector-2 wow animate__fadeInUp">
        </div>
    </section>
    <!-- CITIES SECTION END -->

    <!-- PROPERTY FILTER SEARCH SECTION START -->
    <section class="ul-property-filter-search ul-section-spacing pt-0">
        <div class="ul-property-filter-search-container">
            <h3 class="ul-property-filter-search-title text-center wow animate__fadeInUp">Cari Event</h3>
            <form action="{{ route('event') }}" method="get" class="ul-property-filter-search-form wow animate__fadeInUp">
                <div class="form-group">
                    <label for="filter-price">Quota</label>
                    <select name="available" id="filter-price">
                        <option disabled selected>Pilih Quota</option>
                        <option value="tersedia">Tersedia</option>
                        <option value="habis">Habis</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="filter-location">City</label>
                    <select name="city" id="filter-location">
                        <option disabled selected>Pilih kota</option>
                        @forelse($city as $key => $value)
                            <option value="{{ $value->slug }}">{{ $value->name }}</option>
                        @empty
                            <option disabled selected>City Not Found</option>
                        @endforelse
                    </select>
                </div>

                <div class="form-group">
                    <label for="filter-price">Price</label>
                    <select name="rangePrice" id="filter-price">
                        <option disabled selected>Pilih range harga</option>
                        <option value="[0,500000]">Rp.0 - Rp.500.000</option>
                        <option value="[500,1000]">Rp.500.000 - Rp.1.000.000</option>
                        <option value="[1000,5000]">Rp.1.000.000 - Rp.5.000.000</option>
                    </select>
                </div>

                <button type="submit"><span class="icon"><i class="flaticon-search"></i></span> Search</button>
            </form>
        </div>
    </section>
    <!-- PROPERTY FILTER SEARCH SECTION END -->

    <!-- PROPERTIES SECTION START -->
    <section class="ul-properties ul-section-spacing">
        <div class="ul-container">
            <!-- section heading -->
            <div class="ul-section-heading text-center justify-content-center wow animate__fadeInUp">
                <div>
                    <span class="ul-section-sub-title">Event Mendatang</span>
                    <h2 class="ul-section-title">Ciptakan Kenangan yang Tak Terlupakan</h2>
                </div>
            </div>

            <div class="tabs-wrapper wow animate__fadeInUp">
                <!-- 1st tab / rent -->
                <div class="ul-tab active" id="tab-rent">
                    <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">

                        <!-- single project -->
                        @forelse($event as $key => $value)
                            <div class="col">
                                <div class="ul-project">
                                    <div class="ul-project-img"><img src="{{ asset('storage/' . $value->image) }}" alt="Project Image"></div>
                                    <div class="ul-project-txt">
                                        <span class="ul-project-tag">{{ $value->city->name }}</span>
                                        <div class="top">
                                            <div class="left">
                                                <span class="ul-project-price"><span class="number">{{ $value->harga }}</span></span>
                                                <a href="project-details.html" class="ul-project-title">{{ $value->name }}</a>
                                                <p class="ul-project-location">{{ $value->address }}</p>
                                            </div>
                                        </div>

                                        <!-- bottom -->
                                        <div class="ul-project-infos ul-featured-property-infos">
                                            <!-- single info -->
                                            <div class="ul-project-info ul-featured-property-success">
                                                @if ($value->quota > 0)
                                                    <span class="icon"><i class="flaticon-checked-1"></i></span>
                                                    <span class="text">{{ $value->quota }} Tiket</span>
                                                @else
                                                    <span class="icon"><i class="flaticon-close-1"></i></span>
                                                    <span class="text"> Tiket habis</span>
                                                @endif
                                            </div>
                                            <!-- single info -->
                                            <div class="ul-project-info ul-featured-property-info">
                                                <span class="icon"><i class="flaticon-calendar"></i></span>
                                                <span class="text">{{ $value->start->format('d, F Y') }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            Belum ada event mendatang
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="text-center wow animate__fadeInUp">
                <a href="{{ route('event') }}" class="ul-btn ul-properties-btn">Lihat Semua Event</a>
            </div>
        </div>
    </section>
    <!-- PROPERTIES SECTION END -->
</x-app-layout>
