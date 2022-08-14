@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Diagnosis</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('tdiagnosis.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="text">Gejala</label>
                        <input type="text" class="form-control" name="gejala" placeholder="gejala">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text">Hasil</label>
                        <input type="text" class="form-control" name="hasil" placeholder="hasil">
                    </div>
                </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
        </div>
        </form>
    </div>
    </div>
@endsection
