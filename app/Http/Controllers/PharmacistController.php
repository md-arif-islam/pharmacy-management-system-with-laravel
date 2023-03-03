<?php

namespace App\Http\Controllers;

class PharmacistController extends Controller {
    public function allPharmacists() {
        return view( "pharmacists" );
    }

    public function addPharmacist() {
        return view( "pharmacist-add" );
    }

    public function updatePharmacist() {
        return view( "pharmacist-update" );
    }
}
