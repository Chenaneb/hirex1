<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->string('email');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone_number');
            $table->string('id_number')->unique();
             $table->string('passport_number');
            $table->string('agent_name');
            $table->string('agent_phone_number');
             $table->string('guardian_name');
             $table->string('guardian_phone_number');
             $table->string('country');
              $table->string('city');
               $table->string('postal_code');
               $table->string('male_occupation');
                $table->string('female_occupation');
                $table->string('gender');
                 $table->string('file_upload');
            $table->rememberToken();
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
        Schema::dropIfExists('employees');
    }
}
