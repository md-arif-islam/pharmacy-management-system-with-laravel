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

        if ( Auth::guard( 'admin' )->attempt( $credentials ) ) {

            session()->put( 'guard', "admin" );
            return redirect()->route( "dashboard" );
        }

        if ( Auth::guard( 'manager' )->attempt( $credentials ) ) {
            return redirect()->route( "dashboard" );
        }

        if ( Auth::guard( 'pharmacist' )->attempt( $credentials ) ) {
            return redirect()->route( "dashboard" );
        }

        if ( Auth::guard( 'salesman' )->attempt( $credentials ) ) {
            return redirect()->route( "dashboard" );
        }

        // Authentication failed...
        return redirect()->back()->withErrors( [
            'message' => 'Invalid login credentials or user not found!',
        ] );
    }

    public function logout() {
        // Remove a session value
        session()->forget( 'guard' );
        return redirect()->route( "login" );
    }
}
