<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CheckTables extends Command
{
    protected $signature = 'app:check-tables';
    protected $description = 'Check if booking pivot tables exist';

    public function handle()
    {
        $tables = [
            'bookings',
            'booking_service',
            'booking_package',
            'services',
            'packages'
        ];

        $this->info('Checking tables:');
        
        foreach ($tables as $table) {
            if (Schema::hasTable($table)) {
                $this->info("✓ Table '{$table}' exists");
                
                // Count records for each table
                $count = DB::table($table)->count();
                $this->info("  - Records: {$count}");
                
                // Show structure for pivot tables
                if ($table === 'booking_service' || $table === 'booking_package') {
                    $this->info("  - Columns:");
                    $columns = Schema::getColumnListing($table);
                    foreach ($columns as $column) {
                        $this->info("    * {$column}");
                    }
                }
            } else {
                $this->error("✗ Table '{$table}' does not exist");
            }
        }
        
        // Sample bookings data
        if (Schema::hasTable('bookings')) {
            $this->info("\nSample booking records:");
            $bookings = DB::table('bookings')->limit(2)->get();
            foreach ($bookings as $booking) {
                $this->info("Booking ID: {$booking->booking_id}");
                $this->info("Service ID: " . ($booking->service_id ?? 'null'));
                $this->info("Package ID: " . ($booking->package_id ?? 'null'));
                $this->info("Patient ID: " . ($booking->patient_id ?? 'null'));
                $this->info("Status: " . ($booking->status ?? 'null'));
                $this->info("---");
            }
        }
        
        return Command::SUCCESS;
    }
} 