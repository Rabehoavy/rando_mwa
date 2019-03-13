<?php

namespace App\Http\Controllers;

use App\Utilisateur;

class InscriptionController extends Controller
{
    public function formulaire()
    {
        return view('inscription');
    }

    public function traitement()
    {
        request()->validate([
            'name' => ['required'],
            'first_name' => ['required'],
            'phone' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:8'],
            'password_confirmation' => ['required'],
        ], [
            'password.min' => 'Pour des raisons de sécurité, votre mot de passe doit faire :min caractères.'
        ]);

        $utilisateur = Utilisateur::create([
            'nom' => request('name'),
            'prenom' => request('first_name'),
            'telephone' => request('phone'),
            'email' => request('email'),
            'mot_de_passe' => bcrypt(request('password')),
        ]);

        return "Nous avons reçu votre email qui est " . request('email');
    }
}

