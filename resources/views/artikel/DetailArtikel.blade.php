@extends('template.master-main')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $items->judul }}</h2>
            </div>
            <div class="col-lg-10 justify-content-center" style="max-height: 350px; overflow:hidden;">
                @if ($items->image)
                    <img alt="image" src="{{ asset('storage/' . $items->image) }}">
                @endif
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
