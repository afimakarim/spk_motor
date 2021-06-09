<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminSeeder::class);
        $this->call(MerekSeeder::class);
        $this->call(JenisSeeder::class);
//        $this->call(Alternatif2TableSeeder::class);
    }
}
