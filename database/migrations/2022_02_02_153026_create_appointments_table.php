<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAppointmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('customer_id');
            $table->string('customer_name');
            $table->string('customer_address');
            $table->string('customer_phone');
            $table->string('service_provider_id');
            $table->string('service_provider_name');
            $table->string('service_provider_role');
            $table->date('appointment_date');
            $table->string('appointment_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointments');
    }
}
