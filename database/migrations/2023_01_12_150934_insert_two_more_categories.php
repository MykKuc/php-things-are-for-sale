<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')->insert(
            array(
                'name' => 'Electronics',
                'description' => 'Electronics can involve anything from unused consoles to TVs.'
            )
        );

        DB::table('categories')->insert(
            array(
                'name' => 'Clothes',
                'description' => 'This category can involve anything from '
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
