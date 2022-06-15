@section('custom-css')
<link rel="stylesheet" href="{{asset('css/vacanze.css')}}">
@endsection

@extends('layout.app')

@section('content')
<div class="container-fluid hero_container">


</div>




<div class="container-fluid content_card">
<div class="pt-5 container">
    <div class="row row-cols-sm-2 row-cols-md-4">
        @foreach($places as $place)
        <div class="col  d-flex flex-column">
            
            <div class="card ">
                <div class="img">
                    <img class="img-fluid img_card" src="{{$place->img}}"  alt="">
                </div>
                <div class="text_section">
                    <h3 class="pt-2 text-center">{{$place->destinazione}}</h3>
                    <h6 >Hotel: {{$place->hotel}}</h6>
                    <p><strong class="red">Intrattenimento</strong> <br>  {{$place->intrattenimento}}</p>
                    <hr>
                    <h6 class="text-center">Storia</h6>
                    <p class="text-center">{{$place->descrizione}}</p>
                </div>
            </div>

          
        </div>
        @endforeach
    </div>
</div>

</div>
@endsection