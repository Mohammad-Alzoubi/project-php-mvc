<?php

namespace Core;

use PDO;

class Database
{
    public $connection;
    public $statement;

    public function __construct($config, $username = 'root', $password = 'root')
    {
//        use this:
//        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};user=root;password=root;";
//        Or this:
        $dsn = "mysql:". http_build_query($config, '', ';');

        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $params = [])
    {
        $this->statement = $this->connection->prepare($query);
        $this->statement->execute($params);

        return $this;
    }

    public function get()
    {
        return $this->statement->fetchAll();
    }

    public function find()
    {
        return $this->statement->fetch();
    }

    public function findOrFail()
    {
        $result = $this->find();

        if (!$result)
        {
            abort();
        }

        return $result;
    }



}


//OR use this
/*
class Database {
    // DB Params
    private $host     = 'localhost';
    private $db_name  = 'myapp';
    private $username = 'root';
    private $password = 'root';
    private $conn;

    //DB Connect
    public function connect(){
        // $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e){
            echo 'Connection Error: '. $e->getMessage();
        }
        return $this->conn;
    }
}

// check database connect

 $connec = new Database();
 $connec->connect();
*/