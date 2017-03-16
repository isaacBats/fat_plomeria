<?php 

// namespace Olive\controllers;

use Olive\controllers\Controller;

class Plain extends Controller
{	
	public function home( $req , $res ){		
		

		return $this->renderView($res, 'Plain.home');
	}

}