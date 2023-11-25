<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
    public function show()
    {
        return view('pages.auth.sign-up');
    }

    public function signUp(SignUpRequest $request)
    {
        // dapatkan dulu requst dari form request
        // tambahkan password dengan method bcrypt / hash password
        // tambahkan avatar picture dummy sesuai dengan username
        // create user berdasarkan request yang sudah tervalidasi
        // jika create berhasil maka alihkan ke halaman list discussion
        // jika tidak berhasil, return 500

        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $validated['picture'] = config('app.avatar_generator_url') . $validated['username'];

        $create = User::create($validated);

        if ($create) {
            Auth::login($create);
            return redirect()->route('discussions.index');
        }

        return abort(500);
    }
}
