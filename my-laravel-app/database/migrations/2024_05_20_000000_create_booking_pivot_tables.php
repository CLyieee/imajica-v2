<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create booking_service pivot table if it doesn't exist
        if (!Schema::hasTable('booking_service')) {
            Schema::create('booking_service', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('booking_id');
                $table->unsignedBigInteger('service_id');
                $table->timestamps();
                
                // Add foreign key constraints
                $table->foreign('booking_id')->references('booking_id')->on('bookings')->onDelete('cascade');
                $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade');
                
                // Prevent duplicate entries
                $table->unique(['booking_id', 'service_id']);
            });
        }
        
        // Create booking_package pivot table if it doesn't exist
        if (!Schema::hasTable('booking_package')) {
            Schema::create('booking_package', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('booking_id');
                $table->unsignedBigInteger('package_id');
                $table->timestamps();
                
                // Add foreign key constraints
                $table->foreign('booking_id')->references('booking_id')->on('bookings')->onDelete('cascade');
                $table->foreign('package_id')->references('package_id')->on('packages')->onDelete('cascade');
                
                // Prevent duplicate entries
                $table->unique(['booking_id', 'package_id']);
            });
        }
        
        // Migrate existing data if needed
        if (Schema::hasColumn('bookings', 'service_id') && Schema::hasTable('booking_service')) {
            $this->migrateExistingServiceData();
        }
        
        if (Schema::hasColumn('bookings', 'package_id') && Schema::hasTable('booking_package')) {
            $this->migrateExistingPackageData();
        }
    }

    /**
     * Migrate existing service data from bookings table to pivot table
     */
    private function migrateExistingServiceData(): void
    {
        $bookings = DB::table('bookings')->whereNotNull('service_id')->get();
        
        foreach ($bookings as $booking) {
            $serviceIds = [];
            
            // Try to parse JSON service_id
            if (is_string($booking->service_id)) {
                try {
                    $decoded = json_decode($booking->service_id, true);
                    if (is_array($decoded)) {
                        $serviceIds = $decoded;
                    } else if ($decoded) {
                        $serviceIds = [$decoded];
                    }
                } catch (\Exception $e) {
                    // If parsing fails, treat as single ID
                    if (!empty($booking->service_id)) {
                        $serviceIds = [$booking->service_id];
                    }
                }
            } else if (is_numeric($booking->service_id)) {
                $serviceIds = [$booking->service_id];
            }
            
            // Insert into pivot table
            foreach ($serviceIds as $serviceId) {
                if (empty($serviceId)) continue;
                
                // Check if the service exists
                $serviceExists = DB::table('services')->where('service_id', $serviceId)->exists();
                if (!$serviceExists) continue;
                
                // Check for existing pivot entry to avoid duplicates
                $exists = DB::table('booking_service')
                    ->where('booking_id', $booking->booking_id)
                    ->where('service_id', $serviceId)
                    ->exists();
                    
                if (!$exists) {
                    DB::table('booking_service')->insert([
                        'booking_id' => $booking->booking_id,
                        'service_id' => $serviceId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }

    /**
     * Migrate existing package data from bookings table to pivot table
     */
    private function migrateExistingPackageData(): void
    {
        $bookings = DB::table('bookings')->whereNotNull('package_id')->get();
        
        foreach ($bookings as $booking) {
            $packageIds = [];
            
            // Try to parse JSON package_id
            if (is_string($booking->package_id)) {
                try {
                    $decoded = json_decode($booking->package_id, true);
                    if (is_array($decoded)) {
                        $packageIds = $decoded;
                    } else if ($decoded) {
                        $packageIds = [$decoded];
                    }
                } catch (\Exception $e) {
                    // If parsing fails, treat as single ID
                    if (!empty($booking->package_id)) {
                        $packageIds = [$booking->package_id];
                    }
                }
            } else if (is_numeric($booking->package_id)) {
                $packageIds = [$booking->package_id];
            }
            
            // Insert into pivot table
            foreach ($packageIds as $packageId) {
                if (empty($packageId)) continue;
                
                // Check if the package exists
                $packageExists = DB::table('packages')->where('package_id', $packageId)->exists();
                if (!$packageExists) continue;
                
                // Check for existing pivot entry to avoid duplicates
                $exists = DB::table('booking_package')
                    ->where('booking_id', $booking->booking_id)
                    ->where('package_id', $packageId)
                    ->exists();
                    
                if (!$exists) {
                    DB::table('booking_package')->insert([
                        'booking_id' => $booking->booking_id,
                        'package_id' => $packageId,
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking_service');
        Schema::dropIfExists('booking_package');
    }
}; 