<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DatabaseController;

class HomeController extends Controller
{
    private $db;
    public function __construct(){
        $this->db = new DatabaseController();
    }
    public function index()
    {
        return view('index',["majors" => $this->db->getAll("majors")]);
    }
}
