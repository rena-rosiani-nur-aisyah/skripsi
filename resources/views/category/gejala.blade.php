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
            <div class="section-title mt-0"> Data Gejala</div>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">Gejala</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($__data) }} --}}
                    @foreach ($items as $post)
                        <tr>
                            <td>{{ $post->gejala }}</td>
                            <td>{{ $post->status }}</td>
                            <td>
                                <a href="/editgejala/{{ $post->idgejala }}"> <img src="/images/icon/edit.png" alt="edit"
                                        width="30"> </a>
                                <a href="/deletegejala/{{ $post->idgejala }}"> <img src="/images/icon/delete.png"
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
