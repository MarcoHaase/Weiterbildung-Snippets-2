<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Seerosen;

class SeerosenController extends Controller
{
    public function show ()
    {
        // Diese Daten kommen normalerweise aus einem Model
        $anzahl = 7;
        $breite = "50px";
        $images = ["blatt.png", "seerose1.png", "seerose2.png", "seerose3.png"];

        // Diese Daten kommen normalerweise aus einem Model
        $daten = [];
        for ($i = 0; $i < $anzahl; $i++) {
            $daten[$i]["top"] = rand(0, 12) * 50 . "px";
            $daten[$i]["left"] = rand(0, 12) * 50 . "px";    
            $daten[$i]["image"] = $images[ rand(0, count($images)-1) ];
        }

        //$daten = Seerosen::all();

        return view("see", compact("daten", "anzahl", "breite", "images"));
    }
}

/*
$data = [
    "anzahl" => $anzahl,
    "breite" => $breite,
    "images" => $images,
];
*/
        
/*
compact("anzahl", "breite", "images") 
===> compact erzeugt das
[
    "anzahl" => $anzahl,
    "breite" => $breite,
    "images" => $images,
] 
===> in blade wird erzeugt das
$anzahl
$breite
$images



compact("data") 
===> compact erzeugt das
[
    "data" => [
        "anzahl" => $anzahl,
        "breite" => $breite,
        "images" => $images,
    ]
];
===> in blade wird erzeugt das
$data["anzahl"]
$data["breite"]
$data["images"]
*/