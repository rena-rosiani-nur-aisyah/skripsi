@extends('template.master-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="card">
            <div class="card-header">
                <h4>Pembahasan</h4>
                <div class="card-header-action">
                    <a href="/sifatssummary-chart" data-tab="summary-tab" class="btn active">+ Tambah Materi</a>
                </div>
            </div>
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Jenis Darah</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($items as $post) --}}
                            <tr>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="/emateri"> <img src="/images/icon/edit.png" alt="edit" width="30"> </a>
                                    <a href="#"> <img src="/images/icon/delete.png" alt="delete" width="30"> </a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
