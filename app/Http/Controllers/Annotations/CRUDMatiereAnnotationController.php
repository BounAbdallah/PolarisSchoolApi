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
 *     path="/api/matieres",
 *     summary="Liste Matieres",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Matiere"},
*),


 * @OA\POST(
 *     path="/api/add/matieres",
 *     summary="Ajout Matieres",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Matiere"},
*),


 * @OA\GET(
 *     path="/api/matieres/{id}",
 *     summary="Details Matieres",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Matiere"},
*),


 * @OA\PUT(
 *     path="/api/update/matieres/{id}",
 *     summary="Modification Matieres",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Matiere"},
*),


 * @OA\DELETE(
 *     path="/api/delete/matieres/{id}",
 *     summary="Suppression Matieres",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="204", description="Deleted successfully"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 * @OA\Response(response="404", description="Not Found"),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Matiere"},
*),


*/

 class CRUDMatiereAnnotationController {}
