@extends('template.navbar')
@section('navbar')
    <div class="card">
        <div class="d-flex align-items-center">
            <div class="container mb-6">
                <div class="row bg-white">
                    <div class="col-lg-6 d-flex flex-column  justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                        data-aos="fade-up" data-aos-delay="200">
                        <div class="card-body text-left mt-5">
                            <h1>Better Solutions For Your Business</h1>
                            <h2>We are team of talented designers making websites with Bootstrap</h2>
                            <br>

                            <div class="d-flex justify-content-center justify-content-lg-start ">
                                <a href="/login" class="btn-get-started scrollto btn btn-primary">Sign In</a>
                                &nbsp; &nbsp;
                                <a href="/register" class="btn btn-outline-secondary text-right"><span>Sign
                                        Up</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                        <img src="/images/vektor/cc.jpg" class="img-fluid animated" alt="">
                    </div>
                </div>
            </div>
        </div>

        <hr class="my-5">
        <div class="container mt-5">
            <section id="best-features" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Best Features</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        <p class="grey-text">Sebagai platform untuk mendiagnosis darah wanita, kami menyediakan fitur-fitur
                            dan
                            menu-menu unggulan yang dapat memudahkan Anda untuk menentukan jenis darah yang sedang Anda
                            alami!
                        </p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        {{-- <i class="icofont-heart-beat"></i> --}}
                        {{-- <i class="bi bi-clipboard-pulse"></i> --}}
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-clipboard-pulse" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M10 1.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1Zm-5 0A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5v1A1.5 1.5 0 0 1 9.5 4h-3A1.5 1.5 0 0 1 5 2.5v-1Zm-2 0h1v1H3a1 1 0 0 0-1 1V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V3.5a1 1 0 0 0-1-1h-1v-1h1a2 2 0 0 1 2 2V14a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3.5a2 2 0 0 1 2-2Zm6.979 3.856a.5.5 0 0 0-.968.04L7.92 10.49l-.94-3.135a.5.5 0 0 0-.895-.133L4.232 10H3.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 .416-.223l1.41-2.115 1.195 3.982a.5.5 0 0 0 .968-.04L9.58 7.51l.94 3.135A.5.5 0 0 0 11 11h1.5a.5.5 0 0 0 0-1h-1.128L9.979 5.356Z" />
                        </svg>
                        {{-- <i class="fa fa-camera-retro fa-4x orange-text"></i> --}}
                        <h4 class="my-4 font-weight-bold">Diagnosis</h4>
                        <p class="grey-text">Diagnosis adalah fitur utama dari aplikasi website ini, user dapat mendiagnosis
                            darah yang keluar baik saat itu terjadi maupun yang sudah lampau.</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-journal-bookmark-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M6 1h6v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8V1z" />
                            <path
                                d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                            <path
                                d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                        </svg>
                        {{-- <i class="fa fa-heart fa-4x orange-text"></i> --}}
                        <h4 class="my-4 font-weight-bold">Riwayat</h4>
                        <p class="grey-text">User dapat melihat hasil diagnosis yang sudah dilakukan. Dengan begitu user
                            dapat
                            melihat hasil diagnosis kapannpun dan dimanapun, sehingga dapat melakukan diagnosis selanjutnya
                            dengan mudah</p>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor"
                            class="bi bi-book-half" viewBox="0 0 16 16">
                            <path
                                d="M8.5 2.687c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                        </svg>
                        {{-- <i class="fa fa-bicycle fa-4x orange-text"></i> --}}
                        <h4 class="my-4 font-weight-bold">Pengetahuan</h4>
                        <p class="grey-text">Menu pengetahuan ini sangat berguna baik laki-laki ataupun perempuan. Dari menu
                            pengetahuan, user dapat mempelajari dan memahami semua hal yang berkaitan dengan Haid, Nifas,
                            dan
                            Istihadhoh berdasarkan Madzhab Syafi'i.</p>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
        </div>
    </div>
@endsection
