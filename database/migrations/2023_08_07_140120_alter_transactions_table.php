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
        Schema::table('transactions', function (Blueprint $table) {
            $table->double('credit', 10, 2)->default(0)->nullable()->change();
            $table->double('debit', 10, 2)->default(0)->nullable()->change();
            $table->string('description')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transactions', function (Blueprint $table) {
            $table->double('credit', 10, 2)->change();
            $table->double('debit', 10, 2)->change();
            $table->string('description')->change();
        });
    }
};
