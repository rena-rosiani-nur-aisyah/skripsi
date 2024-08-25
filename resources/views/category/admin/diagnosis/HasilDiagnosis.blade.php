@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Hasil Diagnosis User</h4>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">

                    <table class="table table-striped table-md">
                        <tr>
                            <th>No</th>
                            <th>Nama Pengguna</th>
                            <th>Hasil Diagnosis</th>
                        </tr>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $items->firstItem() + $loop->index }}</td>
                                <td>Anonymous</td>
                                <td>{{ $item->hasil }}</td>
                            </tr>
                        @endforeach

                    </table>
                </div>
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
@endsection
