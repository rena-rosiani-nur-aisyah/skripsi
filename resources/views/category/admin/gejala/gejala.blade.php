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
                        <th scope="col">Keterangan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- {{ dd($__data) }} --}}

                    @foreach ($items as $post)
                        <tr>
                            <td>{{ $items->firstItem() + $loop->index }}</td>
                            <td>{{ $post->keterangan }}</td>
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
                <div class="pagination">
                    {{ $items->links() }}
                </div>
            </nav>
        </div>
    </div>
@endsection
