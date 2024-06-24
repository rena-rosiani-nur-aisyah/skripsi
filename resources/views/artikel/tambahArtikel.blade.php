@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Artikel</h4>
                </div>
                <form action="">
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                <h6>Judul</h6>
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                <h6>Tambah Image</h6>
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <input type="file" class="form-control">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right  col-md-3 col-lg-3" for="body">
                                <h6>Isi Konten</h6>
                            </label>
                            <div class="col-sm-12 col-md-7">
                                <input id="body" type="hidden" name="body">
                                <trix-editor input="body"></trix-editor>
                            </div>

                            {{-- <div class="col-sm-12 col-md-7">
                                <textarea class="summernote"></textarea>
                            </div> --}}
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary">Publish</button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        })
    </script>
@endsection
