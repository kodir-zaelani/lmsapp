<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
             $table->uuid('id')->primary();
            $table->string('webname')->nullable();
            $table->string('tagline')->nullable();
            $table->string('description')->nullable();
            $table->string('siteurl')->nullable();
            $table->string('homeurl')->nullable();
            $table->boolean('statushero')->default(true);
            $table->string('language')->nullable();
            $table->string('favicon')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('postalcode',7)->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('logo')->nullable();
            $table->integer('post_per_page')->nullable();
            $table->string('timezone')->nullable();
            $table->boolean('status_home')->default(false);
            $table->text('maps')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('bg_header')->nullable();
            $table->text('bg_statistic')->nullable();
            $table->text('logo_menu')->nullable();
            $table->tinyInteger('fresh_site')->nullable();
            $table->boolean('status_site_update')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};