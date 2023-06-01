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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->string("fname");
            $table->string("sname");
            $table->string("email")->unique();
            $table->string("gender");
            $table->string("education");
            $table->string("dob");
            $table->string("experience");
            $table->string("continent");
            $table->string("country");
            $table->text("relcountry");
            $table->text("languages");
            $table->text("anythingelse");
            $table->string("cv");
            $table->string("photo");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
