@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Informasi User</h4>
        </div>
        <div class="card-body">
            <div class="form-group row">
                <label for="name" class="col-sm-3 col-form-label">Nama </label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" placeholder="Nama">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-3  col-form-label">Email</label>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group row">
                <label for="usia" class="col-sm-3 col-form-label">Usia</label>
                <div class="col-sm-9">
                    <input type="usia" class="form-control" name="usia" placeholder="Usia">
                </div>
            </div>
        </div>
    </div>
@endsection
