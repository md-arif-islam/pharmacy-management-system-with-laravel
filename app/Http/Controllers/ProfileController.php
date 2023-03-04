<?php

namespace App\Http\Controllers;

class ProfileController extends Controller {
    public function profile() {
        return view( "profile" );
    }

    public function updateProfile() {
        return view( "profile-update" );
    }
}
