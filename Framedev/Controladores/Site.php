<?php
class Site extends Controlador
{
    public function index()
    {
		require SITE.'plantilla/index.php';
    }
	public function page($folder,$file){
		require SITE.$folder.'/'.$file.'.php';
	}
}
?>