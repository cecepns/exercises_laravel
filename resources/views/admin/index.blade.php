@extends('template')
 

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Kelola Kuis</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('admin.create') }}"> Create Kuis</a>
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
            <th width="280px"class="text-center">Nama Kuis</th>
            <th width="280px"class="text-center">Tanggal Kuis</th>
            <th width="280px"class="text-center">Status</th>
            <th width="280px"class="text-center">Action</th>
        </tr>
        @foreach ($listkuis as $kuis)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $kuis->nama_kuis }}</td> 
            <td>{{ $kuis->tanggal_mulai }}</td>
            <td>
                @if($kuis->status == 'open')
                <span class="badge badge-success">OPEN</span>
                @else
                <span class="badge badge-danger">CLOSE</span>
                @endif
            </td>
            <td>
            <form action="{{ route('admin.destroy',$kuis->id) }}" method="POST">

                <a class="btn btn-primary btn-sm" href="{{ url('/admin/manage-quiz', [$kuis->id]) }}">Kelola Kuis</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete kuis</button>
                
            </form>
            </td>
          
        </tr>
        @endforeach
    </table>
 

 
 
@endsection