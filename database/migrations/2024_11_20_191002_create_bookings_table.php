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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('service_id')->constrained('services')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('destination_id')->nullable()->constrained('destinations')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->date('booking_date');
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('number_of_people');
            $table->decimal('total_price', 10, 2);
            $table->boolean('status')->default(false); // Pending by default
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
