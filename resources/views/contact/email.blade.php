<ul>
    @foreach($errors->all() as $error)
        <li>
            {{$error}}
        </li>
    @endforeach
</ul>
   

{{Form::open(['class' => 'form', 'method' => 'post', 'action' => 'EmailController@store', 'url' => '/'])}}
    <div class="form-group">
        {{Form::label('Nom, prénom')}}
        {{Form::text('name', null, ['placeholder' => 'Nom', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('Adresse postale')}}
        {{Form::text('code_postal', null, ['placeholder' => 'Code Postal', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('Courriel')}}
        {{Form::text('email', null, ['placeholder' => 'Courriel', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('Téléphone')}}
        {{Form::text('telephone', null, ['placeholder' => 'Téléphone', 'class' => 'form-control'])}}
    </div>
    <div class="form-group">
        {{Form::label('Commentaire')}}
        {{Form::textarea('comment', null, ['placeholder' => 'Votre commentaire...', 'class' => 'form-control'])}}   
    </div>
    <div class="form-group">
        {{Form::submit('Envoyer', ['class' => 'btn btn-primary'])}}
    </div>
{{Form::close()}}