@extends('template.master-main')
@section('content')
    {{-- <div class="col-12 col-md-6 col-lg-6"> --}}
    <div class="card">
        <div class="card-header">
            <h4>Data Artikel</h4>
            <div class="card-header-action">
                <a href="/Dashboard/Artikel/create" class="btn active">+ Tambah
                    Artikel</a>
            </div>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show col-md-4 col-lg-4 col-4" role="alert"
                style="margin-left: 20px">
                {{ session('success') }}
                <button type="button" class="close border-0" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif


        <div class="card-body p-0 md-4">
            <div class="table-responsive">
                <table class="table table-striped table-md">
                    <tr>
                        <th>No.</th>
                        <th>Judul</th>
                        <th>Gambar</th>
                        <th>Tanggal Pembuatan</th>
                        <th>Action</th>
                    </tr>

                    @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>
                                @if ($item->image)
                                    <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar" width="50"
                                        height="auto">
                                @else
                                    Tidak ada gambar yang di posting
                                @endif
                            </td>
                            <td>
                                <div class="badge badge-success">{{ $item->created_at->diffForHumans() }}</div>
                            </td>
                            <td><a href="/Dashboard/Artikel/{{ $item->id }}" class="btn btn-primary"><i
                                        class="bi bi-eye"></i></a>
                                <a href="/Dashboard/Artikel/{{ $item->id }}/edit" class="btn btn-success"> <i
                                        class="bi bi-pencil-square"></i></a>
                                <form action="/Dashboard/Artikel/{{ $item->id }}" method="POST" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger border-0"
                                        onclick="return confirm('Apakah data ini ingin dihapus?')"><i
                                            class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
