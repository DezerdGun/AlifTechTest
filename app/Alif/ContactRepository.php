<?php

namespace App\Alif;

use App\Alif\Interfaces\ContactRepositoryInterface;
use App\Enums\UserStatusEnum;
use App\Models\User;

class ContactRepository implements ContactRepositoryInterface
{
    public function allCategories()
    {
        return User::all();
    }
    public function storeCategory($data)
    {
        $user = User::create($data);
        $user->status = UserStatusEnum::Status;
        $user->email_verified_at = ''; // change to hardcode later after testing
        $user->remember_token = ''; // change to hardcode later after testing
        return $user;
    }
    public function findCategory($id)
    {
        return User::find($id);
    }
    public function updateCategory($data, $id)
    {
        $user = User::where('id', $id)->first();
        $user->username= $data['username'];
        $user->surname = $data['surname'];
        $user->lastname = $data['lastname'];
        $user->email = $data['email'];
        $user->number = $data['number'];
        $user->address = $data['address'];
        $user->password = $data['password'];
        $user->save();
    }
    public function destroyCategory($id)
    {
        return User::destroy($id);

    }

}
