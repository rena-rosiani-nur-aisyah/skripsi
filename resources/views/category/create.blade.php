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
                    <label for="minimal" class="form-label">Edit Masa Minimal</label>
                    <input type="text" name="minimal" class="form-control" placeholder="Edit Masa Minimal"
                        value="{{ $post->minimal }}">
                </div>

                <div class="mb-3 col-6">
                    <label for="maksimal" class="form-label">Edit Masa Maksimal</label>
                    <input type="text" name="maksimal" class="form-control" placeholder="Edit Masa Maksimal"
                        value="{{ $post->maksimal }}">
                </div>

                <div class="mb-3 col-6">
                    <label for="rata" class="form-label">Edit Masa Rata-rata</label>
                    <input type="text" name="rata" class="form-control" placeholder="Edit Masa Rata-rata"
                        value="{{ $post->rata }}">
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
