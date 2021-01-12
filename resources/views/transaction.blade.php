@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-contnt-center">
        <div class="w-100">
        <div class="w-100">
            <div class="text-center" style="color: white">
            <h4> Your Transaction History </h4>
            </div>
            <div class="w-100">
            @foreach ($header as $header)
            <button type="button" class="btn btn primary btn-sm btn-block" onclick="window.location.href='{{url('history', ['id' => $header])}}'" style="font-size: 25px; font-weight: bold; color: white; text-align: center">Transaction at {{$header->transaction_date}}</button>
            {{-- <a href="{{'history'.$header->id}}" class="border bg-dark-pink p-2 text-center d-block">Transaction at {{$header->transaction_date}}</a> --}}
            @endforeach
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
