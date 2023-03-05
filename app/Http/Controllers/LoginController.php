<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    public function login() {
        return view( "login" );
    }

    public function authLogin( Request $request ) {
        $credentials = $request->only( 'email', 'password' );

        if ( Auth::attempt( $credentials ) ) {
            return redirect()->route( "dashboard" );
        } else {
            // Authentication failed
            return redirect()->back()->withErrors( [
                'message' => 'Invalid login credentials or user not found!',
            ] );
        }
    }

    public function logout( Request $request ) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route( "login" );
    }
}
