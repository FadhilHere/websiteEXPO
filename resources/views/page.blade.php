<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.title-meta', ['title' => 'EXPO Landing Page'])

    @include('partials.head-css')
</head>

<body class="text-gray-700">

    @include('partials.navbar')

    <!-- =========== Hero Section Start =========== -->

    <!-- =========== Hero Section End =========== -->

    <!-- =========== footer Section Start =========== -->
    @include('partials/footer')
    <!-- =========== footer Section end =========== -->

    @include('partials.back-to-top')

    @include('partials.footer-scripts')

</body>

</html>
