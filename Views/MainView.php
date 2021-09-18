<?php
	namespace Views;

    define('PATH_TO_PAGES', PATH_TO_ROOT.'Views/pages/');
	define('PATH_TO_ASSETS',PATH_TO_ROOT.'Views/pages/assets/');

	class MainView
	{

		private $fileName;
		private $header;
		private $footer;

		const titulo = 'Projeto MVC';
		const menuItems = array('Home','Processa','Processa2','Processa3','Processa4','Processa7', 'Processa8');

		public function __construct($fileName,$header = 'header',$footer = 'footer'){
			$this->fileName = $fileName;
			$this->header = $header;
			$this->footer = $footer;
		}
		
		public function render($arr = []){
			include('pages/templates/'.$this->header.'.php');
			include('pages/'.$this->fileName.'.php');
			include('pages/templates/'.$this->footer.'.php');
		}
	}

?>