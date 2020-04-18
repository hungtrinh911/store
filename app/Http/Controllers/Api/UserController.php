<?php

namespace App\Http\Controllers\Api;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function register(Request $request)
    {
      $user = new User([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'password' => Hash::make($request->get('password')),
      ]);
      try {
        $user->save();
      } catch (Exception $e) {
        return response()->json('error');
      }
      return response()->json('success');
    }

    // public function login(Request $request)
    // {
    //   $user = User::checkLogin($request->get('name')); dd($user);
    //   if ($user) {
    //     return response()->json('success');
    //   }
    //   return response()->json('error');
    // }
}
