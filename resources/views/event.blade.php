<x-app-layout>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Event</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Event</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper ul-projects-page-content-wrapper">
        <div class="ul-inner-page-container">
            <!-- search filters -->
            <form action="{{ route('event') }}" method="get" class="ul-projects-search-filters">
                <div
                    class="row row-cols-lg-4 row-cols-sm-3 row-cols-2 row-cols-xxs-1 justify-content-center wow animate__fadeInUp">
                    <div class="col">
                        <select name="available" id="keyword">
                            <option disabled selected>Enter Quota</option>
                            <option @if (request()->available == 'tersedia') selected @endif value="tersedia">Tersedia</option>
                            <option @if (request()->available == 'habis') selected @endif value="habis">Habis</option>
                        </select>
                    </div>
                    <div class="col">
                        <select name="city" id="property-type">
                            <option disabled selected>Enter City</option>
                            @forelse($city as $key => $value)
                                <option @if (request()->city == $value->slug) selected @endif value="{{ $value->slug }}">
                                    {{ $value->name }}</option>
                            @empty
                                <option disabled selected>City Not Found</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col">
                        <select name="rangePrice" id="location">
                            <option disabled selected>Range Price</option>
                            <option @if (request()->rangePrice == '[0,500000]') selected @endif value="[0,500000]">Rp.0 -
                                Rp.500.000</option>
                            <option @if (request()->rangePrice == '[500000,1000000]') selected @endif value="[500000,1000000]">
                                Rp.500.000 - Rp.1.000.000</option>
                            <option @if (request()->rangePrice == '[1000000,5000000]') selected @endif value="[1000000,5000000]">
                                Rp.1.000.000 - Rp.5.000.000</option>
                        </select>
                    </div>
                    <div class="col">
                        <div class="ul-projects-search-filters-btns">
                            <button type="button" id="resetFilter" class="ul-projects-search-filters-expand-btn">
                                <i class="flaticon-close"></i>
                            </button> <button type="submit" class="ul-projects-search-filters-btn ul-btn">Search
                                Event</button>
                        </div>
                    </div>
                </div>

            </form>

            <!-- project cards grid -->
            <div class="row row-cols-md-3 row-cols-2 row-cols-xxs-1 ul-bs-row">
                @forelse($event as $key => $value)
                <div class="col wow animate__fadeInUp">
                    <div class="ul-project">
                        <div class="ul-project-img"><img src="{{ asset('storage/' . $value->image) }}"
                                alt="Project Image"></div>
                        <div class="ul-project-txt">
                            <span class="ul-project-tag">{{ $value->city->name }}</span>
                            <div class="top">
                                <div class="left">
                                    <span class="ul-project-price"><span
                                            class="number">{{ 'Rp.' . number_format($value->price, 2, ',', '.') }}</span></span>
                                    <a href="{{ route('event.detail', $value->slug) }}"
                                        class="ul-project-title">{{ $value->name }}</a>
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

                                <a href="event/{{ $value->slug }}" class="hover:cursor-pointer">
                                    Beli Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                    <div class="text-center">
                        Event belum ada
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    <script>
        document.getElementById('resetFilter').addEventListener('click', function() {
            // Reset semua select ke option default
            document.getElementById('keyword').selectedIndex = 0;
            document.getElementById('property-type').selectedIndex = 0;
            document.getElementById('location').selectedIndex = 0;

            // Optional: Otomatis submit form setelah reset
            document.querySelector('.ul-projects-search-filters').submit();
        });
    </script>
</x-app-layout>
