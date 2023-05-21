@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Syarat Nifas</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('syaratn.store') }}">
                @csrf
                <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                        <label for="jenis_darah">Jenis Darah</label>
                        <input type="text" class="form-control @error('jenis_darah') is-invalid @enderror"
                            name="jenis_darah" placeholder="jenis_darah">
                        @error('jenis_darah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="snk_nifas">Syarat dan Ketentuan</label>
                        <input type="text" class="form-control @error('snk_nifas') is-invalid @enderror" name="snk_nifas"
                            placeholder="Masukan Syarat dan Ketentuan Nifas">
                        @error('snk_nifas')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <a href="{{ url('syaratNifas') }}" class="btn btn-primary">Kembali</a>
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>

    </div>
@endsection
