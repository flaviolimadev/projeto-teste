
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo14/auth_register_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 18:13:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>ANTIRED - Numca mais quebre sua banca</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/authentication/form-2.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/theme-checkbox-radio.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/forms/switches.css') }}">

    <link href="{{ asset('assets/css/scrollspyNav.css" rel="stylesheet" type="text/css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/elements/alert.css') }}">
    <style>
        .log-left {
            background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url("https://img.freepik.com/fotos-premium/estadio-de-futebol-com-holofotes_163782-3550.jpg");
            background-size: cover;
            background-position: center center;
        }

        .btn-light { border-color: transparent; }

        .alert-primary {
            color: #fff;
            background-color: #e7515a;
            border-color: #e7515a;
        }

        .form-form .form-container .form-content {
            background: rgba(0, 0, 0, 0.5);
        }

        *::-webkit-scrollbar {
            width: 12px;
        }

        *::-webkit-scrollbar-track {
            background: #060818;
        }

        *::-webkit-scrollbar-thumb {
            background-color: #191e3a;
            border-radius: 20px;
            border: 3px solid #060818;
        }
    </style>
</head>
<body class="form">


    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    @yield('conteudo')
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>


    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{ asset('assets/js/authentication/form-2.js') }}"></script>
    <script src="{{ asset('plugins/highlight/highlight.pack.js') }}"></script>


</body>

<!-- Mirrored from designreset.com/cork/ltr/demo14/auth_register_boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Aug 2022 18:13:30 GMT -->
</html>
