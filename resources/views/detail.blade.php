@extends('master')
@section("content")
 <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <a href="/">Go back</a>
                <h3>{{$product['name']}}</h3>
                <h4>Price: {{$product['price']}}</h4>
                <h4>Category:{{$product['category']}}</h4>
                <br>
                <form action="/add_to_cart" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{$product['id']}}">
                    <button class="btn btn-primary">Add to cart</button>
                </form>
                <br>
                <a href="/cartlist" class="btn btn-success">Buy now</a>

            </div>

        </div>

 </div>

@endsection
