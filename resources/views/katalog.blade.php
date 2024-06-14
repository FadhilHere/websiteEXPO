<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.title-meta', ['title' => 'Katalog Produk'])

    <!-- glightbox css -->
    <link rel="stylesheet" href="{{ asset('assets/libs/glightbox/css/glightbox.min.css') }}">

    @include('partials.head-css')
</head>

<body>

    @include('partials.navbar', ['linkColor' => 'light'])

    <!-- =========== Hero Section Start =========== -->
    <section class="pt-36 pb-24 bg-slate-100">
        <div class="container">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="md:text-5xl/tight text-3xl font-semibold mb-5">List Katalog</h2>
                <p class="lg:text-lg text-slate-500 leading-7">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                    aut odit aut fugit sed consequuntur ratione voluptatem sequi nesciunt.</p>
            </div>
        </div>
    </section>
    <!-- =========== Hero Section End =========== -->

    <!-- =========== Filter Section Start =========== -->
    <section class="py-20 relative">
        <div class="container">
            <div>
                <ul class="filter-options flex flex-wrap justify-center gap-2">
                    <li class="inline-block active" data-group="all">
                        <a href="javascript: void(0);">All</a>
                    </li>
                    @foreach ($loadKategori as $kategori)
                        <li class="inline-block" data-group="{{ $kategori }}">
                            <a href="javascript: void(0);">{{ $kategori }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div id="gallery-wrapper" class="md:flex justify-center mx-auto mt-6">

                @foreach ($loadKatalog as $katalog)
                    <div class="lg:w-1/3 md:w-1/2 p-2 picture-item" data-groups='["{{ $katalog->kategori }}"]'>
                        <div class="p-2 rounded">
                            <div class="flex justify-center items-center">
                                <a href="{{ route('showkatalog', ['id' => $katalog->id]) }}"
                                    class="d-inline-block position-relative overflow-hidden">
                                    <img src="{{ url('storage/' . $katalog->foto) }}"
                                        class="w-100 h-auto transition-transform origin-center hover-scale-110 object-cover"
                                        style="height: 200px;">
                                </a>
                            </div>
                            <div class="p-4">
                                <h5 class="text-lg font-semibold">{{ $katalog->judul }}</h5>
                                <div class="mb-2">
                                    <p class="text-muted d-inline">{{ $katalog->author }} - {{ $katalog->tahun }}</p>
                                </div>

                                <p class="text-muted mb-2"
                                    style="font-size: 12px; max-height: 100px; overflow: hidden; text-overflow: ellipsis;">
                                    {{ substr(str_replace('&nbsp;', ' ', strip_tags($katalog->deskripsi)), 0, 30) }}{{ strlen(strip_tags($katalog->deskripsi)) > 45 ? '...' : '' }}
                                </p>

                                <a href="{{ route('showkatalog', ['id' => $katalog->id]) }}"
                                    class="inline-block text-center border border-blue-500 text-blue-500 px-4 py-2 rounded hover:bg-blue-500 hover:text-black w-full transition duration-300">
                                    Lihat Produk
                                </a>

                            </div>
                        </div>
                    </div>
                @endforeach








            </div>
        </div>
    </section>
    <!-- =========== Filter Section End =========== -->

    <!-- =========== Footer Section Start =========== -->
    @include('partials.footer')
    <!-- =========== Footer Section End =========== -->

    @include('partials.back-to-top')

    <!-- Shufflejs Plugin Js -->
    <script src="{{ asset('assets/libs/shufflejs/shuffle.min.js') }}"></script>

    <!-- glightbox Plugin Js -->
    <script src="{{ asset('assets/libs/glightbox/js/glightbox.min.js') }}"></script>

    <!-- Portfolio Masonry Js -->
    <script src="{{ asset('assets/js/gallery.min.js') }}"></script>


    @include('partials.footer-scripts')

</body>

</html>
