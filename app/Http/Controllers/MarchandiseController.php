<?php

namespace App\Http\Controllers;
use App\Models\Marchandise;

use Illuminate\Http\Request;

class MarchandiseController extends Controller
{ /**
    * Affiche la liste des marchandises.
    *
    * @return \Illuminate\Http\Response
    */
   public function index()
   {
       // Récupère toutes les marchandises depuis la base de données
       $marchandises = Marchandise::all();
       return view('marchandises.index', compact('marchandises'));
   }

  // Affiche le formulaire pour créer un nouveau marchandise
  public function create()
  {
      return view('marchandises.create');
  }

  // Enregistre un nouveau marchandise dans la base de données
  public function store(Request $request)
  {
      // Validation des données
      $request->validate([
          'nom_marchandise' => 'required',
          'prix' => 'required| integer',
          'libelle' => 'required',
          'quantite' => 'required',

      ]);

      // Création du marchandise
      Marchandise::create($request->all());

      return redirect()->route('marchandises.index')
                       ->with('success', 'Marchandise ajouté avec succès.');
  }

  // Affiche les détails d'un marchandise spécifique
  public function show(Marchandise $marchandise)
  {
      return view('marchandises.show', compact('marchandise'));
  }

  // Affiche le formulaire pour modifier un marchandise spécifique
  public function edit(Marchandise $marchandise)
  {
      return view('marchandises.edit', compact('marchandise'));
  }

  // Met à jour les informations d'un marchandise spécifique
  public function update(Request $request, marchandise $id)
  {
      // Validation des données
      $data = $request->validate([
        'nom_marchandise' => 'required',
        'prix' => 'required',
        'libelle' => 'required',
        'quantite' => 'required',
       ]);
        
       $id->update($data);

       return redirect()->route('marchandises.index');

    //   // Mise à jour des données du marchandise
    //   $marchandise= Marchandise::findOrFail($id);
    //   $request->update([
    //     'nom_marchandise' => $request->nom_marchandise,
    //     'prix' => $request->prix,
    //     'libelle' => $request->libelle,
    //     'quantite' => $request->quantite,
    //    ]);

    //    $marchandise->update($request->all());

    //   return redirect()->route('marchandises.index')
    //                    ->with('success', 'Marchandise mis à jour avec succès.');
  }

    //   return redirect()->route('marchandises.index')
    //                    ->with('success', 'Marchandise mis à jour avec succès.');
 

  // Supprime un marchandise spécifique
  public function destroy(Marchandise $marchandise)
  {
      $marchandise->delete();

      return redirect()->route('marchandises.index')
                       ->with('success', 'Marchandise supprimé avec succès.');
  }

}  

