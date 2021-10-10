<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
         
   
        // Kuis::create($request->all());
        Kuis::insert([
            'kode_kuis' => Str::random(6),
            'nama_kuis' => $request->nama_kuis,
            'tanggal_mulai' => $request->tanggal_mulai,
            'status' => $request->status
        ]);
         
        return redirect()
                ->route('admin.index')
                ->with('success','Kuis created successfully.');
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

  

   public function managequiz($id)
   {    
    $soalkuis = SoalKuis::leftJoin('soals', 'soal_kuis.id_soal', '=', 'soals.id')
                        // ->where('soal_kuis.id_kuis', $id)
                        ->get();
    

    
    // $listsoal = Soal::all();
       return view('admin.manage', ['soalkuis' => $soalkuis,
                                    'idkuis' => $id]);

   }

    public function destroysoalquiz($id) {
        $soalquiz = SoalKuis::findOrFail($id);
        var_dump($soalquiz);
        $soalquiz->delete();
        if($soalquiz){
           return redirect()
                     ->back()
                     ->with(['success' => 'Data Berhasil Dihapus!']);
        } 
    }





    
}
