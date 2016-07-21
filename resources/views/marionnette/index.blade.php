@extends('interface')
@section('content')
<div id="marionnette" class="container">
   <div class="row">
       <h1 class="col-xs-12">Marionnettes</h1>
   </div>
   <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <nav class="nav">
                <ul>
                    @forelse($marionnettes as $marionnette)
                        <li class="col-xs-12 col-sm-3 image">
                            <a href="{{url('marionnette/'.$marionnette['id'])}}">
                                {{HTML::image( 'uploads/'.$marionnette['img_url'], $marionnette['titre'], ['class' => 'img-responsive img-circle img-marionnette'])}}
                        </li>
                    @empty($marionnette >= 0)
                        <li>Il n'y a aucune photo de disponible.</li>
                    @endforelse
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'MarionnettesController@create', 'method' => 'get'])}}
                {{Form::submit('Ajouter une Marionnette', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop