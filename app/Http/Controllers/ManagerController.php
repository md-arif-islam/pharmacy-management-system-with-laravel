<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAllTypesUserRequest;
use App\Models\Manager;
use Illuminate\Http\Request;

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
                'regex:/^([0-9\s\-\+\(\)]*)$/',
            ],
        ] ) );
        return redirect()->route( 'managers.show' );
    }

    public function deleteManager( Request $request, Manager $manager ) {

    }

    public function createManager( CreateAllTypesUserRequest $request ) {

        // Check if the authenticated user has permission to create a manager
        $this->authorize( 'create', Manager::class );

        // Retrieve validated input data
        $data = $request->validated();

        if ( !$data ) {
            return redirect()->back()->withErrors( $data )->withInput();
        }

        // Create a new manager with the validated data
        $manager = new Manager( $data );

        // Save the new manager to the database
        $manager->save();

        // Return a response indicating success
        return response()->json( [
            'message' => 'Manager created successfully',
            'manager' => $manager,
        ], 201 );

        return redirect()->route( "managers.show" );
    }

}
