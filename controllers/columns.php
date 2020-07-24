<?php
class Columns extends Controller
{

	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$purpleColumn = $this->model->getPurpleColumn();
		$magentaColumn = $this->model->getMagentaColumn();
		$this->view->purpleColumn = $purpleColumn;
		$this->view->magentaColumn = $magentaColumn;
		$this->view->render('columns/index');
	}

	function updatePosition()
	{

		$this->model->updateColumnItemPosition();
	}
}
