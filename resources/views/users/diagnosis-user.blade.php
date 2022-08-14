@extends('template.navbar-main')
@section('content')
    <div class="section-body">
        <br>
        <br>
        <br>
        <br>
        <div class="card">
            <div class="card-header">
                <h4>Diagnosis</h4>
            </div>
            <div class="card-body">
                <p>Untuk dapat mendiagnosis, sistem perlu mendapatkan informasi dari user.Untuk mendapatkan informasi
                    tersebut, user perlu menjawab pertanyaan berdasarkan gejala yang dirasakanan oleh user. Sebelum itu ada
                    beberapa istilah yang digunakan dalam mendiagnosis, yaitu sebagai berikut:
                <ul>
                    <li> KD = Keluar Darah</li>
                    <li> AH = Adat Haid atau kebiasaan Haid atau juga biasa disebut siklus haid</li>
                    <li> AS = Adat Suci</li>
                </ul>
                Setelah user siap melakukan diagnosis, maka dapat menekan
                buton "mulai diagnosis" untuk memulai melakukan diagnosis.
                </p>
            </div>
            <div class="card-footer bg-whitesmoke">
                This is card footer
            </div>
        </div>
    </div>
@endsection
