<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use function Laravel\Prompts\alert;

class AuthapiController extends Controller
{
    public function register(Request $request)
    {

        $denteratausers = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);
        $data_user = User::create($denteratausers);
        $token = $data_user->createToken($request->name);
        return [
            'users' => $data_user,
            'token' => $token->plainTextToken
        ];
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required'
        ]);
        $datauser = User::where('email', $request->email)->first();
        if (!$datauser || !Hash::check($request->password, $datauser->password)) {
            return [
                'message' => 'the provide credentials are incorrect'
            ];
        }
        $token = $datauser->createToken($datauser->name);
        return [
            'users' => $datauser,
            'token' => $token->plainTextToken
        ];
    }
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return [
            'message' => 'I logout this page'
        ];
    }
}
