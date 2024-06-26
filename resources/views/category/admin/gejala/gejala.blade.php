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
                        <th scope="col">Gejala</th>
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
                            <td>{{ $post->gejala }}</td>
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
