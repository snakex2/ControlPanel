<?php
	
	class Ingrediente extends AppModel
	{
		var $name='Ingrediente';
		var $useTable='ingredientes';
		public $hasAndBelongsToMany = array(
		        'Receta' =>
		            array(
			                'className' => 'Receta',
			                'joinTable' => 'receta_ingredientes',
			                'foreignKey' => 'ingrediente_id',
			                'associationForeignKey' => 'receta_id'
		            	 )
		    );
	}


?>