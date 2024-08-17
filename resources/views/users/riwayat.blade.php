@extends('template.navbar-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Riwayat User</h4>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Hasil Diagnosis</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>

                            @foreach ($riwayat as $data)
                                <tr>
                                    <td>{{ $items->firstItem() + $loop->index }}</td>
                                    <td>{{ $data->user->username }}</td>
                                    <td>{{ $data->post->name }}</td>
                                    </td>
                                    <td>{{ $data->created_at->diffForHumans() }}</td>
                                    <td>
                                        <a href="/jejak/Diagnosis/{{ $item->id }}/show" class="btn btn-primary"><i
                                                class="bi bi-eye"></i></a>
                                    </td>
                                </tr>
                            @endforeach
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
            </div>
        </div>
    </div>
@endsection
