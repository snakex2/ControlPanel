<?php 
	/**
	* 
	*/
	class UsersController extends AppController
	{
		var $layout = 'administrador';
		var $components = array( 'Auth');
		function login() 
		{
		    //Autentificación Magica
		}

		function logout() 
		{
		    //limpio por ahora.
		}


	    function beforeFilter() {
	        //Configure AuthComponent
	        $this->Auth->authorize = 'actions';
	        $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
	        $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'add');
	    }

	}
 ?>