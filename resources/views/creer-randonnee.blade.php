@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-1">Créer une randonnée</h1>
    </div>

    @if (auth()->check())
        <form action="/randonnees" method="post" class="section">
{{ csrf_field() }}

    <div class="field">
        <label class="label">Nom</label>
        <div class="control">
            <input class="input" type="text" name="name" value="{{ old('name') }}">
        </div>
        @if($errors->has('name'))
            <p class="help is-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Difficulté</label>
        <div class="control">
            <input class="input" type="text" name="difficulty" value="{{ old('difficulty') }}">
        </div>
        @if($errors->has('difficulty'))
            <p class="help is-danger">{{ $errors->first('difficulty') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Distance</label>
        <div class="control">
            <input class="input" type="text" name="distance" value="{{ old('distance') }}">
        </div>
        @if($errors->has('distance'))
            <p class="help is-danger">{{ $errors->first('distance') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Durée</label>
        <div class="control">
            <input class="input" type="text" name="duration" value="{{ old('duration') }}">
        </div>
        @if($errors->has('duration'))
            <p class="help is-danger">{{ $errors->first('duration') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Dénivelé</label>
        <div class="control">
            <input class="input" type="text" name="height_difference">
        </div>
        @if($errors->has('height_difference'))
            <p class="help is-danger">{{ $errors->first('height_difference') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Type de trajet</label>
        <div class="control">
            <input class="input" type="text" name="type_trajet">
        </div>
        @if($errors->has('type_trajet'))
            <p class="help is-danger">{{ $errors->first('type_trajet') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Date</label>
        <div class="control">
            <input class="input" type="text" name="date">
        </div>
        @if($errors->has('date'))
            <p class="help is-danger">{{ $errors->first('date') }}</p>
        @endif
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">Créer</button>
        </div>
    </div>
</form>

        @endif

    </div>

@endsection