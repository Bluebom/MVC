<?php
	namespace Controllers;
	class Processa7Controller extends Controller			
	{
		public function __construct($page){
			$this->view = new \Views\MainView("$page");
		}
		public function executar(){
			$this->view->render(array('titulo'=>'Home'));
		}
	}
?>