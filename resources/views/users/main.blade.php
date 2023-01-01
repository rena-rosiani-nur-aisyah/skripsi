@extends('template.navbar-main')
@section('content')
    <div class="col-12 col-sm-20 col-lg-12 ">
        <div class="card justify-content-center">
            <div class="card-header">
                <h4></h4>
            </div>
            <div class="card-body">
                <ul class="nav nav-tabs justify-content-center" id="myTab6" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-center" id="home-tab6" data-toggle="tab" href="#home6" role="tab"
                            aria-controls="home" aria-selected="true">
                            <span><i class="fas fa-home"></i></span> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-center" id="profile-tab6" data-toggle="tab" href="#profile6" role="tab"
                            aria-controls="profile" aria-selected="false">
                            <span><i class="fas fa-id-card"></i></span> Tentang</a>
                    </li>
                </ul>
                <div class="tab-content tab-bordered" id="myTabContent6">
                    <div class="tab-pane fade show active" id="home6" role="tabpanel" aria-labelledby="home-tab6">
                        <div class="card-header">
                            <div class="card-body text-left">
                                <h1>Selamat Datang! <b>{{ Auth::user()->email }}</b></h1>
                                <h6>Terima kasih sudah melakukan login</h6>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                                <img src="/images/vektor/nenek.jpg" alt="calendar-period" class="img-fluid animated">
                            </div>
                        </div>
                        <hr class="my-5">
                        {{-- sesi body --}}
                        <div class="card">
                            {{-- <div class="card-header">
                                <h4>Selamat Datang! Terima Kasih telah melakukan Login</h4>
                            </div> --}}
                            <div class="card-body">
                                <h5 class="text-center">Selamat menikmati fitur unggulan kami!</h5>
                                <ul class="list-unstyled">
                                    <li class="media">
                                        <img class="mr-3" src="/images/vektor/menstruation.png"
                                            alt="Generic placeholder image" width="80" height="80">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">Diagnosis</h5>
                                            <p>Dengan menu diagnosis, Anda dapat menantukan jenis darah yang Anda alami</p>
                                        </div>
                                    </li>
                                    <li class="media my-4">
                                        <img class="mr-3" src="/images/vektor/long-term.png"
                                            alt="Generic placeholder image" width="80" height="80">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">Riwayat</h5>
                                            <p>Melalui menu riwayat, Anda tidak perlu kembali mencatat hasil diagnosis yang
                                                sudah dilakukan,
                                                karna sistem dapat menyimpan hasil diagnosis yang sudah Anda lakukan</p>
                                        </div>
                                    </li>
                                    <li class="media">
                                        <img class="mr-3" src="/images/vektor/open-book.png"
                                            alt="Generic placeholder image" width="80" height="80">
                                        <div class="media-body">
                                            <h5 class="mt-0 mb-1">Pengetahuan</h5>
                                            <p class="mb-0">Selain Anda dapat melakukan diagnosis dan dapat melihat
                                                riwayat hasil diagnosis,
                                                Anda juga dapat mengakses menu pengetahuan untuk mempelejari dan mengetahui
                                                tentang Haid, Nifas,
                                                dan Istihadhoh.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="profile6" role="tabpanel" aria-labelledby="profile-tab6">
                        <div class="card-header">
                            <div class="card-body text-left">
                                <h3>Tentang Women Tracker</h3>
                                <br>
                                <div class="col-lg-80 order-1 order-lg-2 hero-img">
                                    <img src="/images/vektor/4282495.jpg" alt="image" class="img-fluid animated">
                                </div>
                            </div>
                            <br>
                            <p>
                                Website ini dibuat berdasarkan kebutuhan dari masyarakat untuk mendeteksi atau mendiagnosis
                                jenis darah yang keluar dari qubul wanita.
                                website ini didedikasikan untuk masyarakat yang beragama Islam. Dalam penentuan hukum yang
                                dipakai menggunakan Madzhab Syafi'i yang juga berkaitan dengan sisi medis.
                                Walaupun website ini berlandaskan hukum dari Madzhab Syafi'i, website women tracker inipun
                                dapat digunakan oleh Madzhab manapun.
                            </p>
                        </div>
                        <div class="card-header">
                            <div class="card-body text-left">
                                <p>
                                    Melalui website ini masyarakat dapat mengetahui dan menentukan darah wanita, apakah
                                    termasuk
                                    haid ataukah istihadhoh, apakah termasuk nifas ataukah istihadho.
                                    Website inipun menjawab pertanyaan-pertanyaan yang sering ditanyakan masyarakat seputar
                                    fiqh
                                    ketika haid, nifas, dan istihadhoh, ibadah apa saja yang bisa dilakukan, yang wajib
                                    dilakukan, dan yang diharamkan ketika mengalami haid, nifas, atau istihadhoh.
                                </p>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                                <img src="/images/vektor/doctor.jpg" alt="calendar-period" class="img-fluid animated">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
