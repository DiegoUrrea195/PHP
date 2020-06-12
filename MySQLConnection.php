<?php 

class MySQLConnection {
 
    private $host;    
    private $dbuser;
    private $dbpassword;
    private $dbname;

    public function __construct($host, $dbuser, $dbpassword, $dbname) {
        $this->host = $host;
        $this->dbuser = $dbuser;
        $this->dbpassword = $dbpassword;
        $this->dbname = $dbname;
    }

    public function getConnection() {
        return  new mysqli($this->host, $this->dbuser, $this->dbpassword, $this->dbname);
    }

    public function __destruct() {
        
    }

    

}


?>