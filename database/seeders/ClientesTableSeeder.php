<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Carbon\Factory;
use Illuminate\Database\Seeder;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
       // factory(Cliente::class, 100)->create();
    }
}
