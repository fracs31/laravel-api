<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project; //model

class ProjectController extends Controller
{
    //Index
    public function index() {
        $projects = Project::with("type:id,name", "technologies:id,name")->paginate(2); //prendo tutti i progetti dal database
        //Restituisco il JSON
        return response()->json([
            "success" => true, //successo
            "results" => $projects //risultati
        ]);
    }
    //Show
    public function show($slug) {
        $project = Project::with("type:id,name", "technologies:id,name")->where("slug", $slug)->first(); //prendo il singolo progetto dal database tramite lo slug
        //Restituisco il JSON
        return response()->json([
            "success" => true, //successo
            "results" => $project //risultati
        ]);
    }
}
