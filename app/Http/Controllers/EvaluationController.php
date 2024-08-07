<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEvaluationRequest;
use App\Http\Requests\UpdateEvaluationRequest;
use App\Models\Evaluation;
use Illuminate\Http\Response;

class EvaluationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evaluations = Evaluation::all();
        return response()->json($evaluations);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEvaluationRequest $request)
    {
        $evaluation = Evaluation::create($request->validated());
        return response()->json($evaluation, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Evaluation $evaluation)
    {
        return response()->json($evaluation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEvaluationRequest $request, Evaluation $evaluation)
    {
        $evaluation->update($request->validated());
        return response()->json($evaluation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Evaluation $evaluation)
    {
        $evaluation->delete();
        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * Restore a trashed resource.
     */
    public function restore($id)
    {
        $evaluation = Evaluation::onlyTrashed()->where('id', $id)->first();
        if ($evaluation) {
            $evaluation->restore();
            return response()->json([
                'message' => 'Evaluation restaurée avec succès',
                'evaluation' => $evaluation,
            ]);
        } else {
            return response()->json([
                'message' => 'Evaluation non trouvée ou déjà restaurée',
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Permanently delete a trashed resource.
     */
    public function forceDelete($id)
    {
        $evaluation = Evaluation::onlyTrashed()->where('id', $id)->first();
        if ($evaluation) {
            $evaluation->forceDelete();
            return response()->json([
                'message' => 'Evaluation supprimée définitivement',
            ]);
        } else {
            return response()->json([
                'message' => 'Evaluation non trouvée ou déjà supprimée définitivement',
            ], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Display trashed resources.
     */
    public function trashed()
    {
        $evaluations = Evaluation::onlyTrashed()->get();
        return response()->json([
            'message' => 'Evaluations archivées',
            'evaluations' => $evaluations,
        ]);
    }
}

