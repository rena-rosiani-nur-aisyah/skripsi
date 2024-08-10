@extends('template.navbar-main')
@section('content')
    <div class="container">
        @if ($items)
            <div class="card">
                <div class="card-header">
                    <h2>{{ $items->judul }}</h2>
                </div>
                <div class="col-lg-10 justify-content-center" style="max-height: 350px; overflow:hidden;">
                    @if ($items->image)
                        <img alt="image" src="{{ asset('storage/' . $items->image) }}"
                            style="max-width: 100%; height:auto;">
                    @endif
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <div class="chocolat-parent">{!! $items->body !!}</div>
                    </div>
                </div>
                <div class="card-footer ">
                    <a href="/artikel" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        @else
            <div class="card ml-5">
                <div class="card-body text-center">
                    <p class="card-text">Data tidak ditemukan</p>
                </div>
            </div>
        @endif
    </div>
@endsection
