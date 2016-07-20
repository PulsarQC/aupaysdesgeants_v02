@extends('interface')
@section('content')
<div id="char" class="container">
   <div class="row">
        <div class="col-xs-12">
           <h1>
               Chars Allégoriques
           </h1>          
        </div>
   </div>
   <div class="row">
       <div class="col-xs-10 col-xs-offset-1 contenu">
           <figure>
               <img src="{{asset('uploads/'.$char['img_url'])}}" alt="{{$char['img_url']}}" class="img-responsive img-show">
           </figure>
       </div>
   </div>
   <div class="row">
        <div class="col-xs-10 col-xs-offset-1 contenu">
            <h2>
                {{$char['titre']}}
            </h2>
            <p>
                {{$char['description']}}
            </p>
        </div>
   </div>
   <div class="row">
       @if(Auth::check())
       <div class="modification">
            {{Form::open(['action' => ['CharsController@edit', $char], 'method' => 'get'])}}
                {{Form::submit('Modifier le char', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
            @include('char.lienSupprimer')
       </div>
       @endif
   </div>
</div>
@stop