<?php

namespace App\Http\Controllers;

use App\Models\Pharmacist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PharmacistController extends Controller {
    public function allPharmacists() {
        $pharmacists = Pharmacist::all();
        return view( "pharmacists", ['pharmacists' => $pharmacists] );
    }

    public function addPharmacist() {
        return view( "pharmacist-add" );
    }

    public function editPharmacist( Pharmacist $pharmacist ) {
        return view( 'pharmacist-update', compact( 'pharmacist' ) );
    }

    public function createPharmacist( Request $request ) {
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

        $pharmacist = new Pharmacist( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
        ] );

        $pharmacist->save();

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $pharmacist->avatar = $avatarPath;
            $pharmacist->save();
        }

        return redirect()->route( 'pharmacists.show' );

    }

    public function updatePharmacist( Request $request, Pharmacist $pharmacist ) {
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

        $pharmacist->update( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ] );

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $pharmacist->avatar = $avatarPath;
            $pharmacist->save();
        }

        return redirect()->route( 'pharmacists.show' );
    }

    public function deletePharmacist( Pharmacist $pharmacist ) {
        $pharmacist->delete();
        return redirect()->route( 'pharmacists.show' );
    }

}
