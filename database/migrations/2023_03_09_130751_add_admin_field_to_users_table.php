<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdminFieldToUsersTable extends Migration
{

    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->boolean('admin')->default(false)->after('active');

        });
    }


    public function down()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn('admin');

        });
    }
}
