<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Herflow</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">


    <!-- CSS Libraries -->

    {{-- bootstrap icons --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="../backend/assets/css/style.css">
    <link rel="stylesheet" href="../backend/assets/css/components.css">

</head>

<body class="col-md-12">


    <!-- Main Content -->
    <div class="main-content-center">
        <section class="section">
            <nav class="navbar-expand-lg">
                <div class="section-header  mb-6" style="background-color:  #3333ff;">
                    <div class="section-header-breadcrumb">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <div class="breadcrumb-item active"><a href="/dashboard"
                                        style="color: #ffffff; text-decoration: none;">
                                        Home
                                    </a></div>
                            </li>
                            <li class="nav-item">
                                <div class="breadcrumb-item active"><a href="/dashboard"
                                        style="color: #ffffff; text-decoration: none;">
                                        Tentang
                                    </a></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <div class="breadcrumb-item"><a href="/sigin" style="color: #ffffff; text-decoration: none;"><i
                                    class="bi bi-box-arrow-in-right" style="color: #ffffff"></i>
                                Login
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            @yield('navbar')

        </section>
    </div>

    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="">Rena Rosiani Nur
                Aisyah</a>
        </div>
        <div class="footer-right">
            2.3.0
        </div>
    </footer>






    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
</body>
