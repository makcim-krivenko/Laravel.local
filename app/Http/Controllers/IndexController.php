<?php

namespace App\Http\Controllers;

class IndexController extends MainController{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        dd('text');
    }
}