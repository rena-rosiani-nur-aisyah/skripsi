@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Gejala</h4>
        </div>
        <form action="{{ url('updategejala') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="gejala">Gejala</label>
                        <input type="text" class="form-control" name="gejala" placeholder="Masukan Gejala"
                            value="{{ $post->gejala }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status" placeholder="Masukan Status"
                            value="{{ $post->status }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
@endsection
