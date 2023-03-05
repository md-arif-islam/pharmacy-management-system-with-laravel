<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
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
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'password' => 'nullable|string|min:6',
        ] );

        if ( $validator->fails() ) {
            return response()->json( [
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422 );
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
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $user->avatar = $avatarPath;
        }

        $user->save();

        return redirect()->route( 'profile.show' );
    }

}
