@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Sifat</h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="name">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Ciri</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="ciri">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Karakter</label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="karakter">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Kembali</button>
                <button type="submit" class="btn btn-primary text-right">Submit</button>
            </div>
        </div>
    @endsection
