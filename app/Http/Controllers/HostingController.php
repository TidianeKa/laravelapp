<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HostingController extends Controller
{

    public function index()
    {
        // Remplacez cette logique par la récupération réelle de vos hébergements depuis la base de données
        $hostings = [
            ['name' => 'Hébergement 1', 'description' => 'Description de l\'hébergement 1'],
            ['name' => 'Hébergement 2', 'description' => 'Description de l\'hébergement 2'],
            // Ajoutez d'autres hébergements ici
        ];

        return view('hostings.index', compact('hostings'));
    }
}


