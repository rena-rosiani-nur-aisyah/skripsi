@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Edit Aturan</h4>
        </div>
        <form action="">
            <div class="card-body">
                <div class="form-row">
                    {{-- <div class="section-title mt-0">Text</div> --}}
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <label>Jenis Darah</label>
                            <select class="form-control form-control-sm">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-6 col-md-2">
                        <label class="d-block">Operator</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                And
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Or
                            </label>
                        </div>
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group">
                            <label>Gejala</label>
                            <select class="form-control">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-2">
                        <label class="d-block">Value</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                Ya
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                Tidak
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
