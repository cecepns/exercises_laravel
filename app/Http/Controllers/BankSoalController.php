<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;

class BankSoalController extends Controller
{
    

    public function index()
    {
        $listsoal = Soal::all();
        
        return view('admin.soal.index', compact('listsoal'));
    }
  
    public function create()
    {
        return view('admin.soal.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'soal' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'kunci_jawaban' => 'required',
        ]);
         
   
        Soal::create($request->all());
       
         
        return redirect()
                ->route('admin.soal.index')
                ->with('success','Soal created successfully.');
    }

    
   public function show(){
       
   }

}
