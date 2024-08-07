<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();
            $table->tinyText('title')->nullable();
            $table->tinyText('text');
            $table->tinyInteger('type')->default(0)->comment('1-marketing,2-invoices,3-system');
            $table->dateTime('expiration_date');
            $table->boolean('global')->default(true)->comment('true-globally available for all users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notifications');
    }
}
