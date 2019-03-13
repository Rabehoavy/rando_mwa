@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-1">Liste des randonnées !</h1>

        <ul>
            @foreach($randonnees as $randonnee)
                <li>
                    <a href="/{{ $randonnee->nom }}">{{ $randonnee->nom }}</a> 
                    {{ $randonnee->difficulte }} {{ $randonnee->distance }}
                    {{ $randonnee->duree }}  {{ $randonnee->denivele }}
                    {{ $randonnee->type_trajet }}  {{ $randonnee->date }}
                </li>
            @endforeach
        </ul>
    </div>

@endsection