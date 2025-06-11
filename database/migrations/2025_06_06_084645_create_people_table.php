<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('person_name');
            $table->string('person_mobile_number');
            $table->longText('address')->nullable();
            $table->foreignId('room_id')->references('id')->on('rooms');
            $table->double('room_price')->default(0);
            $table->date('joining_date')->default(now()->format('d-m-Y'));
            $table->date('leaving_date')->nullable();
            $table->enum('status', ['in_hostel', 'not_in_hostel'])->default('in_hostel');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};
