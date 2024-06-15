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
                                <th>No.</th>
                                <th>Name</th>
                                <th>Hasil Diagnosis</th>
                                <th>Tanggal</th>
                                <th>Detail</th>
                            <tr>
                                <td>1.</td>
                                <td>rena</td>
                                <td>Create a mobile app</td>
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
