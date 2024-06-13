<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.title-meta', ['title' => 'EXPO Landing Page'])

    @include('partials.head-css')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="{{ asset('assets/css/dflip.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="{{ asset('assets/css/themify-icons.min.css') }}" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body class="text-gray-700">

    @include('partials.navbar')

    <!-- =========== Hero Section Start =========== -->
    <section class="bg-gradient-to-t from-yellow-50/80 relative">

        <section class="relative pt-44 pb-40">
            <div class="container">

                <div class="grid lg:grid-cols-7 grid-cols-1 gap-16 items-center">
                    <div class="lg:col-span-3 order-2 lg:order-1 text-center sm:text-start">
                        <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">
                            {{ $loadLanding->judul }}
                        </h1>
                        <p class="text-gray-500">{{ $loadLanding->isi }}</p>
                        <div class="flex gap-4 mt-16">
                            <button class="flex items-center">
                                <a href="#"
                                    class="bg-primary text-white rounded-md hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Know
                                    more</a>
                            </button>
                            <button class="flex items-center">
                                <a href="#"
                                    class="border border-primary text-primary rounded-md hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Know
                                    more</a>
                            </button>
                        </div>
                    </div>

                    <div class="lg:col-span-4 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                        <div style="width: 539.44px; height: 343.09px;">
                            <img src="{{ asset('storage/' . $loadLanding->file) }}" alt="startup1-img"
                                data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="absolute bottom-0 inset-x-0 hidden sm:block">
            <img src="assets/images/shapes/white-wave.svg" alt="svg" class="w-full -scale-x-100 -scale-y-100">
        </div>

    </section>

    <section class="py-16 overflow-x-hidden">
        <div class="container">

            <div class="row">
                <div class="col-xs-12" style="padding-bottom:30px">
                    <!-- Normal FLipbook -->
                    <div class="_df_book" height="500" webgl="true" backgroundcolor="white"
                        source="{{ asset('assets/example-assets/books/intro.pdf') }}" id="df_manual_book">
                    </div>

                </div>
            </div>
        </div>
        {{-- <div class="container">
            <div class="book-wrapper">
                <div class="book-cover">
                    <img src="https://github.com/slyka85/assets/blob/master/bookcover2.png?raw=true" alt="">
                </div>
                <div class="pages-container">
                    <div class="pages">
                        @foreach ($loadKatalog as $index => $katalog)
                            <div class="page-num-{{ $index + 1 }}">
                                <div class="pages-content">
                                    <div class="pages-background"></div>
                                    <div class="content-inner">
                                        <div class="page">
                                            <img src="{{ url('storage/' . $katalog->foto) }}" style="max-width: 200px; height: auto;"class="rounded-md">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </div> --}}
    </section>
    <div class="button">
        <a id="read" class="btn btn-primary mt-2 text-white">Baca PDF <i class="fas fa-book-reader fa-lg"></i></a>
        <a href="pdf/pdf.pdf" class="btn btn-primary mt-2 text-white" download>Unduh PDF <i class="fas fa-download fa-lg"></i></a>
      </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <!-- =========== Hero Section End =========== -->

    <!-- =========== footer Section Start =========== -->
    @include('partials.footer')
    <!-- =========== footer Section end =========== -->

    @include('partials.back-to-top')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    @include('partials.footer-scripts')

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="{{ asset('assets/js/dflip.min.js') }}" type="text/javascript"></script>

</body>

</html>
