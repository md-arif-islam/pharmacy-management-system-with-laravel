<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PharmacistController extends Controller {
    public function allPharmacists() {
        $pharmacists = User::where( 'role', 'pharmacist' )->get();
        return view( "pharmacists", ['pharmacists' => $pharmacists] );
    }

    public function addPharmacist() {
        return view( "pharmacist-add" );
    }

    public function editPharmacist( $pharmacist ) {
        $pharmacist = User::find( $pharmacist );
        return view( 'pharmacist-update', ['pharmacist' => $pharmacist] );
    }

    public function createPharmacist( Request $request ) {
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

        $pharmacist = new User( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
            "role" => "pharmacist",
        ] );

        $pharmacist->save();

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = time() . '-' . $request->file( 'avatar' )->getClientOriginalName();
            $request->file( 'avatar' )->storeAs( 'public/avatars', $avatarPath );

            $pharmacist->avatar = $avatarPath;
            $pharmacist->save();
        }

        return redirect()->route( 'pharmacists.show' )->with( 'success', 'Added successfully.' );

    }

    public function updatePharmacist( Request $request, $pharmacist ) {
        $pharmacist = User::find( $pharmacist );
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

        $pharmacist->update( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ] );

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = time() . '-' . $request->file( 'avatar' )->getClientOriginalName();
            $request->file( 'avatar' )->storeAs( 'public/avatars', $avatarPath );

            $pharmacist->avatar = $avatarPath;
            $pharmacist->save();
        }

        return redirect()->route( 'pharmacists.show' )->with( 'success', 'Updated successfully.' );
    }

    public function deletePharmacist( $pharmacist ) {
        $pharmacist = User::find( $pharmacist );
        $pharmacist->delete();
        return redirect()->route( 'pharmacists.show' )->with( 'success', 'Deleted successfully.' );
    }

}
