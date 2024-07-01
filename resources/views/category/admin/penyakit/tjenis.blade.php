@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Jenis</h4>
        </div>


        <div class="card-body offset-sm-1">
            <form method="POST" action="{{ route('prosesinputjenis') }}">
                @csrf
                <div class="form-group">
                    <div class="form-group row ">
                        <label for="name" class="col-md-2">
                            <h6>Jenis Darah :</h6>
                        </label>
                        <div class="col-md-4">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name"
                                for="name" placeholder="Jenis Darah" required>
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <br>
                    <div class="form-group row ">
                        <label for="deskripsi" class="col-md-2">
                            <h6>Deskripsi :</h6>
                        </label>
                        <div class="col-md-8">
                            <textarea name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" placeholder="Deskripsi"
                                style="width: 100%; height: 200px;" for="deskripsi" required></textarea>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="Penyebab" class="col-md-2">
                            <h6>Penyebab:</h6>
                        </label>
                        <div class="col-md-8">
                            <textarea class="form-control  @error('Penyebab') is-invalid @enderror" name="Penyebab" placeholder="Penyebab" required
                                style="width: 100%; height: 200px;" for="Penyebab"></textarea>
                            @error('Penyebab ')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class=" form-group row">
                        <label for="Solusi" class="col-md-2">
                            <h6>Solusi :</h6>
                        </label>
                        <div class="col-md-8">
                            <textarea class="form-control  @error('Solusi ') is-invalid @enderror" name="Solusi" placeholder="Solusi " required
                                style="width: 100%; height: 200px;" for="Solusi"></textarea>
                            @error('Solusi ')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <a href="/jenis" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
