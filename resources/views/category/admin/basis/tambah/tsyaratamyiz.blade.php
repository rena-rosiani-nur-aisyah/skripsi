@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Syarat Tamyiz</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('tsyaratamyiz') }}">
                @csrf
                <div class="mb-3">
                    {{-- <div class="form-group col-md-3">
                        <label for="jenis_darah" class="form-label">Jenis Darah</label>
                        <input type="name" class="form-control @error('jenis_darah') is-invalid @enderror"
                            id="jenis_darah" name="jenis_darah" placeholder="Masukan Jenis darah">
                        @error('jenis_darah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                </div>
                <div class="mb-3">
                    <div class="form-group col-md-10">
                        <label for="snk_tamyiz" class="form-label">Syarat Dan Ketentuan</label>
                        <textarea class="form-control  @error('snk_tamyiz') is-invalid @enderror" name="syaratHiad" id="snk_tamyiz"
                            rows="3"></textarea>
                        @error('snk_tamyiz')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/syaratamyiz" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
