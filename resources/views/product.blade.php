@extends('master')
@section("content")

    <div class="container custom-product">
        <h2>Carousel Example</h2>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" style="height: 500px;">
                @foreach($products as $key => $item)

                        <div class="item {{$key == 0 ? 'active' : '' }}">
                            <a href="detail/{{$item['id']}}">
                            <img class="slider-img img-fluid" src="{{ $item->gallery}}"  >
                            <h3>{{$item['name']}}</h3>
                            <p>is always so much fun!</p>
                            </a>
                        </div>

                @endforeach

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    <div class="trending-wrapper">
            <h3>Trending Products</h3>
            @foreach($products as $key => $item)
                    <div class="trending-item">
                        <a href="detail/{{$item['id']}}">
                        <img class="trending-image" src="{{ $item->gallery}}">
                        <div class=""></div>
                        <h3>{{$item['name']}}</h3>
                        <p>always so much fun!</p>
                        </a>
                    </div>
            @endforeach
        </div>



    </div>

@endsection
