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
                                <th>Hasil Diagnosis</th>
                                <th>Tanggal</th>
                            </tr>

                            @foreach ($riwayat as $data)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $data->hasil }}</td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <div class="card-body">
                        <nav aria-label="Page navigation example">
                            <div class="pagination">
                                {{-- {{ $items->links() }} --}}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
