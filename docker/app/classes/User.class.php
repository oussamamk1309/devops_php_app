<?php

    class User{
        private $cnx;
        public function  __construct(){
            $db=new DataBase;
            $this->cnx=$db->connect();
        }
        /*---- Read Functions */
        public function getAll(){
            try {
                $req = 'SELECT * FROM users WHERE deleted_at IS NULL ORDER BY id DESC';
                $result = $this->cnx->prepare($req);
                $result->execute();
                return $result;
            } catch (PDOException $ex) {
                echo $ex->getMessage();
            }
        }
    }
?>