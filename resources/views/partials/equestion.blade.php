@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Pertanyaan</h4>
        </div>
        <div class="card-body">

            <div class="form-group row mb-3">
                <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Pertanyaan</label>
                <div class="col-sm-10 col-md-9">
                    <textarea class="form-control"></textarea>
                </div>
            </div>
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

            <div class="card-footer pt-0">
                <button class="btn btn-primary">Kembali</button>
                <button class="btn btn-primary text-right">Submit</button>
            </div>
        </div>
    </div>
    </div>
@endsection
