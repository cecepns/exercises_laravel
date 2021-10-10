@extends('template')

@section('content')

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif



<div class="bg-light d-flex align-items-center justify-content-center vh-100" style="min-height:100vh;" >

    <h1> {{ $kuis }}</h1>

  <form class="form-inline" action="{{ route('search') }}" method="GET">
    @csrf
    <input class="form-control mr-sm-2" name="kode_kuis" type="search" placeholder="masukan kode kuis" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari Kuis </button>
  </form>
</div>

@endsection