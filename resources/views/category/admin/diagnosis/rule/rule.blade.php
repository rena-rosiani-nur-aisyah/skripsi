@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Tabel Aturan</h4>
                    <div class="card-header-action">
                        <a href="{{ url('tambahRules') }}" class="btn active">+ Tambah
                            Aturan</a>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped table-md">
                            <tr>
                                <th>No</th>
                                <th>Gejala</th>
                                <th>Operator</th>
                                <th>Value</th>
                                <th>Jenis Darah</th>
                                <th>Action</th>
                            </tr>

                            <tr>
                                <?php $no = 1; ?>
                                @foreach ($items as $value)
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $value->gejala->gejala }}</td>
                                    <td>{{ $value->operator }}</td>
                                    <td>{{ $value->value }}</td>
                                    <td>{{ $value->post->name }}</td>
                                    <td><a href="#"> <img src="/images/icon/edit.png" alt="edit"
                                                width="30"></a>
                                        <a href="#"> <img src="/images/icon/delete.png" alt="delete"
                                                width="30"></a>
                                    </td>
                                @endforeach
                            </tr>
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
        </div>
    </div>
@endsection
