@extends('interface')
@section('content')
<div id="geant" class="container">
   <div class="row">
        <div class="col-xs-12">
           <h1>
               Géants
           </h1>          
        </div>
   </div>
   <div class="row">
       <div class="col-xs-10 col-xs-offset-1 contenu">
           <figure>
               <img src="{{asset('uploads/'.$geant['img_url'])}}" alt="{{$geant['titre']}}" class="img-responsive img-show">
           </figure>
       </div>
   </div>
   <div class="row">
        <div class="col-xs-10 col-xs-offset-1 contenu">
            <h2>
                {{$geant['titre']}}
            </h2>
            <p>
               {{$geant['description']}}
            </p>
        </div>
   </div>
   <div class="row">
       @if(Auth::check())
       <div class="modification">
            {{Form::open(['action' => ['GeantsController@edit', $geant], 'method' => 'get'])}}
                {{Form::submit('Modifier le geant', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
            @include('geant.lienSupprimer')
       </div>
       @endif
   </div>
</div>
@stop