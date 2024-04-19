<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProjetRequest;
use App\Models\Localite;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{

    public function index()
    {
        $projets = Projet::all();
        return view('list', compact('projets'));
    }
    public function create()
    {
        $localites = Localite::all();
        //dd($localites);
        return view('create' , compact('localites'));
    }

    public function store(ProjetRequest $request)
    {
        $validatedData = $request->validated();

        if($request->validated())
        {
            $projet = new Projet;
            $projet->codeProjet = $request->input('codeProjet');
            $projet->nomProjet = $request->input('nomProjet');
            $projet->dateLancement = $request->input('dateLancement');
            $projet->duree = $request->input('duree');
            $projet->localite_id = $request->input('localite_id');

            $projet->save();

            return to_route('projet.index');

        }else{
            return redirect()->back()->withErrors($validatedData)->withInput();
        }
    }

    public function edit(string $id)
    {

        $localites = Localite::all();
        $projet = Projet::findOrfail($id);
        return view('edit', compact('projet','localites'));


    }


    public function update(ProjetRequest $request, $id)
    {
        $projet= Projet::findOrFail($id);
        
        $validatedData = $request->validated();

        if($request->validated())
          {

            $projet->codeProjet = $request->input('codeProjet');
            $projet->nomProjet = $request->input('nomProjet');
            $projet->dateLancement = $request->input('dateLancement');
            $projet->duree = $request->input('duree');
            $projet->localite_id = $request->input('localite_id');

            $projet->save();

            return to_route('projet.index');

        }else{
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $projet= Projet::findOrFail($id);
        $projet->delete();
        return redirect()->route('projet.index');
    }
}
