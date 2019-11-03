<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBidPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bid_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('name', 100);
            $table->text('description');
            $table->integer('bidder_id');
            $table->float('lowest_price', 2);
            $table->float('step_price', 2);
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
        Schema::dropIfExists('bid_packages');
    }
}
