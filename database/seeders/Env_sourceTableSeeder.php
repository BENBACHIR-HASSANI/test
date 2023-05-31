<?php

namespace Database\Seeders;

use App\Models\Env_source;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Env_sourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('env_sources')->delete();
        Env_source::create(["name" => "FHHDV1"]);
        Env_source::create(["name" => "FHHDV2"]);
        Env_source::create(["name" => "FHHDV3"]);
        Env_source::create(["name" => "FHHIT1"]);
        Env_source::create(["name" => "FHHIT2"]);
        Env_source::create(["name" => "FHHIT3"]);
        Env_source::create(["name" => "FHHDO1"]);
        Env_source::create(["name" => "FHHDO2"]);
        Env_source::create(["name" => "FHHPO1"]);
        Env_source::create(["name" => "FHHPO2"]);
        Env_source::create(["name" => "FHHPO3"]);
        Env_source::create(["name" => "FHHPO5"]);
        Env_source::create(["name" => "FHHMH3"]);
        Env_source::create(["name" => "FHHRH3"]);

    }
}
