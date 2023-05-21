@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Sifat</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('updatesifat') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $post->id }}">
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Warna</label>
                    <div class="col-sm-9">
                        <input type="name" class="form-control" name="warna" placeholder="warna"
                            value="{{ $post->warna }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="karakter" class="col-sm-3 col-form-label">Karakter</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="karakter" placeholder="karakter"
                            value="{{ $post->karakter }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ciri" class="col-sm-3 col-form-label">Ciri Khas</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="ciri" placeholder="ciri"
                            value="{{ $post->ciri }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="klasifikasi" class="col-sm-3 col-form-label">Klasifikasi</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="klasifikasi" placeholder="klasifikasi"
                            value="{{ $post->klasifikasi }}">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('sifat') }}" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-primary text-right">Submit</button>
                </div>
            </form>
        </div>
    @endsection
