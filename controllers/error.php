<?php

class Errors extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->view->msg = 'Nem található ilyen nevű fájl!';
		$this->view->render('error/index');
	}
}
