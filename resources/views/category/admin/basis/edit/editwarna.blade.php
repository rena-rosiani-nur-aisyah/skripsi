@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="mx-auto" style="width: 500px;">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Warna</h4>
                    </div>
                    <div class="card-body ">
                        <form action="/updatewarna/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('PUT') --}}
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="name" class="form-control" name="name" value="{{ $post->name }}">
                            </div>

                            <div class="form-group">
                                <label for="image">Gambar</label>
                                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                                @if ($post->image)
                                    <div class="img-fluid mb-3 col-sm-8" style=" overflow:hidden;">
                                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3 d-block"
                                            alt="{{ $post->name }}">
                                    </div>
                                @endif

                                <div class="my-2 ">
                                    <input type="file" name="file" id="file" accept="image/*"
                                        class="form-control">
                                </div>

                            </div>

                            <div class="card-footer pt-0">
                                <a href="/warna" class="btn btn-primary">Kembali</a>
                                <button class="btn btn-primary text-right">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
