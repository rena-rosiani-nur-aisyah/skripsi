@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Syarat dan Ketentuan Istihadhah</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('tsnkisthdh') }}">
                @csrf

                {{-- <div class="form-group col-md-3">
                    <label for="jenis_darah">Nama</label>
                    <input type="name" class="form-control @error('jenis_darah') is-invalid @enderror" name="jenis_darah">
                    @error('jenis_darah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div> --}}

                {{-- <div class="mb-3"> --}}
                <div class="form-group col-md-10">
                    <label for="snk_istihadha" class="form-label">Syarat Dan Ketentuan</label>
                    <textarea class="form-control  @error('snk_istihadhah') is-invalid @enderror" name="syaratHiad" id="snk_istihadhah"
                        rows="3"></textarea>
                    @error('snk_istihadhah')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                {{-- </div> --}}

                <div class="card-footer">
                    <a href="/syaratIstihadhah" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
