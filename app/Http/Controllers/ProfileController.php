<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }

    public function editProfile()
    {
        return view('editProfile');
    }

    public function saveProfile(Request $request)
    {
        if ($request->username == Auth::user()->username && $request->email == Auth::user()->email) {
            $data = $request->validate([
                'phone_number' => ['required', 'numeric', 'digits_between:10,13'],
                'address' => ['required', 'min:5']
            ]);
        }

        else if ($request->email == Auth::user()->email) {
            $data = $request->validate([
                'username' => ['required', 'min: 5', 'max:20', 'unique:users'],
                'phone_number' => ['required', 'numeric', 'digits_between:10,13'],
                'address' => ['required', 'min:5']
            ]);
        }

        else if ($request->username == Auth::user()->username) {
            $data = $request->validate([
                'email' => ['required', 'email', 'unique:users'],
                'phone_number' => ['required', 'numeric', 'digits_between:10,13'],
                'address' => ['required', 'min:5']
            ]);
        }

        else {
            $data = $request->validate([
                'username' => ['required', 'min: 5', 'max:20', 'unique:users'],
                'email' => ['required', 'email', 'unique:users'],
                'phone_number' => ['required', 'numeric', 'digits_between:10,13'],
                'address' => ['required', 'min:5']
            ]);
        }

        User::where('id', Auth::user()->id)->update($data);

        return redirect(route('profile'));
    }

    public function editPassword()
    {
        return view('editPassword');
    }

    public function savePassword(Request $request)
    {
        $data = $request->validate([
            'oldPassword' => ['required', 'string', 'min:5', 'max:20'],
            'newPassword' => ['required', 'string', 'min:5', 'max:20']
        ]);

        if (Hash::check($data['oldPassword'], Auth::user()->password)) {
            User::where('id', Auth::user()->id)->update([
                'password' => Hash::make($data['newPassword'])
            ]);

            return redirect(route('profile'));
        }
        else {
            throw ValidationException::withMessages([
                'failed' => 'Failed to Change Password!'
            ]);
        }
    }
}
