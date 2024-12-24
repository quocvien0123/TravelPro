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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')
                ->onDelete('CASCADE')
                ->onUpdate('CASCADE');
            $table->foreignId('service_id')->nullable()->constrained('services')
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
            $table->string('code')->nullable(); // Mã code
            $table->string('transaction_id')->nullable(); // Mã giao dịch
            $table->string('order_code')->nullable(); // Mã đơn hàng
            $table->decimal('amount_paid', 10, 2);
            $table->string('status')->nullable(); // Trạng thái thanh toán
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction');
    }
};
