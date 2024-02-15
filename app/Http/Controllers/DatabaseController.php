<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DatabaseController extends Controller
{
    private $conn;

    public function __construct(){
        $this->conn = new \mysqli('localhost', 'root', '', 'clinic');
    }

    public function getAll($table){
        $sql = "SELECT * FROM $table";
        $result = $this->conn->query($sql);
        $data = [];
        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }
        return  $data;
    }
}
