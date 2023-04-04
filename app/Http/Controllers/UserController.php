<?php

namespace App\Http\Controllers;


use App\Alif\ContactRepository;
use App\Alif\UserRepository;
use App\Enums\UserStatusEnum;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $user = $this->userRepository->allCategories();
        return view('user.index', compact('user'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'username' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'date_of_birth' => 'nullable|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $this->userRepository->storeCategory($data);

        return redirect()->route('user.index');
    }

    public function show(string $id)
    {
        $user = $this->userRepository->findCategory($id);
        return view('user.show')->with('user', $user);
    }

    public function edit(string $id)
    {
        $user = $this->userRepository->findCategory($id);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'surname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'password' => 'required|string|max:255',
        ]);
        $this->userRepository->updateCategory($request->all(), $id);
        return redirect()->route('user.index');
    }



    public function destroy(string $id)
    {
        $this->userRepository->destroyCategory($id);
        return redirect('/user')->with('flash_message', 'user deleted!');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = Contact::query()
            ->join('users', 'contacts.user_id', '=', 'users.id')
            ->where('users.username', 'LIKE', "%{$search}%")
            ->orwhere('contacts.email', 'LIKE', "%{$search}%")
            ->get();
        return view('search.search', compact('posts'));
    }

}
