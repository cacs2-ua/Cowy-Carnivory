<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('users')->delete();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        User::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        DB::table('users')->insert([

            
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('admin'),
                'address' => 'admin Street',
                'phone_number' => 713578143,
                'card_number' => 1111222233334444,
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'vendor-default',
                'email' => 'vendor@default.com',
                'password' => Hash::make('vendor'),
                'address' => 'vendor Street',
                'phone_number' => 643218999,
                'card_number' => 5555666677778888,
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'customer-default',
                'email' => 'customer@default.com',
                'password' => Hash::make('customer'),
                'address' => 'customer Street',
                'phone_number' => 616614321,
                'card_number' => 1111111122222222,
                'role' => 'customer',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'email' => 'info@mcdonalds.com',
                'name' => 'McDonald\'s',
                'password' => Hash::make('vendor'),
                'phone_number' => '123456789',
                'address' => '123 McDonald St, San Francisco, CA',
                'card_number' => '1234567890',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'contact@burgerking.com',
                'name' => 'Burger King',
                'password' => Hash::make('vendor'),
                'phone_number' => '987654321',
                'address' => '456 Burger Ave, Los Angeles, CA',
                'card_number' => '0987654321',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [

                'email' => 'info@wendys.com',
                'name' => 'Wendy\'s',
                'password' => Hash::make('vendor'),
                'phone_number' => '456123789',
                'address' => '789 Wendy Way, Miami, FL',
                'card_number' => '4561237890',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'contact@kfc.com',
                'name' => 'KFC',
                'password' => Hash::make('vendor'),
                'phone_number' => '321654987',
                'address' => '321 KFC Blvd, New York, NY',
                'card_number' => '3216549870',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'info@subway.com',
                'name' => 'Subway',
                'password' => Hash::make('vendor'),
                'phone_number' => '654987321',
                'address' => '654 Subway St, Chicago, IL',
                'card_number' => '6549873210',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'contact@pizzahut.com',
                'name' => 'Pizza Hut',
                'password' => Hash::make('vendor'),
                'phone_number' => '789321456',
                'address' => '987 Pizza Ave, Houston, TX',
                'card_number' => '7893214560',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'info@tacobell.com',
                'name' => 'Taco Bell',
                'password' => Hash::make('vendor'),
                'phone_number' => '654321987',
                'address' => '123 Taco Blvd, Las Vegas, NV',
                'card_number' => '6543219870',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'contact@dominos.com',
                'name' => 'Domino\'s Pizza',
                'password' => Hash::make('vendor'),
                'phone_number' => '987123654',
                'address' => '456 Domino St, Dallas, TX',
                'card_number' => '9871236540',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'contact@dunkindonuts.com',
                'name' => 'Dunkin\' Donuts',
                'password' => Hash::make('vendor'),
                'phone_number' => '123789456',
                'address' => '321 Dunkin St, Boston, MA',
                'card_number' => '1237894560',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'info@starbucks.com',
                'name' => 'Starbucks',
                'password' => Hash::make('vendor'),
                'phone_number' => '456987123',
                'address' => '654 Starbucks Ave, Seattle, WA',
                'card_number' => '4569871230',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'info@chipotle.com',
                'name' => 'Chipotle',
                'password' => Hash::make('vendor'),
                'phone_number' => '987654123',
                'address' => '789 Chipotle Ave, Denver, CO',
                'card_number' => '9876541230',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'email' => 'info@pandaexpress.com',
                'name' => 'Panda Express',
                'password' => Hash::make('vendor'),
                'phone_number' => '321789654',
                'address' => '123 Panda Express Ave, San Jose, CA',
                'card_number' => '3217896540',
                'role' => 'vendor',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            
        ]);
    }
}