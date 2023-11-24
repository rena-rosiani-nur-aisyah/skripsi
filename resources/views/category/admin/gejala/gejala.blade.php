@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Gejala</h4>
            <div class="card-header-action">
                <a href="{{ url('/tgejala') }}" class="btn active">+ Tambah Gejala</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-md col-lg-12">
                <thead>
                    <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Gejala</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($__data) }} --}}
                    @foreach ($items as $post)
                        <tr>
                            <td>{{ $post->kode_gejala }}</td>
                            <td>{{ $post->gejala }}</td>
                            <td>
                                <a href="/tampilgejala/{{ $post->id }}"> <img src="/images/icon/edit.png" alt="edit"
                                        width="30"> </a>
                                <a href="/deletegejala/{{ $post->id }}"> <img src="/images/icon/delete.png"
                                        alt="delete" width="30">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
