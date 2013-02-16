<?php
namespace controller;
use core;

class Index extends core\Controller
{
	public function index() {
		$model = $this->load()->model( 'model\Person', array( "name" => "taner" ) );
		$this->load()->view( "header" );
		$this->load()->view( "index/index", $model->getImages() );
		$this->load()->view( "footer" );
	}
}
