<?php

namespace App\Http\Controllers;

use App\Alif\ContactRepository;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    protected $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function index()
    {
        $contact = $this->contactRepository->allCategories();
        return view('contact.index', compact('contact'));
    }
    public function show(string $id)
    {
        $contact = $this->contactRepository->findCategory($id);
        return view('contact.index', compact('contact'));
    }

    public function edit(string $id)
    {
        $contact = $this->contactRepository->findCategory($id);
        return view('contact.edit', compact('contact'));
    }

    public function destroy(string $id)
    {
        $this->contactRepository->destroyCategory($id);
        return redirect('/contact')->with('flash_message', 'Contact deleted!');
    }

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|string|max:255',
            'number' => 'required|integer',
            'address' => 'required|string|max:255',
            'user_id' => 'required|integer',

        ]);
        $this->contactRepository->storeCategory($data);

        return redirect()->route('contact.index');
    }

    public function update(Request $request, $id)
    {
        $request->validate([

        ]);
        $this->contactRepository->updateCategory($request->all(), $id);
        return redirect()->route('contact.index');
    }
}
