<?php

namespace Database\Seeders;

 use App\Models\User;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;

 class DatabaseSeeder extends Seeder
{
    protected string $surname = 'admin';
    protected string $username = 'alif';
    protected string $lastname = 'tech';
    protected string $email = 'admin@gmail.com';
    protected int $number = 998;
    protected string $address = 'park city';
    protected int $status = 2;
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();

         $user = [
             'username' => $this->username,
             'surname' => $this->surname,
             'lastname' => $this->lastname,
             'email' => $this->email,
             'number' => $this->number,
             'address' => $this->address,
             'password'=> bcrypt('secret'),

         ];
        DB::table('users')->insert($user);
    }

 }
