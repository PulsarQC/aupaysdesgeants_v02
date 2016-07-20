@extends('interface')
@section('content')
<div id="char" class="container">
    <div class="row">
        <h1 class="col-xs-12">Chars Allégoriques</h1>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
           <nav class="nav">
               <ul>
                   @forelse($chars as $char)
                    <li class="col-xs-12 col-sm-3 image">
                        <a href="{{url('char/'.$char['id'])}}">
                            {{HTML::image('uploads/'.$char['img_url'] , $char['titre'], ['class' => 'img-responsive img-circle img-char'])}}
                        </a>
                    </li>
                    @empty($char >= 0)
                        <li>Il n'y a aucune photo de disponible.</li>
                    @endforelse
               </ul>
           </nav>
        </div>
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'CharsController@create', 'method' => 'get'])}}
                {{Form::submit('Ajouter un char', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop