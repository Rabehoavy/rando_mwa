@extends('layout')

@section('contenu')
    <div class="section">
        <h1 class="title is-1 level">
            <div class="level-left">
                <div class="level-item">
                    {{ $randonnee->nom }}
                </div>

                @auth
                    <form class="level-item" action="/{{ $randonnee->nom }}/suivis" method="post">
                        {{ csrf_field() }}
                        @if (auth()->user()->suit($randonnee))
                            {{ method_field('delete') }}
                        @endif
                        
                        <button class="button is-link" type="submit">
                            @if (auth()->user()->suit($randonnee))
                                Ne plus participer
                            @else
                                Participer
                            @endif
                        </button>
                    </form>
                @endauth
            </div>
        </h1>

        
@endsection