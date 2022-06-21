@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Warna</h4>
        </div>
        <div class="card-body">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">Nama</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="Nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Masa Minimal</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Masa Minimal">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Masa Maksimal</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Masa Maksimal">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Masa Rata-rata</label>
                    <input type="password" class="form-control" id="inputPassword4" placeholder="Masa Rata-rata">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">

                </div>

            </div>
            <div class="form-group mb-0">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary">Submit</button>
        </div>
    </div>
@endsection
