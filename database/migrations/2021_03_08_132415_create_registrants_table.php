<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrants', function (Blueprint $table) {
            $table->id();
            $table->string('id_registrant');
            $table->string('lane');
            $table->string('avatar')->default('adm/images/male.png');
            $table->string('name');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->enum('gender', ['L', 'P']);
            $table->string('region');
            $table->string('phone');
            $table->string('parent_name');
            $table->string('parent_phone');
            $table->string('school_origin');
            $table->text('adress');
            $table->enum('majors', ['IPS', 'IPA']);
            $table->integer('bing_sm3');
            $table->integer('bing_sm4');
            $table->integer('bing_sm5');
            $table->integer('average_bing');
            $table->integer('mat_sm3');
            $table->integer('mat_sm4');
            $table->integer('mat_sm5');
            $table->integer('average_mat');
            $table->integer('ips_sm3');
            $table->integer('ips_sm4');
            $table->integer('ips_sm5');
            $table->integer('average_ips');
            $table->integer('ipa_sm3');
            $table->integer('ipa_sm4');
            $table->integer('ipa_sm5');
            $table->integer('average_ipa');
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
        Schema::dropIfExists('registrants');
    }
}
