@extends('layout')

@section('contenu')
<br><br>
    <div class="section">
        <h1 class="title is-1">Mon compte</h1>
    </div>
<div class="row col-md-3">
    <form class="col" action="/modification-mot-de-passe" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="form-control-label" for="password">Nouveau mot de passe</label>
            <div class="control">
                <input class="form-control" type="password" id="password" name="password" required>
            </div>
            @if($errors->has('password'))
                <p class="alert alert-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label class="form-control-label" for="password_confirmation">Mot de passe (confirmation)</label>
            <div class="control">
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            @if($errors->has('password_confirmation'))
                <p class="alert alert-danger">{{ $errors->first('password_confirmation') }}</p>
            @endif
        </div>

        <div class="form-group">
            <div class="control">
                <button class="btn btn-primary pull-right" type="submit">Modifier mon mot de passe</button>
            </div>
        </div>
    </form>
</div>
    <br><br>
@endsection