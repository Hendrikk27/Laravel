@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="">
                <div class="text-center" style=" color: white">
                    <h4>
                        Your Cart
                    </h4>
                </div>

                <div class="container-fluid">
                    @foreach ($cart as $key => $c)
                        <?php $total = 0 ?>
                        <?php $g = \App\Game::find($key) ?>
                        <div class="d-flex bg-dark-pink p-2 border">
                            <div class="col-md-4">
                                <img src="{{asset('storage/'.$g->photo)}}" alt="" width="100" height="100">
                            </div>
                            <div class="col-md-5 font-weight-bold" style="margin-top: 30px; color: white">
                                {{$g->title}}
                            </div>
                            <div class="col-md-4" style="margin-top: 30px;  color: white">
                                Rp {{$g->price}}

                            </div>


                        </div>


                    @endforeach
                </div>



                @if(count($cart)>0)
                    <form action="{{url('checkout')}}" method="POST" class="text-center m-3">
                        @csrf
                        <input type="submit" value="Checkout" class="btn btn-danger">
                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="">
            <div class="">
                <div class="text-center" style="color: white">
                    <h4>
                        Your Cart
                    </h4>
                </div>

                    <div class="col-mb-10">
                    @foreach ($cart as $key => $c)
                        <?php $g = \App\Game::find($key) ?>


                            <div class="form-group row" style="margin-top: 30px">
                                <img src="{{asset('storage/'.$g->photo)}}" alt="" width="100" height="100">
                            <div class="body" style="color: white">
                                <div class="card-group">
                               <h3 style="margin-left: 40px">{{$g->title}}</h3>
                               <h5 style="margin-left: 40px">Rp {{$g->price}}</h5>
                            </div>
                            </div>


                    @endforeach


                    </div>

                @if(count($cart)>0)
                    <form action="{{url('checkout')}}" method="POST" class="text-center justify-content-center">
                        @csrf
                        <input type="submit" value="Checkout" class="btn btn-danger text-center justify-content-center" style="margin-right: 60px; margin-top: 200px">

                    </form>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection --}}
