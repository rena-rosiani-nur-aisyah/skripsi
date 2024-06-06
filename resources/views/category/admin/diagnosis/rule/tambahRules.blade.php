@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Aturan</h4>
                </div>
                <form action="post" action="{{ url('tambahRules') }}">
                    @csrf
                    <div class="card-body">
                        <div class="section-title">Select</div>
                        <div class="form-group col-md-4">
                            <label>Select <code>.form-control-sm</code></label>
                            <select class="form-control form-control-sm">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label>Select <code>.form-control-lg</code></label>
                            <select class="form-control form-control-lg">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="/jenis" class="btn btn-primary">Kembali</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
