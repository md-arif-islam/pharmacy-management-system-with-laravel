<?php

namespace App\Http\Controllers;

use App\Models\Salesman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function updateSalesman( Request $request, Salesman $salesman ) {
        $salesman->update( $request->validate( [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => [
                'required',
            ],
        ] ) );
        return redirect()->route( 'salesmen.show' );
    }

    public function deleteSalesman( Salesman $salesman ) {
        $salesman->delete();
        return redirect()->route( 'salesmen.show' );
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

        ] );

        if ( $validator->fails() ) {
            return response()->json( [
                'message' => 'Validation failed',
                'errors' => $validator->errors(),
            ], 422 );
        }

        $salesman = new Salesman( [
            'first_name' => $request->input( 'first_name' ),
            'last_name' => $request->input( 'last_name' ),
            'email' => $request->input( 'email' ),
            'phone' => $request->input( 'phone' ),
            'avatar' => "Avatar",
            'password' => Hash::make( $request->input( 'password' ) ),
        ] );

        $salesman->save();

        return redirect()->route( 'salesmen.show' );

    }

}
