@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Materi</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('updatemateri') }}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label class="col-form-label col-4 col-md-3 col-lg-3">Jenis Darah</label>
                    <div class="col-sm-10 col-md-9">
                        <input type="text" class="form-control" name="jenis_darah" value="{{ $post->jenis_darah }}">
                    </div>
                </div>

                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3">Keterangan</label>
                    <div class="col-sm-10 col-md-9">
                        <div class="form-floating">
                            <textarea class="form-control" name="keterangan" id="keterangan" style="height: 100px" value="{{ $post->keterangan }}"></textarea>
                        </div>
                    </div>
                </div>

                <div class="card-footer pt-0">
                    <a href="{{ url('materi') }}" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary text-right">Submit</button>
                </div>
            </form>
        </div>
    </div>

    </div>
    </div>
    </div>
@endsection
