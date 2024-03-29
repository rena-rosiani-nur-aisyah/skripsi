@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Gejala</h4>
        </div>
        <form action="/updategejala/{{ $post->id }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="kode_gejala">Kode</label>
                        <input type="text" class="form-control" name="kode_gejala" placeholder="Masukan kode"
                            value="{{ $post->kode_gejala }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gejala">Gejala</label>
                        <input type="text" class="form-control" name="gejala" placeholder="Masukan gejala"
                            value="{{ $post->gejala }}">
                    </div>
                </div>
            </div>
    </div>
    <div class="card-footer">
        <a href="/gejala" class="btn btn-primary">Kembali</a>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form>
    </div>
@endsection
