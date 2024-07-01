@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Gejala</h4>
        </div>
        <form action="/updategejala/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    {{-- <div class="form-group col-md-6">
                        <label for="kode_gejala">Kode</label>
                        <input type="text" class="form-control" name="kode_gejala" placeholder="Masukan kode"
                            value="{{ $post->kode_gejala }}">
                    </div> --}}
                    <div class="form-group col-md-6">
                        <label for="gejala">Gejala</label>
                        <input type="text" class="form-control" name="gejala" placeholder="Masukan gejala"
                            value="{{ $post->gejala }}">
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Pilih Gambar</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">Edit Gambar</label>
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="image" onchange="previewImage()">
                        @if ($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}"
                                class="img-preview img-fluid mt-3 col-sm-2 mb-3 d-block">
                        @else
                            <img class="img-preview img-fluid mt-3 col-sm-2 mb-3">
                        @endif



                        @error('image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="/gejala" class="btn btn-primary">Kembali</a>
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');
            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
