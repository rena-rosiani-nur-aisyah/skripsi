@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Syarat Haid</h4>
        </div>
        <form action="/snkhaidupdate/{{ $post->id }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                        <label for="jenis_darah">Jenis Darah</label>
                        <input type="text" class="form-control" name="jenis_darah" value="{{ $post->jenis_darah }}">
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="syaratHaid">Syarat Haid</label>
                        <input type="text" class="form-control" name="syaratHaid" value="{{ $post->syaratHaid }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/syaratHaid" class="btn btn-primary">Kembali</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
