@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Sifat</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sifat.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="warna">Warna</label>
                        <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna"
                            placeholder="Warna">
                        @error('warna')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="karakter">Karakter</label>
                        <input type="text" class="form-control @error('karakter') is-invalid @enderror" name="karakter"
                            placeholder="karakter-karakter">
                        @error('karakter')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ciri">Ciri</label>
                        <input type="text" class="form-control @error('ciri') is-invalid @enderror" name="ciri"
                            placeholder="ciri">
                        @error('ciri')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('sifat') }}" class="btn btn-primary">Kembali</a>
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>

    </div>
@endsection
