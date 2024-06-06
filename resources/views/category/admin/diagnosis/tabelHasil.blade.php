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
                            <th>Aksi</th>
                        </tr>
                        <?php $no = 1; ?>
                        @foreach ($items as $diagnosis)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $diagnosi->user->name }}</td>
                                <td>{{ $diagnosis->gejala->id }}</td>
                                <td>{{ $diagnosis->jawaban }}</td>
                                <td><a href="/detail" class="btn btn-secondary">Detail</a></td>
                            </tr>
                        @endforeach

                    </table>
                </div>
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
    </div>
    </div>
@endsection
