@extends('layouts.main')

@section("content")
<div class="container">
    <div class="row">
        <div class="col-4">
            <h1>{{$phone['manufacturer']}} {{$phone['model']}}</h1>
            <img src="{{asset("$phone[id].jpg")}}" alt="{{$phone['model']}}">
        </div>
        <div class="col-6 p-3 m-5">
            <ul>
                <li>Gyártó: {{$phone['manufacturer']}}</li>
                <li>Típus: {{$phone['model']}}</li>
                <li>Tárhely: {{$phone['storage']}}</li>
                <li>Ár: {{number_format($phone["price"], 0, ",", " ")}} Ft</li>                
            </ul>
            <p>{{$phone['description']}}</p>
            <a href="{{route('home')}}">Vissza a főoldalra</a>
        </div>
    </div>
</div>


@endsection