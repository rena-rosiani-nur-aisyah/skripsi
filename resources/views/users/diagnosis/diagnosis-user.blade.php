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
                                @if ($finalResult)
                                    <h3 class="text-center"> {{ $finalResult }} </h3>
                                    <form action="{{ route('simpanhasildiagnosis') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf

                                        <input type="hidden" name="hasil" value="{{ $finalResult }}">
                                        <button class="btn btn-primary col-sm-2 mt-2" type="submit">Simpan</button>

                                    </form>
                                @else
                                    <form action="{{ route('diagnosisUser') }}" method="get"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <h3 class="text-center"> {{ $nextQuestion->pertanyaan }} </h3>


                                        <center>
                                            <div class="buttons mt-5">
                                                <input type="hidden" name="gejala_id" value="{{ $nextQuestion->id }}">
                                                <button class="btn btn-primary col-sm-2 mt-2" value="no" name="answer"
                                                    type="submit">Tidak</button>
                                                <button class="btn btn-primary col-sm-2 mt-2" value="yes" name="answer"
                                                    type="submit">Ya</button>
                                            </div>
                                        </center>
                                    </form>
                                @endif
                                <!-- @if (isset($gejala))
    @endif -->
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
