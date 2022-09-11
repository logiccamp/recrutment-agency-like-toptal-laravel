<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("userjob_id");
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("job_id");
            $table->unsignedBigInteger("amount");
            $table->timestamps();

            $table->foreign("userjob_id")->references("id")->on("user_jobs");
            $table->foreign("job_id")->references("id")->on("jobs");
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
