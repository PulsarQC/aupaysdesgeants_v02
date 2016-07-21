@extends('interface')
@section('content')
<div id="costume" class="container">
    <div class="row">
        <h1 class="col-xs-12">Costumes</h1>
    </div>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <nav class="nav">
                <ul>
                    @forelse($costumes as $costume)
                        <li class="col-xs-12 col-sm-3 image">
                            <a href="{{url('costume/'.$costume['id'])}}">
                                {{HTML::image( 'uploads/'.$costume['img_url'], $costume['titre'], ['class' => 'img-responsive img-circle img-costume'])}}
                            </a>
                        </li>
                    @empty($costume >= 0)
                        <p>Il n'y a aucune photo de disponible.</p>
                    @endforelse
                </ul>
            </nav>
        </div>
    </div>
    <div class="row">
        @if(Auth::check())
        <div class="modification">
            {{Form::open(['action' => 'CostumesController@create', 'method' => 'get'])}}
                {{Form::submit('Ajouter un costume', ['class' => 'btn btn-primary btn-lg btn-block'])}}
            {{Form::close()}}
        </div>
        @endif
    </div>
</div>
@stop