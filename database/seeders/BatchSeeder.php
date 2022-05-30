<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Integer;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('batches')->insert([
            'plant_name' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
            'customer_name' => Str::random(10),
            'total_quantity' => rand(1,1200),
            'ready_date' => Date::now(),
            'plant_id' => 1,
        ]);
    }
}
