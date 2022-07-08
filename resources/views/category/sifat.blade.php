@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Sifat Darah</h4>
                <div class="card-header-action">
                    <a href="{{ url('/sifats') }}" class="btn active">+ Tambah Sifat</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Ciri-ciri</th>
                                <th>Karakteristik</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $post)
                                <tr>
                                    <td>{{ $post->name }}</td>
                                    <td>{{ $post->ciri }}</td>
                                    <td>{{ $post->karakter }}</td>
                                    <td>
                                        <a href="/edits"> <img src="/images/icon/edit.png" alt="edit" width="30">
                                        </a>
                                        <a href="#"> <img src="/images/icon/delete.png" alt="delete" width="30">
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
