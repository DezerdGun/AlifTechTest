<?php

namespace Database\Seeders;

use DateTimeImmutable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    protected string $username = 'alif';
    protected string $surname = 'tech';
    protected string $lastname = 'company';

    protected string $email = 'admin@gmail.com';
    protected int $number = 998;
    protected string $address = 'park city';
    protected int $user_id = 1;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Model::unguard();
        $date_of_birth = new DateTimeImmutable('2000-01-01');
        $date = new DateTimeImmutable();
        $user = [
            'username' => $this->username,
            'surname' => $this->surname,
            'lastname' => $this->lastname,
            'date_of_birth' => $date_of_birth,
            'password' => bcrypt('secret'),
            'created_at' => $date,
            'updated_at' => $date,

        ];

        $contact = [
            'user_id' => $this->user_id,
            'email' => $this->email,
            'number' => $this->number,
            'address' => $this->address,
            'created_at' => $date,
            'updated_at' => $date,

        ];
        DB::table('users')->insert($user);
        DB::table('contacts')->insert($contact);

    }

}
