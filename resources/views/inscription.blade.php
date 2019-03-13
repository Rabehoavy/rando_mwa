@extends('layout')

@section('contenu')
<form action="/inscription" method="post" class="section">
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
        <label class="label">Prénom</label>
        <div class="control">
            <input class="input" type="text" name="first_name" value="{{ old('first_name') }}">
        </div>
        @if($errors->has('first_name'))
            <p class="help is-danger">{{ $errors->first('first_name') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Téléphone</label>
        <div class="control">
            <input class="input" type="text" name="phone" value="{{ old('phone') }}">
        </div>
        @if($errors->has('phone'))
            <p class="help is-danger">{{ $errors->first('phone') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Adresse e-mail</label>
        <div class="control">
            <input class="input" type="email" name="email" value="{{ old('email') }}">
        </div>
        @if($errors->has('email'))
            <p class="help is-danger">{{ $errors->first('email') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Mot de passe</label>
        <div class="control">
            <input class="input" type="password" name="password">
        </div>
        @if($errors->has('password'))
            <p class="help is-danger">{{ $errors->first('password') }}</p>
        @endif
    </div>

    <div class="field">
        <label class="label">Mot de passe (confirmation)</label>
        <div class="control">
            <input class="input" type="password" name="password_confirmation">
        </div>
        @if($errors->has('password_confirmation'))
            <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
        @endif
    </div>

    <div class="field">
        <div class="control">
            <button class="button is-link" type="submit">M'inscrire</button>
        </div>
    </div>
</form>
@endsection