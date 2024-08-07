@extends('template.navbar-main')
@section('content')
    <div class="card mt-5">
        <div class="card mt-3">
            <div class="card-header">
                {{-- <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                    <h4 class="text-center mb-3" style="font-size: 24px">Jawablah pertanyaan dibawah ini dengan baik</h4>
                </div> --}}
            </div>
            <div class="card-body">
                <section>
                    <div class="container py-4">
                        <div class="row">
                            <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                                @if (isset($gejala))
                                    <form action="{{ route('diagnosis.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <h3 class="text-center"> {{ $gejala->keterangan }} </h3>
                                        <div class="mt-3 ml-0">
                                            @if ($gejala->image)
                                                <img src="{{ asset('storage/' . $gejala->image) }}" alt=""
                                                    width="200" height="auto">
                                                {{-- @else --}}
                                                {{-- <img src="/images/vektor/simple.jpg" alt="" width="200"
                                                    height="auto"> --}}
                                            @endif
                                        </div>
                                        <center>
                                            <div class="buttons mt-5">
                                                <input type="hidden" name="gejala_id" value="{{ $gejala->id }}">
                                                <button class="btn btn-primary col-sm-2 mt-2" value="tidak"
                                                    name="jawabanUser" type="submit">Tidak</button>
                                                <button class="btn btn-primary col-sm-2 mt-2" value="ya"
                                                    name="jawabanUser" type="submit">Ya</button>
                                            </div>
                                        </center>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
