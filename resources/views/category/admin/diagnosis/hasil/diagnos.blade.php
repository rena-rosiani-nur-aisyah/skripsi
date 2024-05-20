@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Diagnosis</h4>
                <div class="card-header-action">
                    <a href="{{ url('/tambahdiagnosis') }}" class="btn active">+ Tambah Diagnosis</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table">
                    <table class="table table-bordered table-md col-lg-12">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>kode</th>
                                <th>kode gejala</th>
                                <th>Hasil</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; ?>
                            @foreach ($items as $diagnosis)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    {{-- <td>{{ $diagnosis->kode }}</td> --}}
                                    <td>{{ $diagnosis->kode_gejala }}</td>
                                    <td>{{ $diagnosis->hasil }}</td>
                                    <td>
                                        <a href="/showdiagnosis/{{ $diagnosis->id }}"> <img src="/images/icon/edit.png"
                                                alt="edit" width="30"> </a>
                                        <a href="/deletediagnosis/{{ $diagnosis->id }}"> <img src="/images/icon/delete.png"
                                                alt="delete" width="30">
                                        </a>
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
