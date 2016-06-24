<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		if(!isset($w_user) && empty($w_user)){
			$this->show('default/home');
		}else{
			$this->redirectToRoute('default_index');

		}
	}

	/**
	 * Page Contact par défaut
	 */
	public function contact()
	{
		$this->show('default/contact');
	}


}
