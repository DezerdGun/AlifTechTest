<?php

namespace App\Http\Controllers;

use App\Alif\ContactRepository;
use App\Models\User;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('contact.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'number' => 'required|integer|min:3',
            'address' => 'required|string|max:255',
            'date_of_birth' => 'nullable|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $this->contactRepository->storeCategory($data);

        return redirect()->route('contact.index');
    }

    public function show(string $id)
    {
        $contact = $this->contactRepository->findCategory($id);
        return view('contact.show')->with('contact', $contact);
    }

    public function edit(string $id)
    {
        $contact = $this->contactRepository->findCategory($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|string|max:255',
            'number' => 'required|integer|max:255',
            'address' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $this->contactRepository->updateCategory($request->all(), $id);
        return redirect()->route('contact.index');
    }



    public function destroy(string $id)
    {
        $this->contactRepository->destroyCategory($id);
        return redirect('/contact')->with('flash_message', 'Contact deleted!');
    }

    public function search(Request $request)
    {

        $search = $request->input('search');
        $posts = User::query()
            ->where('username', 'LIKE', "%{$search}%")
            ->orWhere('email', 'LIKE', "%{$search}%")
            ->get();
        return view('search.search', compact('posts'));
    }
}
