<?php
//create the object getting to getAllDatas function
//this class get all movies and protect datas

class Movies
{
     private $_id;
     private $_title;
     private $_description;
     private $_moviesUrl;
     private $_movieDate;


     //create __construct for hydrate datas after
     public function __construct(array $data)
     {
              //calling hydrate method
             $this->hydrate($data);

     }

     //the hydrate(maj/protect) datas
     public function hydrate(array $data)
     {

                 foreach($data as $key => $value)
                 {
                    $method ='set'.ucfirst($key);
                    if(method_exists($this, $method))
                        $this->$method($value);

                 }

     }

     //setters/vérification
     public function setId($id)
     {
         $id = (int) $id;
         if($id > 0)
         {
             $this->_id = $id;
         }

     }
     public function setTitle($title)
     {
         if(is_string($title))
         {
             $this->_title = $title;
         }
     }
     public function setDescription($description)
     {
         if(is_string($description))
         {
             $this->_description = $description;
         }
     }
     public function setMoviesUrl($moviesUrl)
     {
         if(is_string($moviesUrl))
         {
             $this->_moviesUrl = $moviesUrl;
         }
     }
     public function setMovieDate($date)
     {
         $this->_date = $date;
     }

     //getters
     public function getId()
     {
         return $this->_id;
     }
     public function getTitle()
     {
         return $this->_title;
     }
     public function getDescription()
     {
         return $this->_description;
     }
     public function getMoviesUrl()
     {
        return $this->_moviesUrl;
     }
     public function getMoviesDate()
     {
        return $this->_movieDate;
     }
     ////////////


////////////
}