@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Warna</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('twarna.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="name">Nama</label>
                        <input type="name" class="form-control" name="name" placeholder="Nama">
                    </div>
                    <br>
                    <div class="form-group">
                        <label>File</label>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
