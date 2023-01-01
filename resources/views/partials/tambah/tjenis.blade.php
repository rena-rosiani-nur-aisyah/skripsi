@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Jenis</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('tjenis') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nama</label>
                        <input type="username" class="form-control @error('name') is-invalid @enderror" name="name"
                            placeholder="Nama">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText">Masa Minimal</label>
                        <input type="text" class="form-control @error('minimal') is-invalid @enderror" name="minimal"
                            placeholder="Masa Minimal">
                        @error('minimal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText">Masa Maksimal</label>
                        <input type="text" class="form-control @error('maksimal') is-invalid @enderror" name="maksimal"
                            placeholder="Masa Maksimal">
                        @error('maksimal')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText">Masa Rata-rata</label>
                        <input type="text" class="form-control @error('rata') is-invalid @enderror" name="rata"
                            placeholder="Masa Rata-rata">
                        @error('rata')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/jenis" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
