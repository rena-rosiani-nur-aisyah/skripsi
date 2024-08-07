@extends('template.navbar-main')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h4 style="font-size: 25px">Hasil Diagnosis</h4>
        </div>
        <div class="card-body">
            @if ($result)
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label ml-5">
                        <h6>Jenis Darah: </h6>
                    </label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="name" value="{{ $result->name }}" readonly>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="deskripsi" class="col-sm-3 col-form-label ml-5">
                        <h6>Deskripsi :</h6>
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" style="width: 100%; height: 200px;" readonly>{{ $result->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Penyebab" class="col-sm-3 col-form-label ml-5">
                        <h6>Penyebab :</h6>
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" style="width: 100%; height: 200px;" readonly>{{ $result->Penyebab }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Solusi" class="col-sm-3 col-form-label ml-5">
                        <h6>Ketentuan Ibadah</h6>
                    </label>
                    <div class="col-sm-6">
                        <textarea class="form-control" style="width: 100%; height: 200px;" readonly>{{ $result->Solusi }}</textarea>
                    </div>
                </div>
            @endif
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-primary"
                onclick="window.location='{{ url('/diagnosis') }}'">Kembali</button>
        </div>
    </div>
@endsection
