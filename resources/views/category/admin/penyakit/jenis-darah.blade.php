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
                                    <a href="{{ url('tjenis') }}" class="btn active">+ Tambah
                                        Jenis</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table">
                                    <table class="table table-bordered table-md col-lg-12">
                                        <tr>
                                            <th>Id</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $no = 1; ?>
                                        @foreach ($items as $value)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ $value->keterangan }}</td>
                                                <td> <a href="/show/{{ $value->id }}"> <img src="/images/icon/edit.png"
                                                            alt="edit" width="30"> </a>
                                                    <a href="/delete/{{ $value->id }}"><img src="/images/icon/delete.png"
                                                            alt="delete" width="30"></a>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
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
                </div>

            </div>

        </section>
    </div>
@endsection
