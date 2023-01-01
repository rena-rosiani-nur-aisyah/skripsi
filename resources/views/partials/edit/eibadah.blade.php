@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Pelaksanaan Ibadah</h4>
        </div>
        <div class="card-body">
            <form action="/updateibadah/{{ $post->id }}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label class="col-form-label col-12 col-md-3 col-lg-3">Jenis Darah</label>
                    <div class="col-sm-10 col-md-9">
                        <input type="text" class="form-control" name="jenisDarah" value="{{ $post->jenisDarah }}">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang diwajibkan</label>
                    <div class="col-sm-10 col-md-9"> <input type="text" class="form-control" name="wajib"
                            value="{{ $post->wajib }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang dibolehkan</label>
                    <div class="col-sm-10 col-md-9"> <input type="text" class="form-control" name="mubah"
                            value="{{ $post->mubah }}">
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Edit Ibadah yang diharamkan</label>
                    <div class="col-sm-10 col-md-9"> <input type="text" class="form-control" name="haram"
                            value="{{ $post->haram }}">
                    </div>
                </div>
                <div class="card-footer pt-0">
                    <a href="/ibdh" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary text-right">Submit</button>
                </div>
            </form>
        @endsection
