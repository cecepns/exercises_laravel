<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kuis;
use App\Models\Soal;
use App\Models\SoalKuis;

class AdminKuisController extends Controller
{
    public function index()
    {
        $listkuis = Kuis::latest()->paginate(5);
        return view('admin.index',compact('listkuis'));
    }
  
    public function create()
    {
        return view('admin.create');
    }

  
    public function store(Request $request)
    {
        $request->validate([
            'nama_kuis' => 'required',
            'tanggal_mulai' => 'required',
            'status' => 'required',
        ]);
         
   
        Kuis::create($request->all());
         
        return redirect()
                ->route('admin.index')
                ->with('success','Post created successfully.');
    }

    
   public function show(){
       
   }

   public function destroy($id)
   {
       $blog = Kuis::findOrFail($id);
       $blog->delete();
     
       if($blog){
          return redirect()
                    ->route('admin.index')
                    ->with(['success' => 'Data Berhasil Dihapus!']);
       } 
   }

  

   public function managequiz()
   {    
    $users = SoalKuis::join('soals', 'soal_kuis.id_soal', '=', 'soals.id')
                       ->get(['soal_kuis.id_soal']);
    
    $listsoal = Soal::all();
    
       return view('admin.manage', ['listsoal' => $listsoal, 
                                    'soalkuis' => $users]);
   }





    
}
