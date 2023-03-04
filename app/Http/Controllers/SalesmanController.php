<?php

namespace App\Http\Controllers;

use App\Models\Salesman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class SalesmanController extends Controller {
    public function allSalesmen() {
        $salesmen = Salesman::all();
        return view( "salesmen", ['salesmen' => $salesmen] );
    }

    public function addSalesman() {
        return view( "salesman-add" );
    }

    public function editSalesman( Salesman $salesman ) {
        return view( 'salesman-update', compact( 'salesman' ) );
    }

    public function createSalesman( Request $request ) {
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

        $salesman = new Salesman( [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make( $request->password ),
        ] );

        $salesman->save();

        if ( $request->hasFile( 'avatar' ) ) {
            $avatarPath = Storage::putFile( 'avatars', $request->file( 'avatar' ) );
            $salesman->avatar = $avatarPath;
            $salesman->save();
        }

        return redirect()->route( 'salesmen.show' );

    }

    public function updateSalesman( Request $request, Salesman $salesman ) {
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

    public function deleteSalesman( Salesman $salesman ) {
        $salesman->delete();
        return redirect()->route( 'salesmen.show' );
    }

}
