<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $filde = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'password' => 'required|string',
        ]);
        $user = User::create([
            'name' => $filde['name'],
            'email' => $filde['email'],
            'password' => bcrypt($filde['password'])
        ]);
        $token = $user->createToken('myapptoken')->plainTextToken;
        $response  = ([
            'user' => $user,
            'token' => $token,
            'success' => true
        ]);
        return response($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $filde = $request->validate([
            'email' => 'required|string',
            'password' => 'required|string'
        ]);
        // check email
        $user = User::where('email', $filde['email'])->first();
        // check password
        if(!$user || !Hash::check($filde['password'], $user->password)){
            return response([
                'massage' => 'Email or Password wrong!!'
            ]);
        }else{
            $token = $user->createToken('myapptoken')->plainTextToken;
            $response = ([
                'user' => $user,
                'token' => $token
            ]);
            return response($response, 201);
        };
    }
    public function logout()
    {
        auth()->user()->Tokens()->delete();
        return[
            'message'=>'Logout'
        ];
    }
}
