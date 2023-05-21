@extends('template.master-main')
@section('content')
    <div class="card">
        <div class="card-header">
            <h4></h4>
        </div>
        <div class="card-body">
            {{-- <div class="section-title mt-0">Light</div> --}}
            <table class="table table-borderless">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Kondisi</th>
                        <th scope="col">Hasil Diagnosis</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <a href="#"> <img src="/images/icon/edit.png" alt="edit" width="30"> </a>
                            <a href="#"> <img src="/images/icon/delete.png" alt="delete" width="30">
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
