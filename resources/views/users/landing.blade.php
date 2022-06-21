@extends('template.navbar')
@section('navbar')
    <div class="card">
        <div class="card-header">
            <h4>Landing Page &amp; Indicator</h4>
        </div>
        <div class="card-body">
            <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class=" w-70" src="images/calendar.png" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-70" src="../backend/assets/img/news/img07.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-70" src="../backend/assets/img/news/img08.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev center" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    </div>
@endsection
