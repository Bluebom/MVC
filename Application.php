<?php
	
	// define('PATH_TO_ROOT','https://testemvc.franklinhenrique.com/');
	define('PATH_TO_ROOT','http://192.168.10.149:8080/AmbienteTeste/mvc/');
	
	class Application
	{
		public function executar(){
			$url = isset($_GET['url']) ? explode('/',$_GET['url'])[0] : 'Home';
			$url = ucfirst($url);
            $page = strtolower($url);
			$url.="Controller";
			if(file_exists('Controllers/'.$url.'.php')){
				$className = "Controllers\\$url";
				$controler = new $className($page);
				$controler->executar();
			}else{
				die("Não existe esse controlador!");
			}
		}
	}
	
?>