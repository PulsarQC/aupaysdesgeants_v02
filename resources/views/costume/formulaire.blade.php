<?php $errors->setFormat('<span style="color:red;">:message</span>'); ?>

@if($errors->count()>0)
<h3 style="text-align:center;color:red;padding:0 1em;">Il y a des erreurs dans le formulaire!</h3>
@endif

<div class="form-group">
    {{Form::label('titre', 'Titre')}}
    {{Form::text('titre', null, ['class' => 'form-control'])}}{!!$errors->first('titre')!!}
</div>
<div class="form-group">
    {{Form::label('img_url', 'Image')}}
    {{Form::text('img_url', null, ['class' => 'form-control'])}}{!!$errors->first('img_url')!!}
</div>
<div class="form-group">
    {{Form::label('description', 'Description')}}
    {{Form::textarea('description', null, ['class' => 'form-control', 'id' => 'textarea'])}}{!!$errors->first('description')!!}
</div>