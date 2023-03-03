<?php

namespace App\Http\Controllers;

class MainController extends Controller {
    public function login() {
        return view( "login" );
    }
}
