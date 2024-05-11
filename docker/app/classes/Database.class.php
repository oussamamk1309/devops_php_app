<?php

    class DataBase {

        private $dbtype;
        private $dbhost;
        private $dbname;
        private $dbuser;
        private $dbpwd;
        
        public $cnx = null;
        public function  __construct() {
            $this->dbtype = $_ENV["DB_TYPE"];
            $this->dbhost = $_ENV["DB_HOST"];
            $this->dbname = $_ENV["DB_DATABASE"];
            $this->dbuser = $_ENV["DB_USERNAME"];
            $this->dbpwd = $_ENV["DB_PASSWORD"];
        }

        function connect(){
            try {
                $this->cnx = new PDO($this->dbtype.':host='.$this->dbhost.';dbname='.$this->dbname, $this->dbuser, $this->dbpwd);
            } catch (PDOException $e) {
                return  $e->getMessage();
            }
            return $this->cnx;
        }
    }
?>