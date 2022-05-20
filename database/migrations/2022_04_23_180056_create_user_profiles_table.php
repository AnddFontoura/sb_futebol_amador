<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->string('identification_number', 20)->nullable();
            $table->string('language', 5)->default('pt_br');
            $table->string('social_name', 150)->nullable();
            $table->string('nickname', 100)->nullable();
            $table->enum('gender', ['MALE','FEMALE'])->nullable()->default('MALE');
            $table->text('description', 1000)->nullable();
            $table->date('birthday')->nullable();
            $table->string('photo', 1000)->nullable();
            $table->string('banner', 1000)->nullable();
            $table->string('facebook_profile', 1000)->nullable();
            $table->string('instagram_profile', 1000)->nullable();
            $table->string('linkedin_profile',1000)->nullable();
            $table->string('twitter_profile', 1000)->nullable();
            $table->string('youtube_channel', 1000)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
