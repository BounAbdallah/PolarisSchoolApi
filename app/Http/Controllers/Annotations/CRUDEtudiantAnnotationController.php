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
 *     path="/api/etudiants/",
 *     summary="Liste Etudiantss",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\GET(
 *     path="/api/etudiants/trashed",
 *     summary="Corbeille  Etudiants",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\POST(
 *     path="/api/add/etudiant",
 *     summary="Ajout Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_de_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_pass", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\PUT(
 *     path="/api/update/{id}",
 *     summary="Modification Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_de_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_pass", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\POST(
 *     path="/api/etudiants/restore/{id}",
 *     summary="Restorer Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_de_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_pass", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\GET(
 *     path="/api/detail/{id}",
 *     summary="Details Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="200", description="OK"),
 * @OA\Response(response="404", description="Not Found"),
 * @OA\Response(response="500", description="Internal Server Error"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_de_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_pass", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\POST(
 *     path="/api/delete/{id}",
 *     summary="Delete Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="201", description="Created successfully"),
 * @OA\Response(response="400", description="Bad Request"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_de_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_pass", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


 * @OA\DELETE(
 *     path="/api/etudiants/force-delete/{id}",
 *     summary="Force Delete Etudiant",
 *     description="",
 *         security={
 *    {       "BearerAuth": {}}
 *         },
 * @OA\Response(response="204", description="Deleted successfully"),
 * @OA\Response(response="401", description="Unauthorized"),
 * @OA\Response(response="403", description="Forbidden"),
 * @OA\Response(response="404", description="Not Found"),
 *     @OA\Parameter(in="path", name="prenom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="nom", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="date_de_naissance", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="adresse", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="telephone", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="matricule", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="email", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="path", name="mot_de_pass", required=false, @OA\Schema(type="string")
 * ),
 *     @OA\Parameter(in="header", name="User-Agent", required=false, @OA\Schema(type="string")
 * ),
 *     tags={"CRUD_Etudiant"},
*),


*/

 class CRUDEtudiantAnnotationController {}
