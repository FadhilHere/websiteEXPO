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
    <footer class="bg-gray-100">
        <div class="container">
            <div class="grid xl:grid-cols-5 gap-6 py-12">
                <div class="xl:col-span-2">
                    <a href="index.html">
                        <img src="assets/images/logo-dark.png" class="h-8">
                    </a>
                    <p class="text-gray-500/80 mt-5 lg:w-4/5">Make your web application stand out with high-quality
                        landing page</p>
                </div>
                <div class="xl:col-span-3 col-span-4">
                    <div class="flex flex-col sm:flex-row gap-6 flex-wrap justify-between">
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Platform</h5>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Demo</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Pricing</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Integrations</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Status</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Knowledge Base</h5>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Blog</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Help Center</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Sales Tools catalog</a>
                                </div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">API</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Company</h5>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">About us</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Career</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Contact Us</a></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex flex-col gap-3">
                                <h5 class="mb-3 uppercase">Legal</h5>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Usage Policy</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Privacy Policy</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Terms of Service</a></div>
                                <div class="text-gray-500/80"><a href="javascript:void(0);">Trust</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-t py-6">
                <div class="grid sm:grid-cols-2 text-center sm:text-start gap-6">
                    <div>
                        <p class="text-gray-500/80 text-sm">
                            <script>
                                document.write(new Date().getFullYear())
                            </script>© Prompt. All rights reserved. Crafted
                            by <a href="#" class="text-gray-800 hover:text-primary transition-all">Coderthemes</a>
                        </p>
                    </div>

                    <div class="flex justify-center sm:justify-end gap-7">
                        <div>
                            <a href="#">
                                <svg class="w-5 h-5 text-gray-500 hover:text-primary transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <svg class="w-5 h-5 text-gray-500 hover:text-primary transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <div>
                            <a href="#">
                                <svg class="w-5 h-5 text-gray-500 hover:text-primary transition-all"
                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                    </path>
                                    <rect x="2" y="9" width="4" height="12"></rect>
                                    <circle cx="4" cy="4" r="2"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
