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
                        <th scope="col">id</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($__data) }} --}}
                    <?php $no = 1; ?>
                    @foreach ($items as $post)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>kode</td>
                            <td>{{ $post->keterangan }}</td>
                            <td>{{ $post->type }}</td>
                            <td>
                                @if ($post->image)
                                    <div>
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="" width="50"
                                            height="auto">
                                    </div>
                                @else
                                    - -
                                @endif
                            </td>
                            <td style="white-space: nowrap;">
                                <a href="/tampilgejala/{{ $post->id }}" class="btn btn-success"> <i
                                        class="bi bi-pencil-square"></i> </a>
                                <a href="/deletegejala/{{ $post->id }}" class="btn btn-danger"><i
                                        class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-body">
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Sebelumnya</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
