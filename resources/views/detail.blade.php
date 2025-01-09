<x-app-layout>
    <!-- BREADCRUMB SECTION START -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Event Details</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Event Details</span>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB SECTION END -->

    <div class="ul-inner-page-content-wrapper">
        <div class="ul-inner-page-container">
            <!-- heading -->
            <div class="ul-project-details-heading">
                <div class="left">
                    <h3 class="ul-project-details-title">{{ $event->name }}</h3>
                    <span class="ul-project-details-location"><span class="icon"><i
                                class="flaticon-maps-and-flags"></i></span>{{ $event->city->name }},
                        {{ $event->address }}</span>
                </div>

                <div class="right">
                    <div class="ul-project-details-price"><span class="number">{{ $event->harga }}</span> / <small
                            class="text-small">{{ $event->quota }} Tiket tersisa </small></div>
                </div>
            </div>

            <!-- body -->
            <div class="ul-project-details-body">
                <div class="row gy-5 mb-5">
                    <!-- left -->
                    <div class="col-lg-8">
                        <!-- img slider -->
                        <img src="{{ asset('storage/' . $event->image) }}" class="rounded mb-4" alt="">
                        <!-- description -->
                        <div class="ul-project-details-block wow animate__fadeIn">
                            <h3 class="ul-project-details-title">Description</h3>
                            <p>{{ $event->description }}</p>
                        </div>
                    </div>

                    <!-- right sidebar -->
                    <div class="col-lg-4">
                        <div class="ul-project-details-sidebar wow animate__fadeInUp">
                            <h3 class="ul-project-details-sidebar-title">Form Pembelian Tiket</h3>
                            <form action="{{ route('order.store', $event->slug) }}" method="post"
                                class="ul-project-details-owner-contact-form">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Name*">
                                    @error('name')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone_number" id="phone" placeholder="Phone*">
                                    @error('phone_number')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="number" name="quantity" id="quantity" placeholder="Quantity*"
                                        oninput="calculateTotal()">
                                    @error('quantity')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group mb-4 text-small">
                                    <select name="payment_method" class="form-control" id="">
                                        <option disabled selected>Metode Pembayaran</option>
                                        <option value="Dana">Dana</option>
                                        <option value="Gopay">Gopay</option>
                                        <option value="OVO">OVO</option>
                                        <option value="ShopeePay">ShopeePay</option>
                                    </select>
                                    @error('payment_method')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="total" id="total" placeholder="Total (Rp)"
                                        readonly>
                                    @error('total')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                @if ($event->quota > 0)
                                    <div class="form-group mb-3">
                                        <button type="submit" class="ul-btn">Beli Sekarang</button>
                                    </div>
                                    <button class="ul-btn ul-project-details-wa-btn"><i
                                            class="flaticon-telephone"></i>WhatsApp</button>
                                @endif
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
        function calculateTotal() {
            // Ambil nilai quantity
            const quantity = document.getElementById('quantity').value || 0;
            // Ambil harga tiket (pastikan ini sesuai dengan harga dari backend)
            const price = {{ $event->price }};

            // Hitung total
            const total = quantity * price;

            // Format ke Rupiah
            const formatter = new Intl.NumberFormat('id-ID', {
                style: 'decimal',
                minimumFractionDigits: 0,
                maximumFractionDigits: 0
            });

            // Update nilai total
            const formattedTotal = `Rp ${formatter.format(total)}`;
            document.getElementById('total').value = formattedTotal;
        }

        // Tambahkan event listener untuk input quantity
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('quantity');
            if (quantityInput) {
                quantityInput.addEventListener('input', calculateTotal);
                // Inisialisasi total saat halaman dimuat
                calculateTotal();
            }
        });
    
    </script>
</x-app-layout>
