@extends('interface')
@section('content')
<div id="costume" class="container">
   <div class="row">
        <div class="col-xs-12">
           <h1>
               Costumes
           </h1>          
        </div>
   </div>
   <div class="row">
       <div class="col-xs-10 col-xs-offset-1 contenu">
           <figure>
               <img src="{{asset('uploads/'.$costume['img_url'])}}" alt="{{$costume['titre']}}" class="img-responsive img-show">
           </figure>
       </div>
   </div>
   <div class="row">
        <div class="col-xs-10 col-xs-offset-1 contenu">
            <h2>
                {{$costume['titre']}}
            </h2>
            <p>
               {{$costume['description']}}
            </p>
        </div>
   </div>
   <div class="row">
       @if(Auth::check())
       <div class="modification">
            {{Form::open(['action' => ['CostumesController@edit', $costume], 'method' => 'get'])}}
                {{Form::submit('Modifier le costume', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
            @include('costume.lienSupprimer')
       </div>
       @endif
   </div>
</div>
@stop