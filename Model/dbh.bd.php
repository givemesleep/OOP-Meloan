<?php 

class DB_Connection {

    private $usrNames = "husto";
    private $usrPass = "0730";
    protected function conn(){
        try{
            $dsn = "mysql:host=localhost;dbname=llampcosys";
            $connect = new PDO($dsn, $this->usrNames, $this->usrPass);
            return $connect;
        }catch(PDOException $e){
            echo "Connection Failed " . $e->getMessage();
        }
    }

}


?>