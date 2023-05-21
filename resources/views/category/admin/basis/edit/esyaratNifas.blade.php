@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Syarat Nifas</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('updatesyaratn') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $post->id }}">
                {{-- <div class="form-group row">
                    <label for="jenis_darah" class="col-sm-3 col-form-label">Jenis Darah</label>
                    <div class="col-sm-9">
                        <input type="name" class="form-control" name="jenis_darah" placeholder="jenis_darah"
                            value="{{ $post->jenis_darah }}">
                    </div>
                </div> --}}
                <div class="form-group row">
                    <label for="snk_nifas" class="col-sm-3 col-form-label">Syarat dan Ketentuan</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="snk_nifas" placeholder="snk_nifas"
                            value="{{ $post->snk_nifas }}">
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ url('syaratNifas') }}" class="btn btn-primary">Kembali</a>
                    <button type="submit" class="btn btn-primary text-right">Submit</button>
                </div>
            </form>
        </div>
    @endsection
