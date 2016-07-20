@extends('interface')
@section('content')
<div id="contact" class="container">
    <div class="row">
        <h1 class="col-xs-12">{{$contact[0]->titre}}</h1>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-5">
            @include('contact.renseignement')
        </div>
        <div class="col-xs-12 col-sm-7">
            @include('contact.email')
        </div>
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'ContactController@edit', 'method' => 'get'])}}
                {{Form::submit('Modifier Contact', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop