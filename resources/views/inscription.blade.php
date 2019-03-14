@extends('layout')

@section('contenu')
<br><br>
<h1>Inscription</h1>
<div class="row col-md-3">
<form action="/inscription" method="post" class="col">
{{ csrf_field() }}

    <div class="form-group">
        <label class="form-control-label" for="name">Nom</label>
        <div class="control">
            <input class="form-control" type="text" name="name" id="name" placeholder="Votre nom" value="{{ old('name') }}" required>
        </div>
        @if($errors->has('name'))
            <p class="alert alert-danger">{{ $errors->first('name') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label" for="first_name">Prénom</label>
        <div class="control">
            <input class="form-control" type="text" name="first_name"  id="first_name" placeholder="Votre prénom" value="{{ old('first_name') }}" required>
        </div>
        @if($errors->has('first_name'))
            <p class="alert alert-danger">{{ $errors->first('first_name') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label" for="phone">Numéro de téléphone</label>
        <div class="control">
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Votre numéro de téléphone" value="{{ old('phone') }}" required>
        </div>
        @if($errors->has('phone'))
            <p class="alert alert-danger">{{ $errors->first('phone') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label" for="email">Email</label>
        <div class="control">
            <input class="form-control" type="email" name="email" id="email" placeholder="Votre Email" value="{{ old('email') }}" required>
        </div>
        @if($errors->has('email'))
            <p class="alert alert-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label" for="password">Mot de passe</label>
        <div class="control">
            <input class="form-control" type="password" name="password" id="password" placeholder="Votre mot de passe" required>
        </div>
        @if($errors->has('password'))
            <p class="alert alert-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label class="form-control-label" for="password_confirmation">Mot de passe (confirmation)</label>
        <div class="control">
            <input class="form-control" type="password" placeholder="Confirmez votre mot de passe" name="password_confirmation" id="password_confirmation" required>
        </div>
        @if($errors->has('password_confirmation'))
            <p class="alert alert-danger">{{ $errors->first('password_confirmation') }}</p>
        @endif
    </div>

    <div class="form-group">
        <div class="control">
            <button class="btn btn-primary pull-right" type="submit">M'inscrire</button>
        </div>
    </div>
</form>
</div>
<br><br>
@endsection