@extends('template.master-main')
@section('content')
    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sifat Darah</h4>
                        <div class="card-header-action">
                            <a href="{{ url('/sifats') }}" class="btn active">+ Tambah Sifat</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table">
                            <table class="table table-bordered table-md col-lg-12">
                                <thead>
                                    <tr>
                                        <th>Warna</th>
                                        <th>Karakter</th>
                                        <th>Ciri-ciri</th>
                                        <th>Klasifikasi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $post)
                                        <tr>
                                            <td>{{ $post->warna }}</td>
                                            <td>{{ $post->karakter }}</td>
                                            <td>{{ $post->klasifikasi }}</td>
                                            <td>{{ $post->ciri }}</td>
                                            <td>
                                                <a href="/editsifat/{{ $post->id }}"> <img src="/images/icon/edit.png"
                                                        alt="edit" width="30">
                                                </a>
                                                <a href="/deletesifat/{{ $post->id }}"> <img
                                                        src="/images/icon/delete.png" alt="delete" width="30">
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
        </div>
    </div>
@endsection
