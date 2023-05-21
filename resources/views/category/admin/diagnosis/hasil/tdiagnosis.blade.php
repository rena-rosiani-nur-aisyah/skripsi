@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Diagnosis</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('tdiagnosis.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">Gejala</label>
                        <input type="text" class="form-control @error('gejala') is-invalid @enderror" name="gejala"
                            placeholder="gejala">
                        @error('gejala')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text">Hasil</label>
                        <input type="text" class="form-control @error('hasil') is-invalid @enderror" name="hasil"
                            placeholder="hasil">
                        @error('hasil')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <a href="/diagnosa" class="btn btn-primary">Kembali</a>
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    </div>
@endsection
