<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller {
    public function allManagers() {
        $managers = Manager::all();
        return view( "managers", ['managers' => $managers] );
    }

    public function addManager() {
        return view( "manager-add" );
    }

    public function editManager( Manager $manager ) {
        return view( 'manager-update', compact( 'manager' ) );
    }

    public function updateManager( Request $request, Manager $manager ) {
        $manager->update( $request->validate( [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => [
                'required',
            ],
        ] ) );
        return redirect()->route( 'managers.show' );
    }

    public function deleteManager( Manager $manager ) {
        $manager->delete();
        return redirect()->route( 'managers.show' );
    }

    public function createManager( Request $request ) {
        $validator = Validator::make( $request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => [
                'required',
            ],
            'password' => 'required|string|min:8',

        ] );

        if ( $validator->fails() ) {
            return response()->json( [
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422 );
        }

        $manager = new Manager( [
            'first_name' => $request->input( 'first_name' ),
            'last_name' => $request->input( 'last_name' ),
            'email' => $request->input( 'email' ),
            'phone' => $request->input( 'phone' ),
            'avatar' => "Avatar",
            'password' => Hash::make( $request->input( 'password' ) ),
        ] );

        $manager->save();

        return redirect()->route( 'managers.show' );

    }

}
