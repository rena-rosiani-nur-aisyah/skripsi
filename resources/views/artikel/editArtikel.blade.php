@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Artikel</h4>
                </div>
                <form action="/Dashboard/Artikel/{{ $items->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="judul">
                                <h6>Judul</h6>
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control @error('judul') is-invalid @enderror"
                                    id="judul" name="judul" required autofocus
                                    value="{{ old('judul', $items->judul) }}">
                            </div>
                            @error('judul')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3" for="image">
                                <h6>Tambah Image</h6>
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        @error('body')
                            <p class="text-danger text-center">{{ $message }}</p>
                        @enderror
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right  col-md-3 col-lg-3" for="body">
                                <h6>Isi Konten</h6>
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <textarea id="body" name="body" class="summernote-simple">{{ old('body', $items->body) }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <a href="/Dashboard/Artikel" class="btn btn-primary">Kembali</a>
                                <button class="btn btn-primary">Publish</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#body').summernote({
                height: "300px",
                styleWithSpan: false
            });
        });
    </script>
@endsection
