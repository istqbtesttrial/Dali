<?php

namespace App\Http\Controllers;
use App\Models\Formation;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class FormationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $formations = Formation::orderBy('id')->get();
        return view('formations.index')->with('formations',$formations);
    }


    public function create()
    {
        return view('formations.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'niveau'=> 'required',
            'specialite'=>'required',
            'groupe'=>'required',
           'description'=> 'required',
           'matieres'=> 'required',
           'formateurs'=> 'required',
           'etutiants'=>'required',
         
           
        ]);

        $suggestion= suggestion::create([
            'niveau'=> $request->niveau,
            'specialite'=> $request->specialite,
            'description'=> $request->description,
           'matieres'=> $request->matieres,
           'formateurs'=> $request->formateurs,
           'etudiants'=> $request->etudiants,
           'groupe'=> $request->groupe,
          
          
        ]);

          return redirect()->back();

    }



    public function edit($id)
    {
         $formation = formation::where('id', $id)->first();
        return view('formations.edit')-> with('formation',$formation);
    }

    public function update(Request $request, $id)
    {
        $formation = formation::find($id);
        $this->validate($request, [
            'niveau'=> 'required',
            'specialite'=>'required',
            'description'=> 'required',

         ]);
  
     $formation->niveau =$request->niveau;
     $formation->specialite =$request->specialite;
     $formation->description =$request->description;
     $formation->formateurs =$request->formateurs;
     $formation->matieres =$request->matieres;
     $formation->groupe=$request->groupe;
     $formation->etudiants =$request->etudiants;
     $formation->id;
     $formation-> save();
      return redirect()->back();
    }

    public function destroy($id)
    {
        $formation = formation::find($id);

        if($formation===null){
         return redirect()->back();
        }
        $formation->delete();
        return redirect()->back();
    }

}
