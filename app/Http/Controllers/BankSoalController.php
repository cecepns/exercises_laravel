<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Soal;

class BankSoalController extends Controller
{
    

    public function index($idkuis)
    {

        $listsoal = Soal::where('id_kuis', $idkuis)->get();
        
        return view('admin.soal.index', ['listsoal' => $listsoal,'idkuis' =>$idkuis]);
    }
  
    public function create($idkuis)
    {
        return view('admin.soal.create', ['idkuis' => $idkuis]);
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'id_kuis' => 'required',
            'soal' => 'required',
            'pilihan_a' => 'required',
            'pilihan_b' => 'required',
            'pilihan_c' => 'required',
            'pilihan_d' => 'required',
            'kunci_jawaban' => 'required',
        ]);
         
   
        Soal::create($request->all());
       
         
        return redirect()
                ->back()
                ->with('success','Soal created successfully.');
    }

    
   public function show(){
       
   }


   public function destroy($id)
    {
        $soalquiz = Soal::findOrFail($id);
        if($soalquiz){
           $soalquiz->delete();
           return redirect()
                     ->back()
                     ->with(['success' => 'Data Berhasil Dihapus!']);
        } 
    }

    public function addsoalquiz($id)
    {
        // $listsoal = Soal::all();
        
        return view('admin.soal.create');
    }

}
