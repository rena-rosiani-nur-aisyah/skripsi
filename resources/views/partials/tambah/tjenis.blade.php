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
                        <input type="username" class="form-control" name="name" placeholder="Nama">
                        {{-- <select name="name" class="form-control">
                            <option value="Haid">Haid</option>
                            <option value="Istihadho">Istihadho</option>
                            <option value="Nifas">Nifas</option>
                        </select> --}}
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText">Masa Minimal</label>
                        <input type="text" class="form-control" name="minimal" placeholder="Masa Minimal">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText">Masa Maksimal</label>
                        <input type="text" class="form-control" name="maksimal" placeholder="Masa Maksimal">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputText">Masa Rata-rata</label>
                        <input type="text" class="form-control" name="rata" placeholder="Masa Rata-rata">
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
                <div class="card-footer">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

    </div>
@endsection
