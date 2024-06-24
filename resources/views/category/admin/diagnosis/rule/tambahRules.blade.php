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
                        {{-- <div class="section-title">Select</div> --}}
                        {{ dd($categories) }}
                        <div class="mb-3">
                            <label class="form-label" for="gejala">Pilih gejala </label>
                            <select class="form-select" name="gejala_id">
                                @foreach ($categories as $gejala)
                                    <option value="{{ $gejala->id }}">{{ $gejala->gejala }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label class="d-block">Operator</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    AND
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    checked>
                                <label class="form-check-label" for="exampleRadios2">
                                    OR
                                </label>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Gejala terkait</label>
                            <select class="form-control form-control-lg">
                                <option>Option 1</option>
                                <option>Option 2</option>
                                <option>Option 3</option>
                            </select>
                        </div>
                        <div class="form-group col-6">
                            <label class="d-block">Value</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1"
                                    checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Ya
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2"
                                    checked>
                                <label class="form-check-label" for="exampleRadios2">
                                    Tidak
                                </label>
                            </div>
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
