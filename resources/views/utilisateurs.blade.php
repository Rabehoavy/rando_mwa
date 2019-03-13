@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-1">Liste des membres</h1>

        <ul>
            @foreach($utilisateurs as $utilisateur)
                <li>
                    <a href="/{{ $utilisateur->email }}">{{ $utilisateur->email }}</a>
                </li>
            @endforeach
        </ul>
    </div>

@endsection