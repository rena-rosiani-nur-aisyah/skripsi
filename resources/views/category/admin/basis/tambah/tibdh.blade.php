@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Ibadah</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('ibdh.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jenisDarah">Jenis Darah </label>
                        <input type="text" class="form-control @error('jenisDarah') is-invalid @enderror" name="jenisDarah"
                            placeholder="Masukan jenis darah">
                        @error('jenisDarah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="wajib">Ibadah yang Diwajibkan</label>
                        <input type="text" class="form-control @error('wajib') is-invalid @enderror" name="wajib"
                            placeholder="Ibadah yang diwajibkan">
                        @error('wajib')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="mubah">Ibadah yang Dibolehkan</label>
                        <input type="text" class="form-control @error('mubah') is-invalid @enderror" name="mubah"
                            placeholder="Ibadah yang dibolehkan">
                        @error('mubah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="haram">Ibadah yang Diharamkan</label>
                        <input type="text" class="form-control @error('haram') is-invalid @enderror" name="haram"
                            placeholder="Ibadah yang diharamkan">
                        @error('haram')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/ibdh" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>


    </div>
@endsection
