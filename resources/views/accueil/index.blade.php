@extends('interface')
@section('content')
<div id="accueil" class="container">
    <div class="row haut">
        @include('accueil.titre')
    </div>
    <div class="row milieu">
        @include('accueil.carousel')
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'AccueilController@edit', 'method' => 'get'])}}
                {{Form::submit('Modifier Accueil', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop
