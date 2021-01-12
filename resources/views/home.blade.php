@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="container-fluid">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active" style="width: 800px">
                        <img class="d-block w-100" src="/animal.jpg" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/flight.jpg" alt="Second slide" style="width: 800px; height: 450px;">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="/codd.jpg" alt="Third slide" style="width: 800px; height: 450px;">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


            @foreach ($type as $t)
            <div class="container">
                <div class="container-fluid mb-4">
                    <button type="button" class="btn btn primary btn-sm btn-block" onclick="window.location.href='{{url('type', ['id' => $t])}}'" style="font-size: 25px; font-weight: bold; color: white; text-align: justify">{{$t->name}}</button>
                 <div class="row row-cols-5 ml-4 mb-4">
                     @foreach ($game as $g)
                         @if ($g->type_id == $t->id)
                             <div class="card-group">
                                 <div class ="card" style="width: 27rem; background-color: black; padding: 8px">
                                 <img src="{{asset('storage/'.$g->photo)}}" class="card-img-bottom"  onclick="window.location.href='{{url('detail', ['id' => $g, 'title' => $g -> title])}}'" alt="{{$g->title}}" style="height: 300px">
                             <div class="card-body text-center">

                                <button type="button" class="btn btn primary btn-sm btn-block" onclick="window.location.href='{{url('detail', ['id' => $g, 'title' => $g -> title])}}'" style="font-size: 14px; color: white; text-align: center">{{$g->title}}</button>
                                 <h5 class="card-body" style="color: white">Rp.{{$g->price}}</h5>
                             </div>

                             </div>
                         </div>
                         @endif
                     @endforeach
                 </div>
                  </div>
                 @endforeach


@endsection
