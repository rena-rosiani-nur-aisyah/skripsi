@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Diagnosis</h4>
        </div>
        <div class="card-body">
            <form action="/updatediagnosis/{{ $post->id }}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3" name="kode">Edit Kode</label>
                    <input type="text" class="form-control" name="kode" value="{{ $post->kode }}">
                </div>
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3" name="kode_gejala">Edit kode_gejala</label>
                    <input type="text" class="form-control" name="kode_gejala" value="{{ $post->kode_gejala }}">
                </div>
                <div class="form-group
                        row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3" name="hasil">Edit Hasil</label>
                    <input type="text" class="form-control" name="hasil" value="{{ $post->hasil }}">
                </div>

        </div>

        <div class="card-footer pt-0">
            <a href="{{ url('diagnosa') }}" class="btn btn-primary">Kembali</a>
            <button class="btn btn-primary text-right">Submit</button>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection
