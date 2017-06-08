<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');

            $table->integer('organization_id')->unsigned();
            $table->integer('designation_id')->unsigned();

            $table->string('last_name',50);
            $table->string('first_name',50);
            $table->string('primary_contact',12)->nullable();
            $table->string('secondary_contact',12)->nullable();
            $table->string('email',50);
            $table->date('birthday');
            $table->timestamps();

            $table->foreign('organization_id')->references('organization_id')->on('partner_organization');
            $table->foreign('designation_id')->references('designation_id')->on('partner_designation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::table('partner', function($table) {
          $table->dropForeign('partner_organization_id_foreign');
          $table->dropForeign('partner_designation_id_foreign');
        });

        Schema::drop('partner');
    }
}
