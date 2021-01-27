@extends('master')
@section("content")

    <div class="custom-product">
        <div class="col-sm-10">
             <div class="trending-wrapper">
                 <a href="/" >Go back</a>
               <h3>Result Of Products</h3><br>

{{--                 <a class="btn btn-success" href="ordernow">Order now</a>--}}

                  @foreach ($products as  $item)
                    <div class=" row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img class="trending-image" src="{{ $item->gallery}}">
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
{{--                                <img class="trending-image" src="{{ $item->gallery}}">--}}
                                <div class="">
                                    <h2>{{$item->name}}</h2>
                                    <h5>always so much fun!</h5>
                                </div>
                            </a>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove Cart</a>



                    </div>
                    </div>


                @endforeach

                 <a class="btn btn-success" href="ordernow">Order now</a>
{{--                 <div class="col-sm-3">--}}
{{--                     <a href="/" class="btn btn-warning">Go back</a>--}}

{{--                 </div>--}}
            </div>
        </div>

    </div>

@endsection
