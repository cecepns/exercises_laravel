@extends('template')


@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Soal</h2>
        </div>
        <!-- <div class="float-right">
            <a class="btn btn-primary" href="{{ route('manage-soal', $idkuis) }}"> Buat soal</a>
        </div> -->

    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif



<table class="table table-bordered">
    <tr>
        <th width="20px" class="text-center">No</th>
        <th class="text-center">Soal</th>
        <th width="200px" class="text-center">Aksi </th>
    </tr>
    @foreach ($soalkuis as $value)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        <td>{{ $value->soal }}</td>

        <td>

        @if($idkuis == $value->id_kuis)
           <button class="btn btn-primary btn-sm"> Batalkan </button>

        @else

           <button class="btn btn-danger btn-sm"> Tambahkan </button>

        @endif

           

        </td>

    </tr>
    @endforeach
</table>




@endsection
