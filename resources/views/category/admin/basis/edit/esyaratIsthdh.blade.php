@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Syarat Istihadhah</h4>
        </div>
        <form action="/edit/{{ $post->id }}" method="POST">
            @csrf

            <div class="card-body">
                {{-- <div class="mb-3 col-6">
                    <label for="jenis_darah" class="form-label">Edit Jenis Darah</label>
                    <input type="text" name="jenis_darah" class="form-control" placeholder="Edit jenis_darah"
                        value="{{ $post->jenis_darah }}">
                </div> --}}
                <div class="mb-3 col-6">
                    <label for="snk_istihadhah" class="form-label">Edit Syarat dan Ketentuan</label>
                    <input type="text" name="snk_istihadhah" class="form-control" placeholder="Edit Masa snk_istihadhah"
                        value="{{ $post->snk_istihadhah }}">
                </div>

                <div class="card-footer pt-0">
                    <a href="/syaratIstihadhah" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary text-right">Submit</button>
                </div>
        </form>
    </div>
    </div>
    </div>
@endsection
