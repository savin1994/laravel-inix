
@extends('layouts.frontend')
@section('content')

    <div class="row mt-5">
        <h1 class="text-center">Halaman About
          <hr>
          <div class="row d-flex justify-content-center">
                <div class="card ms-4" style="width: 18rem;">
                    <img src="img/{{ $image }}" class="card-img-top" alt="{{$name}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$name}}</h5>
                    <p class="card-text"> {{$email}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card ms-4" style="width: 18rem;">
                    <img src="img/{{ $image }}" class="card-img-top" alt="{{$name}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$name}}</h5>
                    <p class="card-text"> {{$email}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card ms-4" style="width: 18rem;">
                    <img src="img/{{ $image }}" class="card-img-top" alt="{{$name}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$name}}</h5>
                    <p class="card-text"> {{$email}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                <div class="card ms-4" style="width: 18rem;">
                    <img src="img/{{ $image }}" class="card-img-top" alt="{{$name}}">
                    <div class="card-body">
                    <h5 class="card-title">{{$name}}</h5>
                    <p class="card-text"> {{$email}}</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>

    </h1> </div>
@endsection

