<?php

    class DataBase{
        private $dbHost = 'localhost';
        private $dbUser = 'root';
        private $dbPwd = '';
        private $dbName = '';

        //connection
        public function connectionDb(){
            $mysqlConnect = "mysql:host=$this->dbHost;dbname=$this->dbName";
            $dbConnection = new PDO($mysqlConnect, $this->dbUser, $this->dbPwd);
            $dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXECPTION);

            return $dbConnection;
        }
    }