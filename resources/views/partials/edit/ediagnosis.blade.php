@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Diagnosis</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('updatediagnosis') }}" method="POST">
                @csrf
                <div class="form-group row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3" name="gejala">Edit Gejala</label>
                    <input type="text" class="form-control" name="gejala" value="{{ $post->gejala }}">
                    {{-- <div class="col-sm-10 col-md-9">
                        <textarea class="form-control" name="gejala" value="{{ $post->gejala }}"></textarea>
                    </div> --}}
                </div>
                <div class="form-group
                        row mb-3">
                    <label class="col-form-label  col-12 col-md-3 col-lg-3" name="hasil">Edit Hasil</label>
                    <input type="text" class="form-control" name="hasil" value="{{ $post->hasil }}">
                    {{-- <div class="col-sm-10 col-md-9">
                        <textarea class="form-control" name="hasil" value="{{ $post->hasil }}"></textarea>
                    </div> --}}
                </div>

        </div>

        <div class="card-footer pt-0">
            <a href="{{ url('diagnosa') }}" class="btn btn-primary">Kembali</a>
            <button class="btn btn-primary text-right">Submit</button>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection
