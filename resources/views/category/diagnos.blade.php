@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Diagnosis</h4>
                <div class="card-header-action">
                    <a href="/sifatssummary-chart" data-tab="summary-tab" class="btn active">+ Tambah Diagnosis</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>jenis Darah</th>
                                <th>Pertanyaan</th>
                                <th>Ya</th>
                                <th>Tidak</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $diagnosis)
                                <tr>
                                    <td>{{ $diagnosis->name }}</td>
                                    <td>{{ $diagnosis->pertanyaan }}</td>
                                    <td>{{ $diagnosis->ya }}</td>
                                    <td>{{ $diagnosis->tidak }}</td>
                                    <td>
                                        <a href="/editdiagnos"> <img src="/images/icon/edit.png" alt="edit" width="30"> </a>
                                        <a href="#"> <img src="/images/icon/delete.png" alt="delete" width="30"> </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
