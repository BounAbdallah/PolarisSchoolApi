<?php

namespace App\Http\Controllers\Annotations ;

/**
 * @OA\Security(
 *     security={
 *         "BearerAuth": {}
 *     }),

 * @OA\SecurityScheme(
 *     securityScheme="BearerAuth",
 *     type="http",
 *     scheme="bearer",
 *     bearerFormat="JWT"),

 * @OA\Info(
 *     title="Your API Title",
 *     description="Your API Description",
 *     version="1.0.0"),

 * @OA\Consumes({
 *     "multipart/form-data"
 * }),

 *

 * @OA\GET(
 *     path="/api/evaluations",
 *     summary="Liste Evaluations",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Evaluations"},
*),


 * @OA\POST(
 *     path="/api/add/evaluations",
 *     summary="Ajout  Evaluations",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="date", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="valeur", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="etudiant_id", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matiere_id", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Evaluations"},
*),


 * @OA\GET(
 *     path="/api/evaluations/{id}",
 *     summary="Details Evaluations",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="path", name="date", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="valeur", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="etudiant_id", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matiere_id", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Evaluations"},
*),


 * @OA\PUT(
 *     path="/api/evaluations/update/{id}",
 *     summary="Modification  Evaluations",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Evaluations"},
*),


*/

 class CRUDEvaluationsAnnotationController {}
