<?php 
	class AdministradorController extends AppController
	{
		var $layout = 'administrador';
		var $uses= array('Publicacion','Autor','Receta');//carga los modelos
		function index()
		{
			// $this->layout = 'administrador';//cambia el layout por el que se va a trabajar
		}
		function post()
		{
			// $this->layout = 'administrador';//cambia el layout por el que se va a trabajar
		}
		function save_post()
		{
			$this->Publicacion->create();
			if($this->Publicacion->save($this->data))
			{
				echo json_encode(array('success'=>true));
			}
			else
			{
				echo json_encode(array('success'=>false));
			}
		}
		function list_post()
		{
			$arrPublicaciones=$this->Publicacion->find('all');

			$this->set('publicaciones',$arrPublicaciones);

		}
		function autor()
		{
			
			// $this->layout = 'administrador';//cambia el layout por el que se va a trabajar
		}
		function save_autor()
		{
			
			$this->Autor->create();
			if($this->Autor->save($this->data))
			{
				echo json_encode(array('success'=>true));
			}
			else
			{
				echo json_encode(array('success'=>false));
			}
		}
		function list_autor()
		{
			$arrPublicaciones=$this->Autor->find('all');
			$this->set('autores',$arrPublicaciones);
		}
		function recetas()
		{
			$arrPublicaciones=$this->Receta->find('all',array('conditions' => array('Receta.id !='=>'1') ));
			pr($arrPublicaciones);
			exit;
		}
	}
 ?>