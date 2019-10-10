<?php
namespace MySQL;
interface Db {
    public function __construct($host,$port,$username,$password,$charset,$table);
    public function connect();
    public function query($sql);
    public function close();
    public function exec($sql);
}