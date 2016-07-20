<script src="https://use.fontawesome.com/c142551724.js"></script>
<script src="{{url('lib/jquery-1.11.1.min.js')}}"></script>
<script src="{{url('lib/bootstrap-3.3.6/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('lib/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/tinymce/js/tiny_mce/jquery.tinymce.min.js')}}"></script>
<script type="text/javascript" src="{{url('js/tinymce/js/tiny_mce/tinymce.min.js')}}"></script>
<script type="text/javascript">
tinyMCE.init({
	// General options
    selector: '#textarea',
	theme : "advanced",
	plugins : "safari,spellchecker,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,imagemanager,filemanager",
	// Example content CSS (should be your site CSS)
	content_css : "{{url('css/style.css')}}",
});
</script>