<?php $errors->setFormat('<span style="color:red;">:message</span>'); ?>

@if($errors->count()>0)
<h3 style="text-align:center;color:red;padding:0 1em;">Il y a des erreurs dans le formulaire!</h3>
@endif

<div class="form-group">
    {{Form::label('titre', 'Titre')}}
    {{Form::text('titre', null, ['class' => 'form-control'])}}{!!$errors->first('titre')!!}
</div>
<div class="form-group">
    {{Form::label('titre_img1', 'Titre de l\'image 1')}}
    {{Form::text('titre_img1', null, ['class' => 'form-control'])}}{!!$errors->first('titre_img1')!!}
</div>
<div class="form-group">
    {{Form::label('img1', 'Image 1 du carousel')}}
    {{Form::text('img1', null, ['class' => 'form-control'])}}{!!$errors->first('img1')!!}
</div>
<div class="form-group">
    {{Form::label('titre_img2', 'Titre de l\'image 2')}}
    {{Form::text('titre_img2', null, ['class' => 'form-control'])}}{!!$errors->first('titre_img2')!!}
</div>
<div class="form-group">
    {{Form::label('img2', 'Image 2 du carousel')}}
    {{Form::text('img2', null, ['class' => 'form-control'])}}{!!$errors->first('img2')!!}
</div>
<div class="form-group">
    {{Form::label('titre_img3', 'Titre de l\'image 3')}}
    {{Form::text('titre_img3', null, ['class' => 'form-control'])}}{!!$errors->first('titre_img3')!!}
</div>
<div class="form-group">
    {{Form::label('img3', 'Image 3 du carousel')}}
    {{Form::text('img3', null, ['class' => 'form-control'])}}{!!$errors->first('img3')!!}
</div>
<div class="form-group">
    {{Form::label('titre_img4', 'Titre de l\'image 4')}}
    {{Form::text('titre_img4', null, ['class' => 'form-control'])}}{!!$errors->first('titre_img4')!!}
</div>
<div class="form-group">
    {{Form::label('img4', 'Image 4 du carousel')}}
    {{Form::text('img4', null, ['class' => 'form-control'])}}{!!$errors->first('img4')!!}
</div>
<div class="form-group">
    {{Form::label('titre_img5', 'Titre de l\'image 5')}}
    {{Form::text('titre_img5', null, ['class' => 'form-control'])}}{!!$errors->first('titre_img5')!!}
</div>
<div class="form-group">
    {{Form::label('img5', 'Image 5 du carousel')}}
    {{Form::text('img5', null, ['class' => 'form-control'])}}{!!$errors->first('img5')!!}
</div>
<div class="form-group">
    {{Form::label('titre_img6', 'Titre de l\'image 6')}}
    {{Form::text('titre_img6', null, ['class' => 'form-control'])}}{!!$errors->first('titre_img6')!!}
</div>
<div class="form-group">
    {{Form::label('img6', 'Image 6 du carousel')}}
    {{Form::text('img6', null, ['class' => 'form-control'])}}{!!$errors->first('img6')!!}
</div>

