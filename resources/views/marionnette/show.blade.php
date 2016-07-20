@extends('interface')
@section('content')
<div id="marionnette" class="container">
    <div class="row">
        <div class="col-xs-12">
           <h1>
               Marionnettes
           </h1>          
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 contenu">
           <figure>
               <img src="{{asset('uploads/'.$marionnette['img_url'])}}" alt="{{$marionnette['titre']}}" class="img-responsive img-show">
           </figure>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 contenu">
            <h2>
                {{$marionnette['titre']}}
            </h2>
            <p>
                {{$marionnette['description']}}
            </p>
        </div>
    </div>
   <div class="row">
       @if(Auth::check())
       <div class="modification">
            {{Form::open(['action' => ['MarionnettesController@edit', $marionnette], 'method' => 'get'])}}
                {{Form::submit('Modifier la marionnette', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
            @include('marionnette.lienSupprimer')
       </div>
       @endif
   </div>
</div>
@stop