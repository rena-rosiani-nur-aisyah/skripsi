@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Syarat Tamyiz</h4>
        </div>
        <form action="/snktamupdate/{{ $post->id }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    {{-- <div class="form-group col-md-6">
                        <label for="jenis_darah">Jenis Darah</label>
                        <input type="text" class="form-control" name="jenis_darah" value="{{ $post->jenis_darah }}">
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="snk_tamyiz">Syarat Tamyiz</label>
                        <input type="text" class="form-control" name="snk_tamyiz" value="{{ $post->snk_tamyiz }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/syaratamyiz" class="btn btn-primary">Kembali</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
