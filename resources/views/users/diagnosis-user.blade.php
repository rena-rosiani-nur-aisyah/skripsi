@extends('template.navbar-main')
@section('content')

    <body>
        <div class="section-body">
            <div class="card">
                <div class="row">
                    <div class="card-header">
                        <h5>Diagnosis</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($gejalas as $gejala)
                            <h4 style="text-align: center">Apakah Anda mengalami {{ $gejala->name }}?</h4>
                            <p style="text-align: center">Klik tombol "Ya" jika mengalaminya dan Klik tombol "Tidak" jika
                                tidak
                                mengalaminya</p>
                            <form method="POST" action="{{ route('diagnosis.store') }}">
                                @csrf
                                <input type="hidden" name="gejala_id" value="{{ $gejala->id }}">
                                <button type="submit" name="jawaban" value="ya">Ya</button>
                                <button type="submit" name="jawaban" value="tidak">Tidak</button>
                            </form>
                        @endforeach


                    </div>


                </div>
            </div>
        </div>
        </div>
    </body>
@endsection

<br />
<div class="text-center">
    <img class="img-fluid" src="images/vektor/hitungan.jpg" alt="image-vektor" width="500" height="500">
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <button class="btn btn-primary" type="button">Ya</button>
        <button class="btn btn-primary" type="button">Tidak</button>
    </div>
</div>
