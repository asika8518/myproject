<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        return 'index';
    }



    public function katalog() {
        return 'katalog';
    }


    public function korzina() {
        return 'korzinas';
    }
}