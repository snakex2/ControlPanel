var Publicacion={
	guardar:function()
	{
		var formulario=$("#frmPublicacion");
		var url=formulario.attr('action');
		$.post(url,formulario.serialize(),function(result){
			console.log(result);
		});
	}
}
var Autor={
	guardar:function()
	{
		var formulario=$("#frmAutor");
		var url=formulario.attr('action');
		$.post(url,formulario.serialize(),function(result){
			console.log(result);
		});
	}
}