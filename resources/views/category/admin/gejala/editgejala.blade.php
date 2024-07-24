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
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" placeholder="Masukan keterangan"
                            value="{{ $post->keterangan }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="type">Kategori</label>
                        <select class="custom-select ml-0 @error('type') is-invalid @enderror" name="type">
                            <option value="gejala" id="type_gejala" {{ old('type') == 'gejala' ? 'selected' : '' }}>Gejala
                            </option>
                            <option value="signs" id="type_signs" {{ old('type') == 'signs' ? 'selected' : '' }}>
                                Tanda-tanda terkait</option>
                        </select>
                        @error('type')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    {{-- <div class="form-group col-md-6">
                        <label for="signs">Gejala Terkait</label>

                        <input type="text" class="form-control" name="signs" placeholder="Masukan gejala terkait"
                            value="{{ $post->signs }}">
                    </div> --}}
                </div>
                <div class="form-group col-md-6">
                    <label for="image">Pilih Gambar</label>
                    <div class="custom-file">
                        <label class="custom-file-label" for="image">Edit Gambar</label>
                        <input type="file" class="custom-file-input @error('image') is-invalid @enderror" id="image"
                            name="image" onchange="previewImage()">
                        <input type="hidden" name="oldImage" value="{{ $post->image }}">
                        <div class="col-lg-10 mt-4 mb-0" style="max-height: 250px; overflow:hidden;">
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}"
                                    class="img-preview img-fluid col-lg-12 col-md-12 d-block">
                            @else
                                <img class="img-preview img-fluid col-lg-12 col-md-12">
                            @endif
                        </div>


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
