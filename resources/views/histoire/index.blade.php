@extends('interface')
@section('content')
<div id="histoire" class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            @include('histoire.histoire')
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-5 col-sm-offset-1 droite">
            @include('histoire.guy')
        </div>
        <div class="col-xs-12 col-sm-5 gauche">
            @include('histoire.denise')
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-6 droite">
            @include('histoire.service')
        </div>
        <div class="col-xs-12 col-sm-6 gauche">
            @include('histoire.produit')
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            @include('histoire.realisation')
        </div>
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'HistoireController@edit', 'method' => 'get'])}}
                {{Form::submit('Modifier Histoire', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop