<?php


namespace MySQL;
use mysqli;

class MySQLiDb implements Db
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
        try {
            $this->db = new mysqli($this->host, $this->username,  $this->password,$this->database,$this->port);
            if ($this->db->connect_errno) {
                throw new \Exception('数据库连接错误！');
            }
            echo '连接成功';
        } catch (\Exception $e) {
            die($e->getMessage());
        }
    }

    public function query($sql)
    {
        $res = $this->db->query($sql);
        return $res;
    }


    public function exec($sql)
    {
        $res = $this->db->query($sql);
        return $res;
    }

    public function close()
    {
        $this->db->close();
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->close();
    }
}
