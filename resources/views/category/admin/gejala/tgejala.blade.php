@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Gejala</h4>
        </div>
        <form method="POST" action="{{ route('gejala.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-2">
                        <label for="kode_gejala">Kode</label>
                        <input type="text" class="form-control @error('kode_gejala') is-invalid @enderror"
                            name="kode_gejala" placeholder="Masukan kode_gejala">
                        @error('kode_gejala')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="gejala">gejala</label>
                        <input type="text" class="form-control @error('gejala') is-invalid @enderror" name="gejala"
                            placeholder="Masukan gejala">
                        @error('gejala')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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
