@extends('template.navbar-main')
@section('content')
    <div class="card mt-5">
        <div class="card-header">
            <h3 style="font-family:Arial, Helvetica, sans-serif; font-size:20px">Hasil Diagnosis</h3>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">
                    <h6>Jenis Darah: </h6>
                </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">
                    <h6>Deskripsi :</h6>
                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" style="width: 100%; height: 200px;"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">
                    <h6>Penyebab :</h6>
                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" style="width: 100%; height: 200px;"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">
                    <h6>Ketentuan Ibadah</h6>
                </label>
                <div class="col-sm-9">
                    <textarea class="form-control" style="width: 100%; height: 200px;"></textarea>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Sign in</button>
        </div>
    </div>
@endsection
