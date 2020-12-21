<?php
//the controllerAccueil
require_once('views/View.php');
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

       $this->_view = new View('Accueil');
       $this->_view->generate(array('movies' => $movies));
        //require_once('views/viewAccueil.php');
    }

}