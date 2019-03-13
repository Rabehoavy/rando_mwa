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
}
