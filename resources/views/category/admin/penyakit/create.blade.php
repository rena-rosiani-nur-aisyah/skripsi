@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Jenis Darah</h4>
        </div>
        <form action="/edit/{{ $post->id }}" method="POST">
            @csrf

            <div class="card-body">
                <div class="mb-3 col-6">
                    <label for="name" class="form-label">Edit Nama</label>
                    <input type="text" name="name" class="form-control" placeholder="Edit Name"
                        value="{{ $post->name }}">
                </div>
                <div class="mb-3 col-6">
                    <label for="keterangan" class="form-label">Edit Keterangan</label>
                    <input type="text" name="keterangan" class="form-control" placeholder="Edit Keterangan"
                        value="{{ $post->keterangan }}">
                </div>
                <div class="card-footer pt-0">
                    <a href="/jenis" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary text-right">Submit</button>
                </div>
        </form>
    </div>
    </div>
    </div>
@endsection
