@extends('template.navbar-main')
@section('content')
    <div class="row">
        <div class="col-12 col-sm-20 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h2>Profil</h2>
                </div>
                <div class="card author-box card-primary">
                    <div class="card-body">
                        <div class="author-box-left">
                            <img alt="image" src="images/vektor/profil.jpeg" class="rounded-circle author-box-picture">
                            <div class="clearfix"></div>
                            {{-- <a href="#" class="btn btn-primary mt-3 follow-btn"
                            data-follow-action="alert('follow clicked');"
                            data-unfollow-action="alert('unfollow clicked');">Edit Profil</a> --}}
                        </div>
                        <div class="author-box-details">
                            <div class="author-box-name">
                                <a href="#">{{ auth()->user()->username }}</a>
                            </div>
                            <div class="author-box-job">{{ auth()->user()->email }}</div>
                            <div class="author-box-description">
                                <p>{{ auth()->user()->bio ?? 'Belum ada bio.' }}</p>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="card">
                    <form class="needs-validation" novalidate="" method="POST"
                        action="{{ route('profil.update', $user->id) }}">
                        @csrf
                        @method('put')
                        <div class="card-header">
                            <h4 class="ml-3">Edit Profil</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group row ml-3">
                                <label class="col-sm-3 col-form-label" for="username">Username</label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="username"
                                        value="{{ old('username', auth()->user()->username) }}" required>
                                    <div class="invalid-feedback">
                                        What's your name?
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ml-3">
                                <label class="col-sm-3 col-form-label" for="email">Email</label>
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email', auth()->user()->email) }}" required>
                                    <div class="invalid-feedback">
                                        Oh no! Email is invalid.
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row ml-3">
                                <label class="col-sm-3 col-form-label" for="usia">Usia</label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" name="usia"
                                        value="{{ old('usia', auth()->user()->usia) }}">
                                    <div class="valid-feedback">
                                        Good job!
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 row ml-3">
                                <label class="col-sm-3 col-form-label" for="bio">Bio</label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" name="bio">{{ $user->bio }}</textarea>
                                    <div class="invalid-feedback">
                                        What do you wanna say?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
