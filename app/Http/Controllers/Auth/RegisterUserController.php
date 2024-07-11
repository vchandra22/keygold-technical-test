<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['pageTitle'] = 'Mendaftar';

        return view('auth.register', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'no_identitas' => ['required', 'numeric', 'digits_between:4,20', 'unique:users,no_identitas', 'regex:/^[a-zA-Z0-9_]+$/'],
            'nama_lengkap' => ['required', 'string', 'min:4', 'max:255', 'regex:/^[^0-9]*$/'],
            'alamat' => ['required', 'string'],
            'no_hp' => ['required', 'numeric', 'digits_between:10,14', 'unique:users,no_hp'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8'],
            'password_confirmation' => ['required', 'same:password'],
        ]);

        $user = User::create($validatedData);
        $user->assignRole('customer');

        return redirect(route('auth.login'))->with('success', 'Registrasi berhasil, Anda dapat login menggunakan email yang telah terdaftar');

    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
