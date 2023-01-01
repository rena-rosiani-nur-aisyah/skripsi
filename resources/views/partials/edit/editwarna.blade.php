@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Warna</h4>
                </div>
                <div class="card-body">
                    <form action="/updatewarna/{{ $post->id }}" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image">Gambar</label>
                            <input type="file" class="form-control" id="image" name="image">
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
@endsection
