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
        Schema::table('company_deals', function (Blueprint $table) {
            $table->string('profile_image')->nullable()->after('logo');
            $table->string('industry')->nullable()->after('profile_image');
            $table->string('website_address')->nullable()->after('industry');
            $table->string('facebook_link')->nullable()->after('website_address');
            $table->string('twitter_link')->nullable()->after('facebook_link');
            $table->string('linkedin_link')->nullable()->after('twitter_link');
            $table->string('instagram_link')->nullable()->after('linkedin_link');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('company_deals', function (Blueprint $table) {
        });
    }
};
