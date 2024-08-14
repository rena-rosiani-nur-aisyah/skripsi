@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-8 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Edit Aturan</h4>
                </div>
                <form action="/rules/{{ $rule->id }}" method="POST" class="ml-3">
                    @method('put')
                    @csrf
                    <div class="card-body">

                        {{-- Ini option untuk gejala pertama --}}
                        <div class="section-title mt-0"><label for="gejala"></label>Pilih Gejala</div>
                        <div class="form-group col-lg-8">
                            <select class="custom-select @error('gejala_id') is-invalid @enderror" name="gejala_id">
                                @foreach ($gejalas as $gejala)
                                    @if (old('gejala_id', $rule->gejala_id) == $gejala->id)
                                        <option value="{{ $gejala->id }}" selected>{{ $gejala->keterangan }}</option>
                                    @else
                                        <option value="{{ $gejala->id }}">{{ $gejala->keterangan }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('gejala_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- ini value untuk menentukan jawaban yang seharusnya  --}}
                        <div class="form-group">
                            <div class="section-title"><label for="value1">Value</label></div>
                            <div class="mb-2">
                                <div class="custom-control custom-radio custom-control-inline ml-5">
                                    <input type="radio" id="value1_ya" name="value1"
                                        class="custom-control-input @error('value1') is-invalid @enderror" value="ya"
                                        {{ old('value1', $rule->value1 == 'ya' ? 'checked' : '') }}>
                                    <label class="custom-control-label" for="value1_ya">Ya</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="value1_tidak" name="value1"
                                        class="custom-control-input @error('value1') is-invalid @enderror" value="tidak"
                                        {{ old('value1', $rule->value1 == 'tidak' ? 'checked' : '') }}>
                                    <label class="custom-control-label" for="value1_tidak">Tidak</label>
                                </div>
                                @error('value1')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        {{-- ini untuk operator  --}}
                        <div class="form-group">
                            <div class="section-title"><label for="operator">Operator</label></div>
                            <div class="custom-control custom-radio custom-control-inline ml-5">
                                <input type="radio" id="operator_AND" name="operator"
                                    class="custom-control-input @error('operator') is-invalid @enderror" value="AND"
                                    {{ old('operator', $rule->operator == 'AND' ? 'checked' : '') }}>
                                <label class="custom-control-label" for="operator_AND">AND</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="operator_OR" name="operator"
                                    class="custom-control-input @error('operator') is-invalid @enderror" value="OR"
                                    {{ old('operator', $rule->operator) == 'OR' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="operator_OR">OR </label>
                            </div>
                            @error('operator')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>


                        {{-- ini untuk gejala kedua atau gejlaa selanjutnya yang related dengan gejala sebelumnya --}}
                        <div class="section-title mt-4"><label for="signs">Pilih indikasi gejala sebelumnya </label>
                        </div>
                        <div class="form-group col-lg-8">
                            <select class="custom-select  @error('signs_id') is-invalid @enderror" name="signs_id">
                                @foreach ($signs as $sign)
                                    @if (old('signs_id', $rule->signs_id) == $sign->id)
                                        <option value="{{ $sign->id }}" selected>{{ $sign->keterangan }}</option>
                                    @else
                                        <option value="{{ $sign->id }}">{{ $sign->keterangan }}</option>
                                    @endif
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
                                        {{ old('value', $rule->value == 'ya' ? 'checked' : '') }}>
                                    <label class="custom-control-label" for="value_ya">Ya</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="value_tidak" name="value"
                                        class="custom-control-input @error('value') is-invalid @enderror" value="tidak"
                                        {{ old('value', $rule->value == 'tidak' ? 'checked' : '') }}>
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
                                @foreach ($penyakit as $post)
                                    @if (old('post_id', $rule->post_id) == $post->id)
                                        <option value="{{ $post->id }}" selected>{{ $post->name }}</option>
                                    @else
                                        <option value="{{ $post->id }}">{{ $post->name }}</option>
                                    @endif
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
