@extends('template.master-main')
@section('content')
    <div class="main">
        <section class="section">
            <div class="section-header">
                <h1>Table</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Darah Wanita</a></div>
                    <div class="breadcrumb-item"><a href="/test">Jenis Darah</a></div>
                    <div class="breadcrumb-item">Table</div>
                </div>
            </div>

            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Jenis-jenis Darah Wanita</h4>
                                <div class="card-header-action">
                                    <a href="/tjenis" data-tab="summary-tab" class="btn active">+ Tambah
                                        Jenis</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table">
                                    <table class="table table-bordered table-md">
                                        <tr>
                                            <th>No.</th>
                                            <th>Nama Darah</th>
                                            <th>Masa Minimal</th>
                                            <th>Masa Maksimal</th>
                                            <th>Masa Rata-rata</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $no = 1; ?>
                                        @foreach ($items as $value)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->minimal }}</td>
                                                <td>{{ $value->maksimal }}</td>
                                                <td>{{ $value->rata }}</td>
                                                <td> <a href="/edit"> <img src="/images/icon/edit.png" alt="edit"
                                                            width="30"> </a>
                                                    <a href=""> <img src="/images/icon/delete.png" alt="delete" width="30">
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                    @endsection
