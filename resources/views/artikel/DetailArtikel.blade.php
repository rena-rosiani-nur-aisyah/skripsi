@extends('template.master-main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $items->judul }}</h2>
            </div>
            <div data-crop-image="285">
                <img alt="image" src="images/vektor/cycle.png" class="img-fluid">
            </div>
            <div class="card-body">
                <div class="mb-2">
                    <div class="chocolat-parent">{!! $items->body !!}</div>
                </div>
            </div>
            <div class="card-footer ">
                <a href="/Dashboard/Artikel" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
