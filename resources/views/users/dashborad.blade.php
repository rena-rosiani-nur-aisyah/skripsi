@extends('template.navbar-main')
@section('content')
    <div class="col-12 col-sm-20 col-lg-12 ">
        <div class="card justify-content-center">
            {{-- <div class="card-header">
                <h4>HerFlow</h4>
            </div> --}}
            <div class="card-body col-12 col-sm-20 col-lg-12 ">
                <div class="tab-content ">
                    <div class="tab-pane fade show active" role="tabpanel" aria-labelledby="home-tab6">
                        <div class="card-header">
                            <div class="card-body text-left">
                                <h1>Selamat Datang! </h1>
                                <h5>{{ auth()->user()->username }}</h5>
                                <h6>Terima kasih sudah melakukan login</h6>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 hero-img">
                                <img src="/images/vektor/nenek.jpg" alt="calendar-period" class="img-fluid animated">
                            </div>
                        </div>
                        <hr class="my-5">
                        {{-- sesi body --}}


                        <div class="card-body">
                            <h5 class="text-center col-12">Selamat menikmati fitur unggulan kami!</h5>
                            <br>
                            @include('users.body')
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
                                Website ini dibuat berdasarkan kebutuhan dari masyarakat untuk mendeteksi atau
                                mendiagnosis
                                jenis darah yang keluar dari qubul wanita.
                                website ini didedikasikan untuk masyarakat yang beragama Islam. Dalam penentuan hukum
                                yang
                                dipakai menggunakan Madzhab Syafi'i yang juga berkaitan dengan sisi medis.
                                Walaupun website ini berlandaskan hukum dari Madzhab Syafi'i, website women tracker
                                inipun
                                dapat digunakan oleh Madzhab manapun.
                            </p>
                        </div>
                        <div class="card-header">
                            <div class="card-body text-left">
                                <p>
                                    Melalui website ini masyarakat dapat mengetahui dan menentukan darah wanita, apakah
                                    termasuk
                                    haid ataukah istihadhoh, apakah termasuk nifas ataukah istihadho.
                                    Website inipun menjawab pertanyaan-pertanyaan yang sering ditanyakan masyarakat
                                    seputar
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
    <footer class="main-footer">
        <div class="footer-left">
            Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="#">Rena Rosiani Nur
                Aisyah</a>
        </div>
        <div class="footer-right">
            2.3.0
        </div>
    </footer>
    </div>
    </div>
@endsection
