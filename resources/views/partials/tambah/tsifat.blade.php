@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Sifat</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('sifat.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nama</label>
                        <input type="name" class="form-control" name="name" placeholder="Nama">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Ciri-ciri</label>
                        <input type="text" class="form-control" name="ciri" placeholder="Ciri-ciri">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Karakteristik</label>
                        <input type="text" class="form-control" name="karakter" placeholder="Karakteristik">
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
