<?php
namespace App\connection;
class MysqlConnection implements DbConnection {
    public function __construct()
    {
        echo '<b>'.__CLASS__.'</b><hr>';
    }
    public function create()
    {
        // TODO: Implement create() method.
    }
}