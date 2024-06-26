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
        Schema::table('users', function (Blueprint $table) {
            $table->string('username' )->unique()->after('email');
            $table->string('phonenumber')->unique()->after('username');
            $table->string('gender')->after('phonenumber');
            $table->string('address')->unique()->after('address');
            $table->string('zip')->unique()->after('zip');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['username','phonenumber','gender','address','zip']);
        });
    }
};
