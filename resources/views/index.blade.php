<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.title-meta', ['title' => 'EXPO Landing Page'])

    @include('partials.head-css')
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
            <h3 class="text-2xl mb-12 justify-center text-center">Katalog</h3>
            <div>
                <div class="relative">
                    <div class="hidden sm:block">
                        <div
                            class="before:w-24 before:h-24 before:absolute before:-top-8 before:-end-8 before:bg-[url('../images/pattern/dot5.svg')]">
                        </div>
                        <div
                            class="after:w-24 after:h-24 after:absolute after:-bottom-8 after:-start-8 after:bg-[url('../images/pattern/dot2.svg')]">
                        </div>
                    </div>
                    <div id="swiper_one" class="swiper relative">
                        <div class="swiper-wrapper z-10">
                            @foreach ($loadKatalog as $katalog)
                            <div class="swiper-slide flex justify-center items-center p-10">
                                <img src="{{ asset('storage/' . $katalog->foto) }}" class="max-w-xs max-h-48 object-cover" width="200" height="200" onclick="openModal('{{$loop->index}}')">
                            </div>
                            @endforeach
                        </div>
                        <!-- Add Navigation -->
                    </div>

                    <!-- Custom Modal (Outside Swiper) -->
                    @foreach ($loadKatalog as $katalog)
                    <div id="bookModal{{$loop->index}}" class="modal">
                        <span class="close" onclick="closeModal('{{$loop->index}}')">&times;</span>
                        <div class="modal-content">
                            <!-- Container for Turn.js -->
                            <div id="book{{$loop->index}}" class="flipbook">
                                <!-- Pages will be added here dynamically -->
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- =========== Hero Section End =========== -->

    <!-- =========== footer Section Start =========== -->
    @include('partials/footer')
    <!-- =========== footer Section end =========== -->

    @include('partials.back-to-top')

    @include('partials.footer-scripts')

</body>

</html>
