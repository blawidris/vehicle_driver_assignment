<?php

use App\Models\Driver;
use App\Models\Vehicles;
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
        Schema::create('assigned_vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Vehicles::class, 'vehicle_id');
            $table->foreignIdFor(Driver::class, 'driver_id');
            $table->string('assigned_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assigned_vehicles');
    }
};
