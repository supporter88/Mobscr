<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UpdateVersion106 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Insert some stuff
        DB::table('system_settings')->update(
            array(
                'need_settings_build' => 1,
                'version' => "1.0.6"
            )
        );         

    }
}