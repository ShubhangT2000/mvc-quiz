<?php

namespace Controllers;
class HomeController
{
	protected $twig;

	public function __construct()
    	{
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../views') ;
            $this->twig = new \Twig_Environment($loader) ;
        }
    public function get()
    	{
    		if ($_COOKIE['user'])
    		{
    			header("Location: /solve");
    		}
    		else
    		{
    			echo $this->twig->render("home.html");
    		}
    	}
}
