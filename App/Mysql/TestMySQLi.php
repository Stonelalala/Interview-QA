<?php


namespace App\Mysql;
use MySQL\MySQLiDb;
class TestMySQLi
{
    public function getUser()
    {
        $db = new MySQLiDb('127.0.0.1', '3306', 'root', 'stone361101', 'utf8','interview-qa');

        $res = $db->query('UPDATE `users` set `nickname` = "stone" WHERE `id` = 1');
        var_dump($res);

    }
}