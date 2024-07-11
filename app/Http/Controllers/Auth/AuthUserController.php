<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class AuthUserController extends Controller
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
        $data['pageTitle'] = 'Masuk';

        return view('auth.login', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima dari request
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $remember = request('remember');

        // Autentikasi user menggunakan metode Auth::attempt()
        if (Auth::guard('web')->attempt($credentials, $remember)) {
            $request->session()->regenerate(); // regenerate session

            $user = Auth::guard('web')->user(); // mendapatkan user yang terautentikasi

            // Mengarahkan berdasarkan role
            if ($user->hasRole('admin')) {
                return redirect()->route('admin.dashboard'); // Mengarahkan ke dashboard admin
            } else {
                return redirect()->intended(RouteServiceProvider::HOME); // Mengarahkan ke dashboard user
            }
        }

        return back()->with('loginError', 'Login Gagal');
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
    public function destroy(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->intended(route('auth.login'));
    }
}
