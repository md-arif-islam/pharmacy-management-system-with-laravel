<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SalesmanController extends Controller {
    public function allSalesmen() {
        $salesmen = User::where( 'role', 'salesman' )->get();
        return view( "salesmen", ['salesmen' => $salesmen] );
    }

    public function addPharmacist() {
        return view( "salesman-add" );
    }

    public function editPharmacist( $salesman ) {
        $salesman = User::find( $salesman );
        return view( 'salesman-update', ['salesman' => $salesman] );
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

        $salesman = new User( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
            "role" => "salesman",
        ] );

        $salesman->save();

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $salesman->avatar = $avatarPath;
            $salesman->save();
        }

        return redirect()->route( 'salesmen.show' );

    }

    public function updatePharmacist( Request $request, $salesman ) {
        $salesman = User::find( $salesman );
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

        $salesman->update( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ] );

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $salesman->avatar = $avatarPath;
            $salesman->save();
        }

        return redirect()->route( 'salesmen.show' );
    }

    public function deletePharmacist( $salesman ) {
        $salesman = User::find( $salesman );
        $salesman->delete();
        return redirect()->route( 'salesmen.show' );
    }

}
