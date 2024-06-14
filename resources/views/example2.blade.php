<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DFlip / examples</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

    <!-- Flipbook StyleSheet -->
    <link href="{{ asset('assets/css/dflip.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Icons Stylesheet -->
    <link href="{{ asset('assets/css/themify-icons.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-xs-12" style="padding-bottom:30px">
                <!-- Normal FLipbook -->
                <div class="_df_book" height="500" webgl="true" backgroundcolor="teal"
                    source="{{ asset('assets/example-assets/books/intro.pdf') }}" id="df_manual_book">
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <!-- Flipbook main Js file -->
    <script src="{{ asset('assets/js/dflip.min.js') }}" type="text/javascript"></script>

</body>

</html>
