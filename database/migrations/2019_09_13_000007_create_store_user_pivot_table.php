<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoreUserPivotTable extends Migration
{
    public function up()
    {
        Schema::create('store_user', function (Blueprint $table) {
            $table->unsignedInteger('store_id');

            $table->foreign('store_id', 'store_id_fk_334959')->references('id')->on('stores')->onDelete('cascade');

            $table->unsignedInteger('user_id');

            $table->foreign('user_id', 'user_id_fk_334959')->references('id')->on('users')->onDelete('cascade');
        });
    }
}
