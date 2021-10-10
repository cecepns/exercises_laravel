@extends('template')
 
@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Buat Soal</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ url('admin/manage-soal', $idkuis) }}"> Back</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

 
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<form action="{{ route('manage-soal.store') }}" method="POST">
    @csrf
 
     <div class="row mb-5">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <input type="hidden" name="id_kuis" class="form-control" value={{ $idkuis }}>

            <div class="form-group">
                <strong>Soal:</strong>
                <textarea type="text" name="soal" class="form-control" placeholder="Masukan Soal"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jawaban A:</strong>
               <input type="text" name="pilihan_a" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jawaban B:</strong>
               <input type="text" name="pilihan_b" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jawaban C:</strong>
               <input type="text" name="pilihan_c" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jawaban D:</strong>
               <input type="text" name="pilihan_d" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kunci Jawaban:</strong>
                <select class="custom-select" name="kunci_jawaban">
                <option selected>Pilih Kunci Jawaban</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                </select
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
 
</form>
@endsection