<?php 
class Database extends PDO
{
 
	
	private $dbname = "prueba";
	private $host = "localhost";
	private $user = "postgres";
	private $pass = 'root';
	private $port = 5432;
    //instance
	private $dbh;
 
	//connect with postgresql and pdo
	public function __construct()
	{
	    try {
	        $this->dbh = parent::__construct("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname;user=$this->user;password=$this->pass");
	    }
        catch(PDOException $e)
        {
	        echo  $e->getMessage();
	    }
 
	}
 
	//función para cerrar una conexión pdo
	public function close()
	{
    	$this->dbh = null;
	}
 
}
