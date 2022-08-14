@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Pelaksanaan Ibadah</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('updateibadah') }}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label class="col-form-label col-12 col-md-3 col-lg-3">Jenis Darah</label>
                    <input type="text" class="form-control" name="jenisDarah" placeholder="Masukan Gejala"
                        value="{{ $post->jenisDarah }}">
                </div>

                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang diwajibkan</label>
                    <div class="col-sm-10 col-md-9"> <input type="text" class="form-control" value="{{ $post->wajib }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang dibolehkan</label>
                    <div class="col-sm-10 col-md-9"> <input type="text" class="form-control" value="{{ $post->mubah }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang diharamkan</label>
                    <div class="col-sm-10 col-md-9"> <input type="text" class="form-control" value="{{ $post->haram }}">
                    </div>
                </div>
                <div class="card-footer pt-0">
                    <button class="btn btn-primary">Kembali</button>
                    <button class="btn btn-primary text-right">Submit</button>
                </div>
            </form>
        @endsection
