@extends('layouts.app')

@section('content')

            @foreach ($type as $t)
            <div class="container">
                <div class="container-fluid mb-4">
                    <h1 style="color: white">{{$t->name}}</h5>
                 <div class="row row-cols-5 ml-4 mb-4">
                     @foreach ($game as $g)
                             <div class="card-group">
                                 <div class ="card" style="width: 27rem; background-color: black; padding: 8px">
                                 <img src="{{asset('storage/'.$g->photo)}}" class="card-img-bottom"  onclick="window.location.href='{{url('detail', ['id' => $g, 'title' => $g -> title])}}'" alt="{{$g->title}}" style="height: 300px">
                             <div class="card-body text-center">

                                <button type="button" class="btn btn primary btn-sm btn-block" onclick="window.location.href='{{url('detail', ['id' => $g, 'title' => $g -> title])}}'" style="font-size: 14px; color: white; text-align: center">{{$g->title}}</button>
                                 <h5 class="card-body" style="color: white">Rp.{{$g->price}}</h5>
                             </div>

                             </div>
                         </div>
                     @endforeach
                 </div>
                  </div>
                 @endforeach


@endsection
