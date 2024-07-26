<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Hotel;
use App\Models\Facility;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('facility_hotel', function (Blueprint $table) {
            $table->foreignIdFor(Hotel::class);
            $table->foreignIdFor(Facility::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facility_hotel');
    }
};
