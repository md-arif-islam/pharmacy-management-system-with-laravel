<?php

namespace App\Http\Controllers;

use App\Mail\Mailer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ManagerController extends Controller {
    public function allManagers() {
        $managers = User::where( 'role', 'manager' )->get();
        return view( "managers", ['managers' => $managers] );
    }

    public function addManager() {
        return view( "manager-add" );
    }

    public function editManager( $manager ) {
        $manager = User::find( $manager );
        return view( 'manager-update', ['manager' => $manager] );
    }

    public function createManager( Request $request ) {
        $validator = Validator::make( $request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|unique:users|max:255',
            'phone' => [
                'required',
            ],
            'password' => 'required|string|min:8',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ] );

        if ( $validator->fails() ) {
            return redirect()->back()->withErrors( $validator );
        }

        $manager = new User( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
            "role" => "manager",
        ] );

        $manager->save();

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = time() . '-' . $request->file( 'avatar' )->getClientOriginalName();
            $request->file( 'avatar' )->storeAs( 'public/avatars', $avatarPath );

            $manager->avatar = $avatarPath;
            $manager->save();
        }

        return redirect()->route( 'managers.show' )->with( 'success', 'Added successfully.' );

    }

    public function updateManager( Request $request, $manager ) {
        $manager = User::find( $manager );
        $validator = Validator::make( $request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => [
                'required',
            ],
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',

        ] );

        if ( $validator->fails() ) {
            return redirect()->back()->withErrors( $validator );
        }

        $manager->update( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ] );

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = time() . '-' . $request->file( 'avatar' )->getClientOriginalName();
            $request->file( 'avatar' )->storeAs( 'public/avatars', $avatarPath );

            $manager->avatar = $avatarPath;
            $manager->save();
        }
        Mail::to( "arifislamarif344@gmail.com" )->send( new Mailer );
        return redirect()->route( 'managers.show' )->with( 'success', 'Updated successfully.' );
    }

    public function deleteManager( $manager ) {
        $manager = User::find( $manager );
        $manager->delete();
        return redirect()->route( 'managers.show' )->with( 'success', 'Deleted successfully.' );
    }

}
