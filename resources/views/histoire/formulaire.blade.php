<?php $errors->setFormat('<span style="color:red;">:message</span>'); ?>

@if($errors->count()>0)
<h3 style="text-align:center;color:red;padding:0 1em;">Il y a des erreurs dans le formulaire!</h3>
@endif

<div class="form-group">
    {{Form::label('titre_histoire', 'Le titre de l\'histoire')}}
    {{Form::text('titre_histoire', null, ['class' => 'form-control'])}}{!!$errors->first('titre_histoire')!!}
</div>
<div class="form-group">
    {{Form::label('titre_realisation', 'Le titre des réalisations')}}
    {{Form::text('titre_realisation', null, ['class' => 'form-control'])}}{!!$errors->first('titre_realisation')!!}
</div>
<div class="form-group">
    {{Form::label('titre_service', 'Le titre des services')}}
    {{Form::text('titre_service', null, ['class' => 'form-control'])}}{!!$errors->first('titre_service')!!}
</div>
<div class="form-group">
    {{Form::label('titre_produit', 'Le titre des produits')}}
    {{Form::text('titre_produit', null, ['class' => 'form-control'])}}{!!$errors->first('titre_produit')!!}
</div>
<div class="form-group">
    {{Form::label('img_url_guy', 'Image du profil de Guy')}}
    {{Form::text('img_url_guy', null, ['class' => 'form-control'])}}{!!$errors->first('img_url_guy')!!}
</div>
<div class="form-group">
    {{Form::label('img_url_denise', 'Image du profil de Denise')}}
    {{Form::text('img_url_denise', null, ['class' => 'form-control'])}}{!!$errors->first('img_url_denise')!!}
</div>
<div class="form-group">
    {{Form::label('description_histoire', 'Description de l\'histoire')}}
    {{Form::textarea('description_histoire', null, ['class' => 'form-control', 'id' => 'descrip-histoire'])}}{!!$errors->first('description_histoire')!!}
</div>
<div class="form-group">
    {{Form::label('description_guy', 'Description de Guy')}}
    {{Form::textarea('description_guy', null, ['class' => 'form-control', 'id' => 'descrip-guy'])}}{!!$errors->first('description_guy')!!}
</div>
<div class="form-group">
    {{Form::label('description_denise', 'Description de Denise')}}
    {{Form::textarea('description_denise', null, ['class' => 'form-control', 'id' => 'descrip-denise'])}}{!!$errors->first('description_denise')!!}
</div>
<div class="form-group">
    {{Form::label('description_service', 'Description des services')}}
    {{Form::textarea('description_service', null, ['class' => 'form-control', 'id' => 'descrip-service'])}}{!!$errors->first('description_service')!!}
</div>
<div class="form-group">
    {{Form::label('description_produit', 'Description des produits')}}
    {{Form::textarea('description_produit', null, ['class' => 'form-control', 'id' => 'descrip-produit'])}}{!!$errors->first('description_produit')!!}
</div>
<div class="form-group">
    {{Form::label('description_realisation', 'Description des réalisations')}}
    {{Form::textarea('description_realisation', null, ['class' => 'form-control', 'id' => 'descrip-real'])}}{!!$errors->first('description_realisation')!!}
</div>
