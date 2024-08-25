@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Aturan</h4>
                </div>
                <form action="/rules" method="POST" class="ml-3" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">

                        <div class="mb-3">
                            <label for="pertanyaan">Masukan Pertanyaan</label>
                            <textarea class="form-control @error('pertanyaan') is-invalid
                            @enderror" id="pertanyaan"
                                placeholder="Masukan Pertanyaan" required name="pertanyaan"></textarea>
                            @error('pertanyaan')
                                <div class="invalid-feedback">
                                    Masukan Pertanyaan
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="is_yes">Masukan Langkah Selanjutnya Jika Ya</label>
                            <textarea class="form-control @error('is_yes')is-invalid
                            @enderror" id="is_yes"
                                placeholder="Masukan Langkah Selanjutnya Jika Ya" required name="is_yes"></textarea>
                            @error('is_yes')
                                <div class="invalid-feedback">
                                    Masukan Langkah Selanjutnya Jika Ya
                                </div>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="is_no">Masukan Langkah Selanjutnya Jika Tidak</label>
                            <textarea class="form-control @error('is_no')is-invalid
                            @enderror " id="is_no"
                                placeholder="Masukan Langkah Selanjutnya Jika Tidak" required name="is_no"></textarea>
                            @error('is_no')
                                <div class="invalid-feedback">
                                    Masukan Langkah Selanjutnya Jika Tidak
                                </div>
                            @enderror

                        </div>
                        <div class="mb-3">
                            <div class="form-group col-md-6">
                                <label for="image">Pilih Gambar</label>
                                <div class="custom-file">
                                    <label class="custom-file-label" for="image">Pilih Gambar</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="file"
                                            class="custom-file-input @error('image') is-invalid @enderror col-md-7"
                                            id="image" name="image" onchange="previewImage()">
                                        <div class="col-lg-10 mt-4 mb-0" style="max-height: 250px; overflow:hidden;">
                                            <img class="img-preview img-fluid col-lg-12 col-md-12 d-block">
                                        </div>
                                        @error('image')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/rules" class="btn btn-primary">Kembali</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
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
