@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Tambah Materi</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('materi.store') }}">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Jenis Darah </label>
                        <input type="text" class="form-control" name="jenis_darah" placeholder="Masukan Jenis Darah">
                    </div>
                    <div class="form-group col-lg-8">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" class="form-control" placeholder="Masukan Keterangan"></textarea>
                        {{-- <input type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan"> --}}
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
