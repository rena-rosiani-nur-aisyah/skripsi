@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Pelaksanaan Ibadah</h4>
        </div>
        <div class="card-body">
            <div class="form-group row mb-3">
                <label class="col-form-label col-12 col-md-3 col-lg-3">Jenis Darah</label>
                <div class="col-sm-10 col-md-9">
                    <select class="form-control selectric">
                        <option>Haid</option>
                        <option>Nifas</option>
                        <option>Istihadhoh</option>
                    </select>
                </div>
            </div>

            <div class="form-group row mb-3">
                <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang diwajibkan</label>
                <div class="col-sm-10 col-md-9"> <input type="text" class="form-control"> </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang dibolehkan</label>
                <div class="col-sm-10 col-md-9"> <input type="text" class="form-control"> </div>
            </div>
            <div class="form-group row mb-3">
                <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang diharamkan</label>
                <div class="col-sm-10 col-md-9"> <input type="text" class="form-control"> </div>
            </div>
            <div class="card-footer pt-0">
                <button class="btn btn-primary">Kembali</button>
                <button class="btn btn-primary text-right">Submit</button>
            </div>
        @endsection
