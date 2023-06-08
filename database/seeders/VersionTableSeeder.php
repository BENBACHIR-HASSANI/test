<?php

namespace Database\Seeders;

use App\Models\Version;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VersionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('versions')->delete();
        Version::create(["name" => "G2R18C00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C00P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C00P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C00P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C01P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C01P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C01P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C02P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C02P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C02P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R18C02P03", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C00P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C00P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C00P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C01P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C01P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C01P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C00P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C02P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C02P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C03", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C03P00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C03P01", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R19C03P02", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R20C00", "prefix" => "HP_900"]);
        Version::create(["name" => "G2R20C00P00", "prefix" => "HP_900"]);
    }
}
