@section('custom-css')
<link rel="stylesheet" href="{{asset('css/vacanze.css')}}">
@endsection

@extends('layout.app')

@section('content')
<div class="container-fluid hero_container">


</div>

<h1 class="pt-5 cursiv text-center">Scegli il giusto posto per te</h1>
<div class="pt-5 container">
    <div class="row row-cols-sm-2 row-cols-md-4">
        @foreach($places as $place)
        <div class="col d-flex flex-column">
            
            <div class="card">
                <div class="img">
                    <img class="img-fluid img_card" src="{{$place->img}}"  alt="">
                </div>
            </div>

          
        </div>
        @endforeach
    </div>
</div>
@endsection