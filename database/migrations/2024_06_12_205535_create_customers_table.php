<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('asaas_id')->unique();
            $table->string('name');
            $table->string('cpfCnpj');
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobilePhone')->nullable();
            $table->string('address')->nullable();
            $table->string('addressNumber')->nullable();
            $table->string('complement')->nullable();
            $table->string('province')->nullable();
            $table->string('postalCode')->nullable();
            $table->string('externalReference')->nullable();
            $table->boolean('notificationDisabled')->default(false);
            $table->string('additionalEmails')->nullable();
            $table->string('municipalInscription')->nullable();
            $table->string('stateInscription')->nullable();
            $table->string('observations')->nullable();
            $table->string('groupName')->nullable();
            $table->string('company')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('customers');
    }
}
