<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Club;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');
        $this->command->info('User Table Seeded!');
        $this->call('ClubTableSeeder');
        $this->command->info('Club Table Seeded!');
    }
}

class UserTableSeeder extends Seeder
{
	public function run()
    {
        DB::table('users')->delete();

        User::create([
        	'name' => 'developer',
        	'email' => 'developer@gmail.com',
        	'password' => Hash::make('password'),
        	'user_type' => '1',
        	'profile_photo_path' => 'user3-128x128.jpg',
        	'club_id' => '1'
        ]);
    }
}

class ClubTableSeeder extends Seeder
{
	public function run()
    {
        DB::table('clubs')->delete();

        Club::create([
        	'club_name' => 'Bachelor Software Engineering Club',
        	'club_prefix' => 'BSE Club',
        	'club_desc' => 'BSE Club description',
        	'club_picture' => '1'
        ]);
    }
}
