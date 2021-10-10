<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;
use App\Models\Kuis;


class KuisController extends Controller
{
    //
    public function index()
    {
        return view('kuis.find-kuis', ['kuis' => 0]);
    }


    public function show()
    {
        # code...
    }

    public function searchkuis(Request $request)
    {

        $soalquiz = Kuis::where('kode_kuis',$request->kode_kuis)->get();
        
        if(count($soalquiz) > 0){
           return view('kuis.find-kuis', ['kuis' => $soalquiz])
                     ->with(['success' => 'Kuis berhasil ditemukan!']);
        } else {
            return view('kuis.find-kuis', ['kuis' => $soalquiz])
                     ->with(['error' => 'Kuis tidak ditemukan!']);
        }
    }
}
