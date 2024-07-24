@extends('template.master-main')
@section('content')
    <div class="main">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Rekaman Diagnosis User</h4>
                            </div>
                            <div class="card-body">
                                <div class="table">
                                    <table class="table table-bordered table-md col-lg-12">
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Gejala</th>
                                            <th>Indikasi</th>
                                            <th>Jawaban User</th>
                                            <th>Action</th>
                                        </tr>


                                        <tr>
                                            <td>A</td>
                                            <td>B</td>
                                            <td>V </td>
                                            <td>C</td>
                                            <td>D</td>
                                            <td><a href="/detailDiagnosis" class="btn btn-primary"><i
                                                        class="bi bi-eye"></i></a>
                                                <a href="" class="btn btn-success"><i class="bi bi-pencil-square">
                                                    </i></a>
                                                <a href="" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                                </form>
                                            </td>
                                        </tr>

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
