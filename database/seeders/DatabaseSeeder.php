<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name'=>'admin']);
        Role::create(['name'=>'Tipe A']);
        Role::create(['name'=>'Tipe B']);
        Role::create(['name'=>'Tipe C']);
        User::create([
            'name'=>'admin',
            'email'=>'admin@email.com',
            'email_verified_at'=>now(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('admin');

        User::create([
            'name'=>'tester1',
            'email'=>'tester1@email.com',
            'email_verified_at'=>now(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('Tipe A');

        User::create([
            'name'=>'tester2',
            'email'=>'tester2@email.com',
            'email_verified_at'=>now(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('Tipe B');

        User::create([
            'name'=>'tester3',
            'email'=>'tester3@email.com',
            'email_verified_at'=>now(),
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ])->assignRole('Tipe C');

        $this->call([
            VideoSeeder::class,
            ArtikelSeeder::class,
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
