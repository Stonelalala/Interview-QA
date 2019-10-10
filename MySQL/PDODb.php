<?php


namespace MySQL;


class PDODb implements Db
{
    private $host;
    private $port;
    private $username;
    private $password;
    private $db;
    private $charset;
    private $database;
    public function __construct($host, $port, $username, $password, $charset, $database)
    {
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password = $password;
        $this->charset = $charset;
        $this->database = $database;
        $this->connect();
    }
    public function connect()
    {
        // TODO: Implement connect() method.
        try{
            $this->db = new \PDO("mysql:dbname=$this->database;host=$this->host:$this->port",$this->username, $this->password);
        } catch (\PDOException $exception){
            die($exception->getMessage());
        }
    }

    public function query($sql)
    {
       return $this->db->query($sql);

    }
    public function exec($sql)
    {
        // TODO: Implement exec() method.
    }
    public function close()
    {
        // TODO: Implement close() method.
        $this->db = null;
    }
}