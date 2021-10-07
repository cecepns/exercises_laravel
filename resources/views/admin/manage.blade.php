@extends('template')
 

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Pilih Soal</h2>
            </div>
           
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
        @foreach ($listsoal as $soal)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $soal->soal }}</td> 
           
            <td>
            @foreach($soalkuis as $idkuis)
             @if($idkuis->id_soal == $soal->id)
                <a class="btn btn-danger btn-sm" href="{{ url('/admin/manage') }}">Tambahkan</a>
             @else
                <a class="btn btn-primary btn-sm" href="{{ url('/admin/manage') }}">Batalkan</a>
             @endif
                
            @endforeach
            </td>
          
        </tr>
        @endforeach
    </table>
 

 
 
@endsection