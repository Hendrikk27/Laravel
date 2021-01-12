@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">

        <div class="w-100">
            <div class="w-100">
                <div class="text-center" style="color: white">
                <h4>Your Transaction at {{$header->transaction_date}}</h4>
                </div>
                <div class="text-center" style="color: white">
                    <div>
                        <div class="d-flex font-weight-bold justify-content-center" style="color: white">
                            <div class="w-25 border">Game Image</div>
                            <div class="w-25 border">Game Title</div>
                            <div class="w-25 border">Price</div>

                        </div>
                        <?php $total = 0 ?>
                        @foreach ($header->transactionDetail as $d)
                            <?php $total += $d->game->price?>
                            <div class="d-flex justify-content-center">
                                <div class="w-25 border" style="color: white">
                                    <img src="{{asset('storage/'.$d->game->photo)}}" alt="" width="100" height="100">
                                </div>
                                <div class="w-25 border" style="color: white">
                                    {{$d->game->title}}
                                </div>
                                <div class="w-25 border" style="color: white">
                                    Rp {{$d->game->price}}
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="font-weight-bold" style="color: white; margin-left: 850px; margin-top: 20px">
                    Total Price: Rp {{$total}}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
