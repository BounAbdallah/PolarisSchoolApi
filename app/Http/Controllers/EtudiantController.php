<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEtudiantRequest;
use App\Http\Requests\UpdateEtudiantRequest;
use App\Models\Etudiant;
use Illuminate\Http\Response;

class EtudiantController extends Controller
{
    /**
     * Afficher une liste des ressources.
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return response()->json($etudiants);
    }

    /**
     * Stocker une nouvelle ressource.
     */
    public function store(StoreEtudiantRequest $request)
    {
        $etudiant = Etudiant::create($request->validated());
        return response()->json($etudiant, Response::HTTP_CREATED);
    }

    /**
     * Afficher une ressource spécifique.
     */
    public function show(Etudiant $etudiant)
    {
        return response()->json($etudiant);
    }

    /**
     * Mettre à jour une ressource spécifique.
     */
    public function update(UpdateEtudiantRequest $request, Etudiant $etudiant)
    {
        $etudiant->update($request->validated());
        return response()->json($etudiant);
    }

    /**
     * Supprimer une ressource spécifique.
     */
    public function destroy(Etudiant $etudiant)
    {
        $etudiant->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Restaurer une ressource supprimée.
     */
    public function restore($id)
    {
        $etudiant = Etudiant::onlyTrashed()->where('id', $id)->first();
        if ($etudiant) {
            $etudiant->restore();
            return response()->json([
                'message' => 'Etudiant restauré avec succès',
                'etudiant' => $etudiant,
            ]);
        } else {
            return response()->json([
                'message' => 'Etudiant non trouvé ou déjà restauré',
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Supprimer définitivement une ressource.
     */
    public function forceDelete($id)
    {
        $etudiant = Etudiant::onlyTrashed()->where('id', $id)->first();
        if ($etudiant) {
            $etudiant->forceDelete();
            return response()->json([
                'message' => 'Etudiant supprimé définitivement',
            ]);
        } else {
            return response()->json([
                'message' => 'Etudiant non trouvé ou déjà supprimé définitivement',
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Afficher les ressources supprimées.
     */
    public function trashed()
    {
        $etudiants = Etudiant::onlyTrashed()->get();
        return response()->json([
            'message' => 'Etudiants archivés',
            'etudiants' => $etudiants,
        ]);
    }
}
