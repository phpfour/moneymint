<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Faker\Factory;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <2; $i++) {
            Transaction::create([
                'title'   => Factory::create()->name(),
                'description' => Factory::create()->text(),
                'credit'   => rand(100,10000),
                'status'  => Factory::create()->randomElement(['Success', 'Failed', 'Pending'])
            ]);
        }
        for ($i=0; $i <3; $i++) {
            Transaction::create([
                'title'   => Factory::create()->name(),
                'description' => Factory::create()->text(),
                'debit'   => rand(100,10000),
                'status'  => Factory::create()->randomElement(['Success', 'Failed', 'Pending'])
            ]);
        }
    }
}
