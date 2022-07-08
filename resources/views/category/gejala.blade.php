@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Small Table, Caption &amp; Responsive</h4>
            <div class="card-header-action">
                <a href="{{ url('/tgejala') }}" class="btn active">+ Tambah Diagnosis</a>
            </div>
        </div>
        <div class="card-body">
            <div class="section-title mt-0"> Data Gejala</div>
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID Gejala</th>
                        <th scope="col">Gejala</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
