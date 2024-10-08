@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Aturan</h4>
                    <div class="card-header-action">
                        <a href="/rules/create" class="btn active">+ Tambah
                            Aturan</a>
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

                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>No</th>
                                <th>Pertanyaan</th>
                                <th>Jawab Ya</th>
                                <th>Jawab Tidak</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>

                            @foreach ($items as $value)
                                <tr>
                                    <td>{{ $items->firstItem() + $loop->index }}</td>
                                    <td>{{ $value->pertanyaan }}</td>
                                    <td>{{ $value->is_yes }}</td>
                                    <td>{{ $value->is_no }}</td>
                                    <td>
                                        @if ($value->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar" width="50"
                                                height="auto">
                                        @else
                                            --
                                        @endif
                                    </td>
                                    <td style="white-space: nowrap;"><a href="/rules/{{ $value->id }}/edit"
                                            class="btn btn-success"><i class="bi bi-pencil-square"> </i></a>
                                        <form action="/rules/{{ $value->id }}" method="POST" class="d-inline">
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
                        <div class="pagination">
                            {{ $items->links() }}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
