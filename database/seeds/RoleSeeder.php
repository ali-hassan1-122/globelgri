<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'agent_role' => ('agent'),
            ],
            [
                'agent_role' => ('property_manager'),
            ],
            [
                'agent_role' => ('lender'),
            ],
            [
                'agent_role' => ('builder'),
            ],
            [
                'agent_role' => ('investor'),
            ],
            [
                'agent_role' => ('renter'),
            ],
            [
                'agent_role' => ('platform_administrator'),
            ]
        ]);
    }
}
