@extends('template.master-main')
@section('content')

<div class="card">
                  <div class="card-header">
                    <h4>Edit Jenis Darah</h4>
                  </div>
                  <div class="card-body">
                    <div class="section-title mt-0">Edit Nama</div>
                    <div class="form-group">
                      <div class="input-group">
                        <input type="text" class="form-control">
                      </div>
                    </div>

                    <div class="section-title">Edit Usia Minimal</div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="">
                      </div>
                    </div>

                    <div class="section-title">Edit Usia Maksimal</div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="">
                      </div>
                    </div>

                    <div class="section-title">Edit Masa Minimal</div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="">
                        </div>
                      </div>


                    <div class="section-title">Edit Masa Maksimal</div>
                    <div class="form-group">
                      <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="" aria-label="">
                      </div>
                    </div>
                    </div>


                    <div class="card-footer pt-0">
                        <button class="btn btn-primary"> <a href="/jenis">Kembali</a></button>
                        <button class="btn btn-primary text-right">Submit</button>
                      </div>
                  </div>
                </div>
              </div>

@endsection
