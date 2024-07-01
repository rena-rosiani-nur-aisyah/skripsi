@extends('template.master-main')
@section('content')
    {{-- <div class="col-12 col-md-6 col-lg-6"> --}}
    <div class="card">
        <div class="card-header">
            <h4>Data Artikel</h4>
            <div class="card-header-action">
                <a href="{{ url('tambahArtikel') }}" class="btn active">+ Tambah
                    Artikel</a>
            </div>
        </div>
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


                    <tr>
                        <td>4</td>
                        <td>Rizal Fakhri</td>
                        <td>2017-01-11</td>
                        <td>
                            <div class="badge badge-success">Active</div>
                        </td>
                        <td><a href="#" class="btn btn-secondary">Detail</a></td>
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
@endsection
