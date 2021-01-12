@extends('layouts.app')

@section('content')

 <div class="container mt-4">
    <div class="container-fluid">
    @foreach ($game as $g)
    <div class="container">
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="{!!$g->video!!}" allowfullscreen></iframe>
      </div>
    </div>
    <div class="d-flex flex-row" style="margin-top: 100px">
        <div class="card" style="width: 40rem;">
            <img class="card-img-top" src="{{asset('storage/'.$g->photo)}}" style="height: 400px">
        </div>
        <div id="body">
            <div>
            <h3 style="color: white; margin-left: 40px">{{$g->title}}</h3>
            <p style="color: white; margin-left: 40px">{{$g->description}}</p>
            <h5 style="color: white; margin-left: 40px">Rp. {{$g->price}}</h5>
            </div>

                <form action="{{url('add-to-cart/'.$g->id)}}" method="POST">
                    @csrf
                    <table>
                        <tr>
                            <td></td>
                            <td>
                                <input type="submit" value="Add to Cart" class="btn btn-primary" style="margin-left: 37px; margin-top: 20px">
                            </td>
                        </tr>
                    </table>
                </form>
            
        </div>
    @endforeach
</div>
    </div>
 </div>

 @endsection
