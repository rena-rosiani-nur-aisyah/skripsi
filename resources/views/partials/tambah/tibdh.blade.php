@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Ibadah</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('ibdh.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Jenis Darah </label>
                        <input type="username" class="form-control" name="jenisDarah" placeholder="Masukan jenis darah">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text">Ibadah yang Diwajibkan</label>
                        <input type="text" class="form-control" name="wajib" placeholder="Ibadah yang diwajibkan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text">Ibadah yang Dibolehkan</label>
                        <input type="text" class="form-control" name="mubah" placeholder="Ibadah yang dibolehkan">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="text">Ibadah yang Diharamkan</label>
                        <input type="text" class="form-control" name="haram" placeholder="Ibadah yang diharamkan">
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>


    </div>


    </div>
@endsection
