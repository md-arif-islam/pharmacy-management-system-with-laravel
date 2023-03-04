<?php

namespace App\Http\Controllers;

use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller {
    public function allManagers() {
        return view( "managers" );
    }

    public function addManager() {
        return view( "manager-add" );
    }

    public function updateManager() {
        return view( "manager-update" );
    }

    public function createManager( Request $request ) {
        $fname = $request->fname;
        $lname = $request->lname;
        $email = $request->email;
        $phone = $request->phone;
        $password = $request->password;

        $manager = New Manager();
        $manager->first_name = $fname;
        $manager->last_name = $lname;
        $manager->email = $email;
        $manager->phone = $phone;
        $manager->avatar = "";
        $manager->password = Hash::make( $password );
        $manager->save();

        return redirect()->route( "managers" );

    }

}
