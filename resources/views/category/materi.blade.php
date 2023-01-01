@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Basis Pengetahuan</h4>
                <div class="card-header-action">
                    <a href="{{ url('/tmateri') }}" class="btn active">+ Tambah Materi</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered table-md col-lg-12">
                        <thead>
                            <tr>
                                <th class="col-lg-2">Jenis Darah</th>
                                <th>Keterangan</th>
                                <th class="col-lg-2">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $post)
                                <tr>
                                    <td>{{ $post->jenis_darah }}</td>
                                    <td>{{ $post->keterangan }}</td>
                                    <td>
                                        <a href="/tampilkanmateri/{{ $post->id }}"> <img src="/images/icon/edit.png"
                                                alt="edit" width="30">
                                        </a>
                                        <a href="/deletemateri/{{ $post->id }}"> <img src="/images/icon/delete.png"
                                                alt="delete" width="30">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
