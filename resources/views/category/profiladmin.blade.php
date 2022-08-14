@extends('template.master-main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-2">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../backend/assets/img/avatar/avatar-1.png"
                                class="rounded-circle profile-widget-picture">
                            {{-- <div class="profile-widget-items">
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Tugas</div>
                                    <div class="profile-widget-item-value">187</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Finish</div>
                                    <div class="profile-widget-item-value">6,8K</div>
                                </div>
                                <div class="profile-widget-item">
                                    <div class="profile-widget-item-label">Reward</div>
                                    <div class="profile-widget-item-value">2,1K</div>
                                </div>
                            </div> --}}
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label for="name" class="col-sm-3 col-form-label">Nama </label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="name" placeholder="Nama">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3  col-form-label">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="level" class="col-sm-3 col-form-label">Level</label>
                                <div class="col-sm-9">
                                    <input type="level" class="form-control" name="level" placeholder="Level">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
@endsection
