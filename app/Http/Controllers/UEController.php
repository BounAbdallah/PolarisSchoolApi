<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUERequest;
use App\Http\Requests\UpdateUERequest;
use App\Models\UE;
use Illuminate\Http\Response;

class UEController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ues = UE::all();
        return response()->json($ues);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUERequest $request)
    {
        $ue = UE::create($request->validated());
        return response()->json($ue, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(UE $uE)
    {
        return response()->json($uE);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUERequest $request, UE $uE)
    {
        $uE->update($request->validated());
        return response()->json($uE);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UE $uE)
    {
        $uE->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Restore a trashed resource.
     */
    public function restore($id)
    {
        $ue = UE::onlyTrashed()->where('id', $id)->first();
        if ($ue) {
            $ue->restore();
            return response()->json([
                'message' => 'UE restaurée avec succès',
                'ue' => $ue,
            ]);
        } else {
            return response()->json([
                'message' => 'UE non trouvée ou déjà restaurée',
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Permanently delete a trashed resource.
     */
    public function forceDelete($id)
    {
        $ue = UE::onlyTrashed()->where('id', $id)->first();
        if ($ue) {
            $ue->forceDelete();
            return response()->json([
                'message' => 'UE supprimée définitivement',
            ]);
        } else {
            return response()->json([
                'message' => 'UE non trouvée ou déjà supprimée définitivement',
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Display trashed resources.
     */
    public function trashed()
    {
        $ues = UE::onlyTrashed()->get();
        return response()->json([
            'message' => 'UEs archivées',
            'ues' => $ues,
        ]);
    }
}
