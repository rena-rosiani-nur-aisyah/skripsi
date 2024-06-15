@extends('template.navbar-main')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Profile') }}</div>

                    <div class="card-body">

                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-4">
                                @if ($user->photo)
                                    <img src="{{ asset('storage/photos/' . $user->photo) }}"
                                        class="img-thumbnail rounded mx-auto d-block">
                                @else
                                    <img src="{{ asset('img/profile.png') }}" class="img-thumbnail rounded mx-auto d-block">
                                @endif

                            </div>
                            <div class="col-md-8">
                                <form method="POST" action="{{ route('profile.update', $user->id) }}"
                                    enctype="multipart/form-data">
                                    @method('PATCH')
                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text"
                                                class="form-control @error('name') is-invalid @enderror" name="name"
                                                value="{{ $user->name }}" required autocomplete="name">

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email', $user->email) }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="old_password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Old Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="old_password" type="password"
                                                class="form-control @error('old_password') is-invalid @enderror"
                                                name="old_password" autocomplete="old-password">

                                            @error('old_password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password"
                                            class="col-md-4 col-form-label text-md-end">{{ __('New Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control"
                                                name="password_confirmation" autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password-confirm"
                                            class="col-md-4 col-form-label text-md-end">{{ __('Change Profile Photo') }}</label>

                                        <div class="col-md-6">
                                            <input id="photo" type="file" class="form-control" name="photo">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Update Profile') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



















    {{-- <div class="section-header">
        <h1>Informasi Profil</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item">Profile User</div>
        </div>
    </div>
    <div class="section-body">
        <div class="row mt-sm-2">
            <div class="col-12 col-md-6 col-lg-12">
                <div class="card profile-widget">

                    <div class="profile-widget-description">

                        <div class="profile-widget-header">
                            <img alt="image" src="../backend/assets/img/avatar/avatar-1.png"
                                class="rounded-circle profile-widget-picture">
                        </div>

                        <div class="profile-widget-name">Ujang Maman <div class="text-muted d-inline font-weight-normal">
                                <div class="slash"></div> Ratting User
                            </div>
                        </div>

                        <div class="summary-item">
                            <h6 class="mt-3">Item List <span class="text-muted">(4 Items)</span></h6>
                            <ul class="list-unstyled list-unstyled-border">
                                <li class="media">
                                    <div class="media-body">
                                        <div class="media-right">$805</div>
                                        <div class="media-title"><a href="#">iBook Noob</a></div>
                                        <div class="text-small text-muted">by <a href="#">Ahmad Sutisna</a>
                                            <div class="bullet"></div> Sunday
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="section-body">
                            <h2 class="section-title">Aktivitas</h2>
                            <div class="row">
                                <div class="col-12">
                                    <div class="activities">
                                        <div class="activity">
                                            <div class="activity-icon bg-primary text-white shadow-primary">
                                                <i class="fas fa-trash"></i>
                                            </div>
                                            <div class="activity-detail" style="background-color:#cce6ff">
                                                <div class="mb-2">
                                                    <span class="text-job">Yesterday</span>
                                                    <span class="bullet"></span>
                                                    <a class="text-job" href="#">View</a>
                                                    <div class="float-right dropdown">
                                                        <a href="#" data-toggle="dropdown"><i
                                                                class="fas fa-ellipsis-h"></i></a>
                                                        <div class="dropdown-menu">
                                                            <div class="dropdown-title">Options</div>
                                                            <a href="#" class="dropdown-item has-icon"><i
                                                                    class="fas fa-eye"></i>
                                                                View</a>
                                                            <a href="#" class="dropdown-item has-icon"><i
                                                                    class="fas fa-list"></i>
                                                                Detail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a href="#" class="dropdown-item has-icon text-danger"
                                                                data-confirm="Wait, wait, wait...|This action can't be undone. Want to take risks?"
                                                                data-confirm-text-yes="Yes, IDC"><i
                                                                    class="fas fa-trash-alt"></i>
                                                                Archive</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <p>Removing task "Delete all unwanted selectors in CSS files".</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
