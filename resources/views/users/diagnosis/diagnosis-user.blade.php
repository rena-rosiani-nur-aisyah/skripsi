@extends('template.navbar-main')
@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h3 class="text-center" style="font-family:Arial, Helvetica, sans-serif; font-size:20px">
                Jawablah pertanyaan berikut dengan benar</h3>
        </div>
        <div class="card-body">
            {{-- <p class="mb-5" style="font-size: 18px">
                Apakah kamu {{ $gejala->gejala }}? </p> --}}
            <form action="{{ route('diagnosis.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="gejala_id" value="{{ $gejala->id }}">
                @if ($gejala->type == 'gejala')
                    <p>{{ $gejala->gejala }}</p>
                @else
                    <p>{{ $gejala->signs }}</p>
                    <input type="hidden" name="signs_id" value="{{ $gejala->id }}">
                @endif
                <div class="buttons">
                    <button class="btn btn-primary col-sm-2 mt-2" id="jawabanUser_tidak" value="jawabanUser_tidak"
                        name="jawabanUser">Tidak</button>
                    <button class="btn btn-primary col-sm-2 mt-2" id="jawabanUser_ya" value="jawabanUser_ya"
                        name="jawabanUser">Ya</button>
                </div>
        </div>

        </form>
    </div>
@endsection
