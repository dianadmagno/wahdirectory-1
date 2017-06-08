<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerOrgTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partner_organization', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('organization_id');
            $table->string('organization');
        });

        DB::table('partner_organization')
        ->insert([
          ['organization_id' => '01','organization' => 'QualComm Wireless Reach'],
          ['organization_id' => '02','organization' => 'USAID'],
          ['organization_id' => '03','organization' => 'WAH/PHO'],
          ['organization_id' => '04','organization' => 'Provincial Government of Tarlac'],
          ['organization_id' => '05','organization' => 'CHD'],
          ['organization_id' => '06','organization' => 'Department Of Heath'],
          ['organization_id' => '07','organization' => 'CBO - MITD'],
          ['organization_id' => '08','organization' => 'LH'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partner_organization');
    }
}
