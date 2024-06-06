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
                        <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">TEXTO
                            <span class="relative z-0 after:bg-yellow-200 after:-z-10 after:absolute after:h-6 after:w-full after:bottom-0 after:end-0">Customer</span>
                        </h1>
                        <p class="text-gray-500">An AI based solution which automatically follow ups with your leads and convert into customers</p>
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
                        <div>
                            <img src="assets/images/hero/startup1.svg" alt="startup1-img" data-aos="fade-left" data-aos-duration="1000">
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
