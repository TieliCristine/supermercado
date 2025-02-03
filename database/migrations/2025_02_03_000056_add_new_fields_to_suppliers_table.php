<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToSuppliersTable extends Migration
{
    public function up()
    {
        Schema::table('suppliers', function (Blueprint $table) {
            $table->string('company_name')->nullable();
            $table->string('representative')->nullable();
        });
    }

    public function down()
    {
        Schema::table('suppliers', function (Blueprint $table) {
            $table->dropColumn('company_name');
            $table->dropColumn('representative');
        });
    }
}
