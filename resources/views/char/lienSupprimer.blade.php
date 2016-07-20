{{Form::open(['action'=>['CharsController@destroy', $char->id], 'method' => 'delete' ], ['style' => 'display:inline-block;'])}}
<a href="javascript:return false;" onclick="if (confirm('Voulez-vous vraiment supprimer cette image?')) this.parentNode.submit();" class="btn btn-lg btn-primary btn-block">Supprimer l'image</a>
{{Form::close()}}