@extends('interface')
@section('content')
    <div class="container" id="contact">
        <div class="row">
            @if(Session::has('success'))
                <div class="alert-box success">
                    <h2>
                        {{Session::get('success')}}
                    </h2>
                </div>
            @endif
        </div>
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                @include('images.image')
                <p class="errors">{{$errors->first('img')}}</p>
            </div>
        </div>
        <div class="row">
            @if(Session::has('error'))
                <p>
                    {{Session::get('error')}}
                </p>
            @endif
        </div>
    </div>
@stop