<?php

class MoviesManager extends Model {

        public function getMovie(){
        return $this->getAllDatas('movie','Movies');
       }
}