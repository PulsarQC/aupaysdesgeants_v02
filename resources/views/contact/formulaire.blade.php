<?php $errors->setFormat('<span style="color:red;">:message</span>'); ?>

@if($errors->count()>0)
<h3 style="text-align:center;color:red;padding:0 1em;">Il y a des erreurs dans le formulaire!</h3>
@endif

<div class="form-group">
    {{Form::label('titre', 'Le titre')}}
    {{Form::text('titre', null, ['class' => 'form-control'])}}{!!$errors->first('titre')!!}
</div>
<div class="form-group">
    {{Form::label('courrielgeneral', 'Courriel d\'information')}}
    {{Form::text('courrielgeneral', null, ['class' => 'form-control'])}}{!!$errors->first('courrielgeneral')!!}
</div>
<div class="form-group">
    {{Form::label('courrielguy', 'Courriel de Guy')}}
    {{Form::text('courrielguy', null, ['class' => 'form-control'])}}{!!$errors->first('courrielguy')!!}
</div>
<div class="form-group">
    {{Form::label('courrieldenise', 'Courriel de Denise')}}
    {{Form::text('courrieldenise', null, ['class' => 'form-control'])}}{!!$errors->first('courrieldenise')!!}
</div>
<div class="form-group">
    {{Form::label('telephone', 'Téléphone')}}
    {{Form::text('telephone', null, ['class' => 'form-control'])}}{!!$errors->first('telephone')!!}
</div>
<div class="form-group">
    {{Form::label('sansfrais', 'Téléphone Sans Frais')}}
    {{Form::text('sansfrais', null, ['class' => 'form-control'])}}{!!$errors->first('sansfrais')!!}
</div>

