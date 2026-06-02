<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW IF NOT EXISTS all_appointments
        AS SELECT
        appointments.id,form.user_id,appointments.selected_person,
        appointments.appointment_time,appointments.appointment_date,appointments.details
        FROM forms INNER JOIN appointments
        ON form.user_id=appointments.user_id
        ");
    }

    /**
     * Reverse the migrations.
     *
     * 
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('all_appointments');
    }


};
