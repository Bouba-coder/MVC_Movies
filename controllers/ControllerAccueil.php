<?php
//the controllerAccueil
class controllerAccueil
{
    private $_moviesManager;
    private $_view;

    public function __construct(array $url)
    {
        if(isset($url) && count($url) > 1)
            throw new Exceptions('Page introuvable');
        else
            $this->movies();
    }

    private function movies()
    {
        $this->_moviesManager = new MoviesManager;
        $movies = $this->_moviesManager->getMovie();
        require_once('views/viewAccueil.php');
    }

}