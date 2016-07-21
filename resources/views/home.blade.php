@extends('interface')

@section('content')
<div class="container" id="contact">
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Connection</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                {{HTML::linkAction('AccueilController@index', 'Accueil', [], ['class' => 'btn btn-primary btn-block btn-lg'])}}
            </div>
        </div>
    </div>
</div>
@endsection
