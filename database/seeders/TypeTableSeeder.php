<?php

namespace Database\Seeders;
use App\Models\Type;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->delete();
        Type::create(["name" => "DSN", "nextIndex" => 0]);
        Type::create(["name" => "PAIE", "nextIndex" => 0]);
        
    }
}
