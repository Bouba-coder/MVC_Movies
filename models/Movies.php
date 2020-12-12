<?php
//create the object getting to getAllDatas function
//this class get all movies and protect datas

class Movies{
    private $_id;
    private $_title;
    private $_description;
    private $_moviesUrl;
    private $_movieDate;


    //create __construct for hydrate datas after
    public function __construct(array $data){
             //calling hudrate method
            $this->hydrate($data);

    }
    //the hydrate(maj/protect) datas function
    public function hydrate(array $data){

    foreach($data as $key => $value)
    {
            $method = 'set'.ucfirst($key);

            //verification of method existent
            if(method_exists($this, $method){
                $this->method($value);
            }
    }


    }

    //setters/vérification
    public function setId($id)
    {
        $id = (int) $d;
        if($id > 0)
        //{
            $this->_id = $id;
        //}

    }
    public function setTitle($title)
    {
    if(isString($title)){$this->_title = $title;}
    }
    public function setDescription($description)
    {
        if(isString($description)){$this->_description = $description;}
    }
    public function setMoviesUrl()
    {
        if(isString($moviesUrl)){$this->_moviesUrl = $moviesUrl;}
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
        public function getMovieDate()
        {
            return $this->_movieDate;
        }


}