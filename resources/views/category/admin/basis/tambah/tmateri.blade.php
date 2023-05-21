@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Materi</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('materi.store') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Jenis Darah </label>
                        <input type="text" class="form-control @error('jenis_darah') is-invalid @enderror"
                            name="jenis_darah" placeholder="Masukan Jenis Darah">
                        @error('jenis_darah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- <div class="form-group">
                        {{ Form::label('keterangan', 'keterangan') }}
                        {{ Form::textarea('keterangan', '', ['class' => 'form-control', 'placeholder' => 'keterangan']) }}
                    </div> --}}
                    <div class="form-group col-lg-8">
                        <label for="keterangan">Keterangan</label>
                        <div class="form-floating">
                            <textarea class="form-control @error('keterangan') is-invalid @enderror" name="keterangan" placeholder="Beri Keterangan"
                                id="keterangan" style="height: 100px"></textarea>
                        </div>
                        @error('keterangan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <a href="/materi" class="btn btn-primary">Kembali</a>
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    </div>
@endsection
