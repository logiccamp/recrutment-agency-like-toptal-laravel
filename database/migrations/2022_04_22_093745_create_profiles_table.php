<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->string("gender");
            $table->string("mobile");
            $table->date("dob");
            $table->string("location");
            $table->string("toRelocate");
            $table->unsignedBigInteger("primary_id");
            $table->string("primaryExperience");
            $table->unsignedBigInteger("secondary_id");
            $table->string("secondaryExperience");

            $table->string("hearaboutus");
            $table->string("picture")->nullable();
            $table->string("cv")->nullable();
            $table->timestamps();

            $table->foreign("user_id")->on("users")->references("id");
            $table->foreign("primary_id")->on("job_categories")->references("id");
            $table->foreign("secondary_id")->on("job_categories")->references("id");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
