@extends('template.master-main')
@section('content')
    <div class="main">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Data Diagnosis</h4>
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
                                            <th>Diagnosis</th>
                                            <th>Deskripsi</th>
                                            {{-- <th>Penyebab</th> --}}
                                            <th>Ketentuan Ibadah</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $no = 1; ?>
                                        @foreach ($items as $value)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $value->name }}</td>
                                                <td>{{ Str::limit($value->deskripsi, 100) }}</td>
                                                <td>{{ Str::limit($value->Solusi, 100) }}</td>
                                                <td style="white-space: nowrap;"> <a href="/show/{{ $value->id }}"
                                                        class="btn btn-success"><i class="bi bi-pencil-square"> </i></a>
                                                    <a href="/delete/{{ $value->id }}" class="btn btn-danger"><i
                                                            class="bi bi-trash"></i></a>
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
