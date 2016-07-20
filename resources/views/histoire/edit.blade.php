@extends('interface')
@section('content')
<div class="container" id="contact">
    <div class="row">
        <h1 class="col-xs-12">
            Modifier l'historique
        </h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2">
            {{Form::model($histoire, ['action' => ['HistoireController@update', $histoire['id']], 'method' => 'put'])}}
            @include('histoire.formulaire')
            <div id="button">{{Form::submit('Envoyer', ['class' => 'btn btn-primary btn-block btn-lg'])}}</div>
            {{Form::close()}}
        </div>
    </div>
</div>
@stop