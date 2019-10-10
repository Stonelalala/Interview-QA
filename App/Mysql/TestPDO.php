<?php
namespace App\Mysql;
use MySQL\PDODb;

class TestPDO
{
    public function getUser(){
        $db = new PDODb('127.0.0.1', '3306', 'root', 'stone361101', 'utf8','interview-qa');
        $res = $db->query('SELECT * FROM `users`');
        foreach ($res as $row) {
            print $row['nickname'] . "\t";
            print $row['loginname'] . "\t";
            print $row['password'] . "\n";
        }
    }
}