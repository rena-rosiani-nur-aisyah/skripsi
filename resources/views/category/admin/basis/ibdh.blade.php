@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Pelaksanaan Ibadah</h4>
                <div class="card-header-action">
                    <a href="{{ url('/tambahibadah') }}" class="btn active">+ Tambah Ibadah</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered table-md col-lg-12">
                        <thead>
                            <tr>
                                <th class="col-lg-2">Jenis Darah</th>
                                <th>Ibadah diwajibkan</th>
                                <th>Ibadah dibolehkan</th>
                                <th>Ibadah diharamkan</th>
                                <th class="col-lg-2">Action</th>
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
                                        <a href="/tampilkanibadah/{{ $posts->id }}"> <img src="/images/icon/edit.png"
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
