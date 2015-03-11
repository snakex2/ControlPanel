<?php
	class MiPaginaController extends AppController
	{
		var $uses= array('Publicacion');//carga los modelos
		function index()
		{
			$arrPublicaciones=$this->Publicacion->find('all');
			// pr($arrPublicaciones);


			$this->set('publicaciones', $arrPublicaciones);
		}
		
	}
?>