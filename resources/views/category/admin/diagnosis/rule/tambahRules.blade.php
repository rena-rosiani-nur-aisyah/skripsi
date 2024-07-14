@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Aturan</h4>
                </div>
                <form action="/rules" method="POST" class="ml-3">
                    @csrf
                    <div class="card-body">
                        {{-- Ini option untuk gejala pertama --}}

                        <div class="section-title mt-0"><label for="gejala"></label>Pilih Gejala</div>
                        <div class="form-group col-lg-8">
                            <select class="custom-select @error('gejala_id') is-invalid @enderror" name="gejala_id">
                                <option value="" disabled selected>pilih satu gejala</option>
                                @foreach ($gejalas as $gejala)
                                    <option value="{{ $gejala->id }}">{{ $gejala->gejala }}</option>
                                @endforeach
                            </select>
                            @error('gejala_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- ini untuk operator  --}}
                        <div class="form-group">
                            <div class="section-title"><label for="operator">Operator</label></div>
                            <div class="custom-control custom-radio custom-control-inline ml-5">
                                <input type="radio" id="operator_AND" name="operator"
                                    class="custom-control-input @error('operator') is-invalid @enderror" value="AND"
                                    {{ old('operator') == 'AND' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="operator_AND">AND</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="operator_OR" name="operator"
                                    class="custom-control-input @error('operator') is-invalid @enderror" value="OR"
                                    {{ old('operator') == 'OR' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="operator_OR">OR </label>
                            </div>
                            @error('operator')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- ini untuk gejala kedua atau gejlaa selanjutnya yang related dengan gejala sebelumnya --}}

                        <div class="section-title mt-4"><label for="signs">Pilih gejala yang berelasi dengan gejala
                                sebelumnya</label></div>
                        <div class="form-group col-lg-8">
                            <select class="custom-select  @error('signs_id') is-invalid @enderror" name="signs_id">
                                <option value="" disabled selected>pilih satu gejala terkait</option>
                                @foreach ($signs as $sign)
                                    <option value="{{ $sign->id }}">{{ $sign->signs }}</option>
                                @endforeach
                            </select>
                            @error('signs_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- ini value untuk menentukan jawaban yang seharusnya  --}}
                        <div class="form-group">
                            <div class="section-title"><label for="value">Value</label></div>
                            <div class="mb-2">
                                <div class="custom-control custom-radio custom-control-inline ml-5">
                                    <input type="radio" id="value_ya" name="value"
                                        class="custom-control-input @error('value') is-invalid @enderror" value="ya"
                                        {{ old('value') == 'ya' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="value_ya">Ya</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="value_tidak" name="value"
                                        class="custom-control-input @error('value') is-invalid @enderror" value="tidak"
                                        {{ old('value') == 'tidak' ? 'checked' : '' }}>
                                    <label class="custom-control-label" for="value_tidak">Tidak</label>
                                </div>
                                @error('value')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        {{-- ini option untuk menentukan jenis darah atau penyakitnya  --}}
                        <div class="section-title mt-4"><label for="post">Pilih jenis darah yang sesuai dengan
                                gejala</label></div>
                        <div class="form-group col-lg-8">
                            <select class="custom-select  @error('post_id') is-invalid @enderror" name="post_id">
                                <option value="" disabled selected>pilih satu jenis darah</option>
                                @foreach ($penyakit as $post)
                                    <option value="{{ $post->id }}">{{ $post->name }}</option>
                                @endforeach
                            </select>
                            @error('post_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="/rules" class="btn btn-primary">Kembali</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
