@extends('template.navbar')
@section('navbar')
    <div class="row justify-content-center">
        <div class="col-lg-4">

            {{-- Alert Berhasil Registrasi --}}
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            {{-- Alert Gagal Login --}}
            @if (session()->has('siginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('siginError') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h1 class="h3 mb-3 fw-normal text-center">Form Login</h1>
                </div>
                <div class="card-body">
                    <main class="form-signin w-100 m-auto">

                        <form action="/sigin" method="POST">
                            @csrf
                            <div class="form-floating">
                                <label class="mt-2" for="email">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    id="email" placeholder="name@example.com" name="email" autofocus required
                                    value="{{ old('email') }}">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-floating mt-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password" required>
                            </div>

                            <button class="btn btn-primary w-100 py-2 mt-2" type="submit">Login</button>

                        </form>
                        <small class="d-block mt-3">Belum registrasi? <a href="/registrasi"> Registrasi
                                disini</a></small>
                    </main>
                </div>
            </div>
        </div>
    </div>
@endsection
