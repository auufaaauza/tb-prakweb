<x-app-layout>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Order Detail</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Order Detail</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <!-- APP AD SECTION START -->
    <div class="ul-app-ad wow animate__fadeInUp">
        <div class="ul-app-ad-container">
            <div class="ul-app-ad-content">
                <div class="row align-items-start gy-5">
                    <!-- txt -->
                    <div class="col-lg-8">
                        <div class="ul-app-ad-txt mb-5">
                            <h2 class="ul-section-title">TERIMA KASIH</h2>
                            <h2 class="ul-section-title">Nomor pesanan anda : {{ $order->slug }}</h2>
                            <div class="ul-app-ad-btns">
                                <a href="{{ route('home') }}">
                                    <button>
                                        <span>
                                            <span class="title py-2"> Beranda</span>
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- img -->
                    <div class="col-lg-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- APP AD SECTION END -->
</x-app-layout>
