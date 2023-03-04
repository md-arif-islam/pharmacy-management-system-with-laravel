<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'managers', function ( Blueprint $table ) {
            $table->id();
            $table->string( "first_name" );
            $table->string( "last_name" );
            $table->string( "email" )->unique();
            $table->string( "phone" )->unique();
            $table->string( "password" );
            $table->string( "avatar" )->default( "" );
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'managers' );
    }
};
