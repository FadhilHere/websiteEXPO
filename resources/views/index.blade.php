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
                        <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">{{ $loadLanding->judul }}
                        </h1>
                        <p class="text-gray-500">{{ $loadLanding->isi }}</p>
                        <div class="flex gap-4 mt-16">
                            <button class="flex items-center">
                                <a href="#" class="bg-primary text-white rounded-md hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Know more</a>
                            </button>
                            <button class="flex items-center">
                                <a href="#" class="border border-primary text-primary rounded-md hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Know more</a>
                            </button>
                        </div>
                    </div>

                    <div class="lg:col-span-4 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                        <div style="width: 539.44px; height: 343.09px;">
                            <img src="{{ asset('storage/' . $loadLanding->file) }}" alt="startup1-img" data-aos="fade-left" data-aos-duration="1000">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-8 overflow-x-hidden">
            <div class="container">
                <h3 class="text-2xl mb-12">Feedback From Client</h3>
                <div>
                    <div class="relative">
                        <div class="hidden sm:block">
                            <div class="before:w-24 before:h-24 before:absolute before:-top-8 before:-end-8 before:bg-[url('../images/pattern/dot5.svg')]"></div>
                            <div class="after:w-24 after:h-24 after:absolute after:-bottom-8 after:-start-8 after:bg-[url('../images/pattern/dot2.svg')]"></div>
                        </div>
                        <div id="swiper_one" class="swiper relative">
                            <div class="swiper-wrapper z-10">
                                <!-- 1 -->
                                <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                    <i class="fa-solid fa-quote-left text-gray-500 text-5xl"></i>
                                    <p class="my-4">It is one of the very convenient to use project manager ever! I have tried many project management apps for my daily tasks, but this one is far better than others. Simply loved it!</p>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div class="flex items-center gap-2">
                                        <img src="assets/images/avatars/img-1.jpg" class="h-10 w-10 rounded-full">
                                        <div>
                                            <h1 class="text-sm mb-1">Cersei Lannister</h1>
                                            <p class="text-gray-500 text-xs">Senior Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2 -->
                                <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                    <i class="fa-solid fa-quote-left text-gray-500 text-5xl"></i>
                                    <p class="my-4">It is one of the very convenient to use project manager ever! I have tried many project management apps for my daily tasks, but this one is far better than others. Simply loved it!</p>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div class="flex items-center gap-2">
                                        <img src="assets/images/avatars/img-2.jpg" class="h-10 w-10 rounded-full">
                                        <div>
                                            <h1 class="text-sm mb-1">Cersei Lannister</h1>
                                            <p class="text-gray-500 text-xs">Senior Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3 -->
                                <div class="swiper-slide p-10 border rounded-xl bg-white shadow">
                                    <i class="fa-solid fa-quote-left text-gray-500 text-5xl"></i>
                                    <p class="my-4">It is one of the very convenient to use project manager ever! I have tried many project management apps for my daily tasks, but this one is far better than others. Simply loved it!</p>
                                    <div class="border-b border-gray-200 w-full my-7"></div>
                                    <div class="flex items-center gap-2">
                                        <img src="assets/images/avatars/img-3.jpg" class="h-10 w-10 rounded-full">
                                        <div>
                                            <h1 class="text-sm mb-1">Cersei Lannister</h1>
                                            <p class="text-gray-500 text-xs">Senior Project Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="absolute bottom-0 inset-x-0 hidden sm:block">
            <img src="assets/images/shapes/white-wave.svg" alt="svg" class="w-full -scale-x-100 -scale-y-100">
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
