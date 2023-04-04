<?php

namespace App\Alif;

use App\Alif\Interfaces\ContactRepositoryInterface;
use App\Models\Contact;
use DateTimeImmutable;
use Illuminate\Support\Facades\Auth;


class ContactRepository implements ContactRepositoryInterface
{

    public function allCategories()
    {
       return Contact::where('user_id', Auth::id())->latest()->paginate(20);
    }
    public function storeCategory($data)
    {
        return Contact::create($data);

    }
    public function findCategory($id)
    {
        return Contact::find($id);
    }
    public function updateCategory($data, $id)
    {
        $time = new DateTimeImmutable();
        $contact = Contact::where('id', $id)->first();
        $contact->email = $data['email'];
        $contact->number = $data['number'];
        $contact->address = $data['address'];
        $contact->updated_at = $time;
        $contact->save();
    }
    public function destroyCategory($id)
    {
        return Contact::destroy($id);

    }
}
