<?php

namespace App\Http\Controllers;

use App\Models\User;

class DashboardController extends Controller {

    public function dashboard() {

        $managerCount = User::where( 'role', 'manager' )->count();
        $pharmacistCount = User::where( 'role', 'pharmacist' )->count();
        $salesmanCount = User::where( 'role', 'salesman' )->count();

        return view( 'dashboard', ['managerCount' => $managerCount, 'pharmacistCount' => $pharmacistCount, 'salesmanCount' => $salesmanCount] );
    }

}
