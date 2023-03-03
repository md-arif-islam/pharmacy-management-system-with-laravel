<?php

namespace App\Http\Controllers;

class SalesmanController extends Controller {
    public function allSalesmen() {
        return view( "salesmen" );
    }

    public function addSalesman() {
        return view( "salesman-add" );
    }

    public function updateSalesman() {
        return view( "salesman-update" );
    }
}
