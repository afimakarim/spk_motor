<?php

use Illuminate\Database\Seeder;

class MerekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Merek::create
        ([
            'name' => "Honda"
        ]);
        \App\Merek::create
        ([
            'name' => "Yamaha"
        ]);
        \App\Merek::create
        ([
            'name' => "Suzuki"
        ]);
        \App\Merek::create
        ([
            'name' => "Kawasaki"
        ]);
    }
}
