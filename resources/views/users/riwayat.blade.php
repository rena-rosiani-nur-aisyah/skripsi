@extends('template.navbar-main')
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Riwayat</h4>

                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <th>Name</th>
                                <th>Hasil Diagnosis</th>
                                <th>Lama Haid</th>
                                <th>Lama Nifas</th>
                                <th>Waktu Diagnosis</th>
                                <th>Status</th>
                            </tr>
                            <tr>
                                <td>rena</td>
                                <td>Create a mobile app</td>
                                <td class="align-middle">
                                    <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                                        <div class="progress-bar bg-success" data-width="100"></div>
                                    </div>
                                </td>
                                <td>
                                    14 hari
                                    {{-- <img alt="image" src="../backend/assets/img/avatar/avatar-5.png"
                                        class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian"> --}}
                                </td>
                                <td>2018-01-20</td>

                                <td>
                                    <div class="badge badge-success">Completed</div>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
