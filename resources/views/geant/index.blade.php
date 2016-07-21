@extends('interface')
@section('content')
<div id="geant" class="container">
    <div class="row">
        <h1 class="col-xs-12">Géants</h1>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <nav class="nav">
                <ul>
                    @forelse($geants as $geant)
                        <li class="col-xs-12 col-sm-3 image">
                            <a href="{{url('geant/'.$geant['id'])}}">
                                {{HTML::image( 'uploads/'.$geant['img_url'], $geant['titre'], ['class' => 'img-responsive img-circle img-geant'])}} 
                            </a>
                        </li>
                    @empty($geant >= 0)
                        <li>Il n'y a aucune photo de disponible.</li>
                    @endforelse
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'GeantsController@create', 'method' => 'get'])}}
                {{Form::submit('Ajouter un géant', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop