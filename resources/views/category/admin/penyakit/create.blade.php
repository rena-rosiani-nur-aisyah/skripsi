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
                    <label for="deskripsi" class="form-label">Edit Deskripsi</label>
                    <textarea name="deskripsi" style="width: 100%; height: 200px;">{{ $post->deskripsi }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label for="Penyebab"> Edit Penyebab</label>
                    <textarea class="form-control" name="Penyebab" style="width: 100%; height: 200px;">{{ $post->Penyebab }}</textarea>
                </div>
                <div class="mb-3 col-6">
                    <label for="Solusi"> Edit Solusi</label>
                    <textarea class="form-control" name="Solusi" style="width: 100%; height: 200px;">{{ $post->Solusi }}</textarea>
                </div>
        </form>
        <div class="card-footer pt-0">
            <a href="/jenis" class="btn btn-primary">Kembali</a>
            <button class="btn btn-primary text-right">Submit</button>
        </div>
    </div>
    </div>
    </div>
@endsection
