@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Gejala</h4>
        </div>
        <form method="POST" action="{{ route('gejala.store') }}">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gejala">Gejala</label>
                        <input type="text" class="form-control" name="gejala" placeholder="Masukan Gejala">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" placeholder="Masukan Status">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
