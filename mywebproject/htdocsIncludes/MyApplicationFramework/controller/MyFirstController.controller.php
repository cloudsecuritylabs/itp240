<?php

class MyFirstController
{
	private $model;

	public function __construct($model){

		$this->model = $model;

	}


	public function clicked(){

		$this->model->string = "Updated Data, Thanks to MVC and PHP";
	}




}
?>