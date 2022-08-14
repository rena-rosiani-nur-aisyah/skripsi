@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Pelaksanaan Ibadah</h4>
                <div class="card-header-action">
                    <a href="{{ url('/tibadah') }}" class="btn active">+ Tambah Ibadah</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Jenis Darah</th>
                                <th>Ibadah diwajibkan</th>
                                <th>Ibadah dibolehkan</th>
                                <th>Ibadah diharamkan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $posts)
                                <tr>
                                    <td>{{ $posts->jenisDarah }}</td>
                                    <td>{{ $posts->wajib }}</td>
                                    <td>{{ $posts->mubah }}</td>
                                    <td>{{ $posts->haram }}</td>
                                    <td>
                                        <a href="/editibadah/{{ $posts->id }}"> <img src="/images/icon/edit.png"
                                                alt="edit" width="30">
                                        </a>
                                        <a href="/deleteibadah/{{ $posts->id }}"> <img src="/images/icon/delete.png"
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
