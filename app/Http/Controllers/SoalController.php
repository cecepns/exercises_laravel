<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;


class SoalController extends Controller
{
    //
    public function index()
    {
        $soals = Soal::latest()->paginate(1);
        return view('kuis.kuis',compact('soals'));
    }
  
}
