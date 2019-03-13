@extends('layout')

@section('contenu')
<br><br>
    <div class="section">
        <h1 class="title is-1">Créer une randonnée</h1>
    </div>
<div class="row col-md-3">
    @if (auth()->check())
        <form action="/creer-randonnee" method="post" class="col">
{{ csrf_field() }}

    <div class="form-group">
        <label class="form-control-label">Nom</label>
        <div class="control">
            <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>
        @if($errors->has('name'))
            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label">Difficulté</label>
        <div class="control">
            <input class="form-control" type="text" name="difficulty" value="{{ old('difficulty') }}">
        </div>
        @if($errors->has('difficulty'))
            <p class="alert alert-danger">{{ $errors->first('difficulty') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label">Distance</label>
        <div class="control">
            <input class="form-control" type="text" name="distance" value="{{ old('distance') }}">
        </div>
        @if($errors->has('distance'))
            <p class="alert alert-danger">{{ $errors->first('distance') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label">Durée</label>
        <div class="control">
            <input class="form-control" type="text" name="duration" value="{{ old('duration') }}">
        </div>
        @if($errors->has('duration'))
            <p class="alert alert-danger">{{ $errors->first('duration') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label">Dénivelé</label>
        <div class="control">
            <input class="form-control" type="text" name="height_difference">
        </div>
        @if($errors->has('height_difference'))
            <p class="alert alert-danger">{{ $errors->first('height_difference') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label">Type de trajet</label>
        <div class="control">
            <input class="form-control" type="text" name="type_trajet">
        </div>
        @if($errors->has('type_trajet'))
            <p class="alert alert-danger">{{ $errors->first('type_trajet') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label">Date</label>
        <div class="control">
            <input class="form-control" type="text" name="date">
        </div>
        @if($errors->has('date'))
            <p class="alert alert-danger">{{ $errors->first('date') }}</p>
        @endif
    </div>

    <div class="form-group">
        <div class="control">
            <button class="btn btn-primary pull-right" type="submit">Créer</button>
        </div>
    </div>
</form>

        @endif

    </div>
</div>
<br><br>
@endsection