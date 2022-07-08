@extends('template.master-main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Warna Darah</h4>
                    <div class="card-header-action">
                        <a href="{{ url('/twarna') }}" data-tab="summary-tab" class="btn active">+ Tambah Warna</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Gambar</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list as $value)
                                <tr>
                                    <td>1.</td>
                                    <td>{{ $value->name }}</td>
                                    <td><img src="{{ $value->image }}" alt="" style="height: 100px; width: 100px">
                                    </td>
                                    <td>
                                        <a href="/editw"> <img src="/images/icon/edit.png" alt="edit" width="30">
                                        </a>
                                        <a href="#"> <img src="/images/icon/delete.png" alt="delete" width="30">
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
