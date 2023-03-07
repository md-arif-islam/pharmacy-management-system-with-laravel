<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller {
    public function profile() {
        return view( "profile" );
    }

    public function editProfile() {
        return view( "profile-update" );
    }

    public function updateProfile( Request $request, $user ) {
        $user = User::find( $user );

        $validator = Validator::make( $request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|email,' . $user->id,
            'phone' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'nullable|string|min:6',
        ] );

        if ( $validator->fails() ) {
            return redirect()->back()->withErrors( $validator );
        }

        // Update the user's information
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;

        if ( $request->password ) {
            $user->password = Hash::make( $request->password );
        }

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = time() . '-' . $request->file( 'avatar' )->getClientOriginalName();
            $request->file( 'avatar' )->storeAs( 'public/avatars', $avatarPath );

            $user->avatar = $avatarPath;
        }

        $user->save();

        return redirect()->route( 'profile.show' )->with( 'success', 'Updated successfully.' );
    }

}
