@extends('template.navbar-main')
@section('content')
    <div class="card">
        <div class="card-header ">
            @if ($items->count())
                <div class="card ml-5">
                    <div class="col-lg-10 justify-content-center" style="max-height: 350px; overflow:hidden;">
                        @if ($items->first()->image)
                            <img alt="image" src="{{ asset('storage/' . $items->first()->image) }}"
                                style="max-width: 100%; height:auto;">
                        @endif
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title mb-0">{{ $items->first()->judul }}</h5>
                        <p class="card-text"><small class="text-muted">Terakhir diposting
                                {{ Carbon\Carbon::parse($items->first()->created_at)->diffForHumans() }}</small></p>
                        <div class="card-header-action">
                            <p class="card-text">{{ $items->first()->excerpt }}</p>
                            <a href="/showArtikel/{{ $items->first()->id }}" class="btn btn-primary">Baca Selengkapnya
                                <i class="fas fa-chevron-right"></i></a>
                        </div>
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
        <div class="card-body">
            <section class="py-3">
                <div class="row">
                    @foreach ($items->skip(1) as $item)
                        <div class="col-lg-3 col-sm-6">
                            <div class="card card-plain">

                                <div class="card-header p-0 position-relative">
                                    <a class="d-block blur-shadow-image">
                                        <img src="{{ asset('storage/' . $item->image) }}" alt="img-blur-shadow"
                                            class="img-fluid shadow border-radius-lg" loading="lazy">
                                    </a>
                                </div>
                                <div class="card-body px-0">
                                    <h5>
                                        <a href="/showArtikel/{{ $item->id }}"
                                            class="text-dark font-weight-bold text-decoration-none">{{ $item->judul }}</a>
                                    </h5>
                                    <p>
                                        {{ $item->excerpt }}
                                    </p>
                                    <a href="/showArtikel/{{ $item->id }}"
                                        class="text-info text-sm icon-move-right">Baca Selengkapnya
                                        <i class="fas fa-arrow-right text-xs ms-1"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </section>
        </div>
    </div>
@endsection
