@extends('template.master-main')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Profile</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item">Profile User</div>
            </div>
        </div>
        <div class="section-body">
            <div class="row mt-sm-2">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card profile-widget">
                        <div class="profile-widget-header">
                            <img alt="image" src="../backend/assets/img/avatar/avatar-1.png"
                                class="rounded-circle profile-widget-picture">
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4>Informasi User</h4>
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
                                    <label for="usia" class="col-sm-3 col-form-label">Usia</label>
                                    <div class="col-sm-9">
                                        <input type="usia" class="form-control" name="usia" placeholder="Usia">
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="profile-widget-description">
                            <div class="profile-widget-name">Ujang Maman <div
                                    class="text-muted d-inline font-weight-normal">
                                    <div class="slash"></div> Ratting User
                                </div>
                            </div>
                            Ujang maman is a superhero name in <b>Indonesia</b>, especially in my family. He is not a
                            fictional character but an original hero in my family, a hero for his children and for his
                            wife. So, I use the name as a user in this template. Not a tribute, I'm just bored with
                            <b>'John Doe'</b>.
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
