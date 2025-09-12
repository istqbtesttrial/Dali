<?php

namespace App\Http\Controllers;
use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SuggestionController extends Controller
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
        $suggestions = Suggestion::orderBy('id')->get();
        return view('suggestions.index')->with('suggestions',$suggestions);
    }


    public function create()
    {
        return view('suggestions.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'niveau'=> 'required',
            'specialite_bac'=>'required',
           'moyenne_g'=> 'required',
         
           
        ]);

        $suggestion= suggestion::create([
            'niveau'=> $request->niveau,
            'specialite_bac'=> $request->specialite_bac,
            'moyenne_g'=> $request->moyenne_g,
           'moyenne_math'=> $request->moyenne_math,
           'moyenne_eco'=> $request->moyenne_eco,
           'moyenne_gestion'=> $request->moyenne_gestion,
           'moyenne_info'=> $request->moyenne_info,
           'moyenne_fr'=> $request->moyenne_fr,
          
        ]);

          return redirect()->back();

    }



    public function edit($id)
    {
         $suggestion = suggestion::where('id', $id)->first();
        return view('suggestions.edit')-> with('suggestion',$suggestion);
    }

    public function update(Request $request, $id)
    {
        $suggestion = suggestion::find($id);
        $this->validate($request, [
            'niveau'=> 'required',
            'specialite_bac'=>'required',
            'moyenne_g'=> 'required',

         ]);
  
     $suggestion->niveau =$request->niveau;
     $suggestion->specialite_bac =$request->specialite_bac;
     $suggestion->moyenne_g =$request->moyenne_g;
     $suggestion->moyenne_math =$request->moyenne_math;
     $suggestion->moyenne_eco =$request->moyenne_eco;
     $suggestion->moyenne_gestion=$request->moyenne_gestion;
     $suggestion->moyenne_fr =$request->moyenne_fr;
     $suggestion->moyenne_info =$request->moyenne_info;
     $suggestion->etat = 0;
     $suggestion->id;
     $suggestion-> save();
      return redirect()->back();
    }

    public function destroy($id)
    {
        $suggestion = suggestion::find($id);

        if($suggestion===null){
         return redirect()->back();
        }
        $suggestion->delete();
        return redirect()->back();
    }

}
