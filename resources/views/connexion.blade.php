@extends('layout')

@section('contenu')
<br><br>
<div class="row col-md-3">
    <form action="/connexion" method="post" class="col">
        {{ csrf_field() }}

        <div class="form-group">
            <label class="form-control-label">Email</label>
            <div class="control">
                <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Votre Email">
            </div>
            @if($errors->has('email'))
                <p class="alert alert-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>

        <div class="form-group">
            <label class="form-control-label">Mot de passe</label>
            <div class="control">
                <input class="form-control" type="password" name="password" placeholder="Votre mot de passe">
            </div>
            @if($errors->has('password'))
                <p class="alert alert-danger">{{ $errors->first('password') }}</p>
            @endif
        </div>

        <div class="form-group">
            <div class="control">
                <button class="btn btn-primary pull-right" type="submit">Connexion</button>
            </div>
        </div>
    </form>
</div>
    <br><br>
@endsection