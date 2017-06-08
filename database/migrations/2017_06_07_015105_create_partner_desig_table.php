<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerDesigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_designation', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('designation_id');
            $table->string('designation');
        });

        DB::table('partner_designation')
        ->insert([
          ['designation_id' => '01','designation' => 'Program Manager'],
          ['designation_id' => '02','designation' => 'Chief-of-Party'],
          ['designation_id' => '03','designation' => 'Senior Technical Advisor'],
          ['designation_id' => '04','designation' => 'e-/m-Health Specialist'],
          ['designation_id' => '05','designation' => 'Project Assistant'],
          ['designation_id' => '06','designation' => 'Technical Officer'],
          ['designation_id' => '07','designation' => 'Technical Coordinator'],
          ['designation_id' => '08','designation' => 'Health Program Coordinator'],
          ['designation_id' => '09','designation' => 'Vice-President'],
          ['designation_id' => '10','designation' => 'IT Consultant'],
          ['designation_id' => '11','designation' => 'Statistician I'],
          ['designation_id' => '12','designation' => 'Statistician II'],
          ['designation_id' => '13','designation' => 'Admin Assistant I'],
          ['designation_id' => '14','designation' => 'Job Order'],
          ['designation_id' => '15','designation' => 'ISA III'],
          ['designation_id' => '16','designation' => 'CO I'],
          ['designation_id' => '17','designation' => 'Senior Technical Advisor'],
          ['designation_id' => '18','designation' => 'Health Program Coordinator'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partner_designation');
    }
}
