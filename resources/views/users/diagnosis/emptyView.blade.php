@extends('template.navbar-main')
@section('content')
    <div class="row">
        <div class="col-12 col-md-12 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="empty-state" data-height="400">
                        <div class="empty-state-icon" style="width: 300px; height:250px">
                            <img src="/images/vektor/nenek.jpg" alt="Miss HerFlow" class="img-fluid animated">
                        </div>
                    </div>
                    <center>
                        <p class="lead">
                            Hai, klik tombol "Mulai" untuk melakukan diagnosis!
                        </p>
                        <a href="{{ url('diagnosisUser') }}" class="btn btn-primary mt-2 mb-5">
                            <h6>Mulai</h6>
                        </a>
                    </center>
                </div>
            </div>
        </div>
    </div>
@endsection
