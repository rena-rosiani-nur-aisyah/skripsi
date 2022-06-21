@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Diagnosis</h4>
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
                <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Pertanyaan</label>
                <div class="col-sm-10 col-md-9">
                    <textarea class="form-control"></textarea>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-3">Jawaban</div>
                <div class="col-sm-9">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck1">
                        <label class="form-check-label" for="gridCheck1">
                            Tidak
                        </label>
                    </div>
                </div>
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
