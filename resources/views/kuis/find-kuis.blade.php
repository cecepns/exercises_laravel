@extends('template')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif



<div class="bg-light d-flex align-items-center justify-content-center vh-100" style="min-height:100vh;">

  <div class="row">

    <form class="form-inline" action="{{ route('search') }}" method="GET">
      @csrf
        <input class="form-control mr-sm-2" name="kode_kuis" type="search" placeholder="masukan kode kuis"
        aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Join Game </button>
      </form>
      

    @if($kuis !== 0 && count($kuis) > 0)
    @foreach($kuis as $value)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{$value->nama_kuis}}</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
    @endif

    </div>


</div>

@endsection
