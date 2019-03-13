<?php

namespace App\Http\Controllers;

use App\Randonnee;
use App\Message;

class RandonneesController extends Controller
{
    public function liste()
    {
        $randonnees = Randonnee::all();

        return view('randonnees', [
            'randonnees' => $randonnees,
        ]);
    }

    public function voir()
    {
        $email = request('email');

        $randonnee = Randonnee::where('name', $nom)->firstOrFail();

        return view('randonnee', [
            'randonnee' => $randonnee,

        ]);
    }
    public function formulaire()
    {
        return view('randonnees');
    }

    public function traitement()
    {
        request()->validate([
            'name' => ['required'],
            'difficulty' => ['required'],
            'distance' => ['required'],
            'duration' => ['required'],
            'height_difference' => ['required'],
            'type_trajet' => ['required'],
            'date' => ['required'],
        ]);

        $utilisateur = Randonnee::create([
            'utilisateur_id' => request(user()->id),
            'nom' => request('name'),
            'difficulte' => request('difficulty'),
            'distance' => request('distance'),
            'duree' => request('duration'),
            'denivele' => request('height_difference'),
            'type_trajet' => request('type_trajet'),
            'date' => request('date'),
        ]);

        return "Randonnée créer";
    }
}
