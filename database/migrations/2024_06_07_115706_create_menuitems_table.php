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
        Schema::create('menuitems', function (Blueprint $table) {
            $table->id();
            $table->integer("id_menuitem")->nullable()->default(null);
            $table->string("location")->nullable()->default(null);
            $table->integer("order")->default(10);
            $table->string("alias")->nullable()->default(null);
            $table->string("url")->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuitems');
    }
};
