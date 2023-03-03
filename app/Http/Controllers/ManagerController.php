<?php

namespace App\Http\Controllers;

class ManagerController extends Controller {
    public function allManagers() {
        return view( "managers" );
    }

    public function addManager() {
        return view( "manager-add" );
    }

    public function updateManager() {
        return view( "manager-update" );
    }

}
