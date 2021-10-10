@extends('template')


@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Kelola Soal</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-success" href="{{ route('manage-soal.create') }}"> Buat Soal</a>
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
        <th width="280px" class="text-center">Soal</th>
        <th width="280px" class="text-center">Pilihan A</th>
        <th width="280px" class="text-center">Pilihan B</th>
        <th width="280px" class="text-center">Pilihan B</th>
        <th width="280px" class="text-center">Pilihan C</th>
        <th width="280px" class="text-center">Kunci Jawaban</th>
    </tr>
    @foreach ($listsoal as $soal)
    <tr>
        <td class="text-center">{{ $loop->iteration }}</td>
        </td>
        <td>{{ $soal->soal }}</td>
        <td>{{ $soal->pilihan_a }}</td>
        <td>{{ $soal->pilihan_b }}</td>
        <td>{{ $soal->pilihan_c }}</td>
        <td>{{ $soal->pilihan_d }}</td>
        <td>
            <span class="badge badge-success">{{$soal->kunci_jawaban}}</span>
        </td>
        <td>
            <form action="{{ route('admin.destroy',$soal->id) }}" method="POST">

                <a class="btn btn-primary btn-sm" href="{{ url('/admin/manage-quiz', [$soal->id]) }}">Edit Soal</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> Hapus Soal</button>

            </form>
        </td>

    </tr>
    @endforeach
</table>




@endsection
