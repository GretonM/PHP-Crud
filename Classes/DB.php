<?php

namespace Classes;

abstract class DB
{
    const DB = 'solution25_assignment';
    const PASSWORD = '';
    const USERNAME = 'root';
    const HOST = 'localhost';

    public function __construct()
    {
        $this->db = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DB);
    }
}