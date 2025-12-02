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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->string('leader_name');
            $table->char('gender', 1);
            $table->longText('address');
            $table->string('phone_number');
            $table->tinyInteger('pax');
            $table->date('date_of_entry');
            $table->date('date_of_exit');
            $table->date('actual_date_of_exit')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum('type', ['TRANSIT', 'DIRECT'])->default('TRANSIT');
            $table->foreignId('slot_id')->nullable()->constrained()->onDelete('cascade');
            $table->enum('status', [
                'UNPAID', 
                'PAID_VERIFYING', 
                'CONFIRMED',
                'CANCELLED',
                'EXPIRED'
            ])->default('UNPAID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
