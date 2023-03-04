<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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

    public function createManager( Request $request ) {
        $validator = Validator::make( $request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => [
                'required',
            ],
            'password' => 'required|string|min:8',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ] );

        if ( $validator->fails() ) {
            return response()->json( [
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422 );
        }

        $manager = new Manager( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
        ] );

        $manager->save();

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $manager->avatar = $avatarPath;
            $manager->save();
        }

        return redirect()->route( 'managers.show' );

    }

    public function updateManager( Request $request, Manager $manager ) {
        $validator = Validator::make( $request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => [
                'required',
            ],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ] );

        if ( $validator->fails() ) {
            return response()->json( [
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422 );
        }

        $manager->update( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ] );

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $manager->avatar = $avatarPath;
            $manager->save();
        }

        return redirect()->route( 'managers.show' );
    }

    public function deleteManager( Manager $manager ) {
        $manager->delete();
        return redirect()->route( 'managers.show' );
    }

}
