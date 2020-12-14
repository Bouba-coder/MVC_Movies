<?php
//Class for the bdd connexion and fetching datas

abstract class Model
{

        private static $_bdd;

        //function bdd connexion
        private static function setBdd()
        {
            self::$_bdd = new PDO('mysql:host=localhost;dbname=movies;port=3308;charset=utf8','root','');
            self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //Bdd getter
        protected function getBdd()
        {
            if(self::$_bdd == null)
            {
                self::setBdd();
                return self::$_bdd;
            }
        }

        protected function getAllDatas($table, $obj)
        {
        //init var for datas
        $var = [];
        $req = $this->getBdd()->prepare('SELECT * FROM '.$table.' ORDER BY id DESC');
        $req->execute();
        //loop for fetch datas
        while($data = $req->fetch(PDO::FETCH_ASSOC))
        {
          $var[]= new $obj($data);
        }
        return $var;
        $req->closeCursor();
        }

}