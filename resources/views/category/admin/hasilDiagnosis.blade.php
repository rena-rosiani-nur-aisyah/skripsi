@extends('template.navbar-main')
@section('content')
    <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12 col-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Hasil Diagnosis</h3>
                        </div>

                        <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            @if (isset($diagnosis->$post->name))
                                <h3>Jenis Darah : {{ $post->name }}</h3>

                                @if (isset($diagnosis->$post->Penyebab))
                                    <h4>Penyebab :</h4>
                                    <p>{{ $post->Penyebab }}</p>
                                @endif

                                @if (isset($diagnosis->$post->Solusi))
                                    <h4>Solusi :</h4>
                                    <p>{{ $post->Solusi }}</p>
                                @endif
                            @else
                                <p>No diagnosis results found.</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<style>
    .container {
        padding: 10%
    }
</style>
