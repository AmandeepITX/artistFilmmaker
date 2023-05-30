<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();;
            $table->string('name', 100);
            $table->string('media_url')->nullable();
            $table->string('website')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamp('email_verified_at')->nullable();
            $table->text('bio_info')->nullable();
            // $table->string('phone');
            // $table->string('address')->nullable();
            // $table->string('city');
            // $table->string('state');
            // $table->integer('zip_code');
            // $table->enum('user_type', ['admin', 'user', 'company'])->default('user');
            $table->enum('user_type', ['admin', 'filmMaker', 'artist'])->default('filmMaker');
            $table->enum('status', ['pending', 'approved', 'unapproved'])->default('pending');
            $table->string('service')->nullable();;
            $table->text('card_info')->nullable();;
            $table->string('other_id')->nullable();
            $table->string('headshot_card')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
