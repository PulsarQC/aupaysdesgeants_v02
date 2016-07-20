<h1>
    Importer des images
</h1>

{{Form::open(array('url'=>'/images','method'=>'POST', 'files'=>true))}}
    @include('images.formulaire')
    {{Form::submit('Importer', ['class' => 'btn btn-primary btn-block btn-lg'])}}
{{Form::close()}}