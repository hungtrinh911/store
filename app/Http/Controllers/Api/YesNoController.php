<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;

class YesNoController extends Controller
{
    public function getGifApi()
    {
      $url = 'https://api.giphy.com/v1/gifs/trending?api_key=8Slm9KBGu3Cf4JpsfEV6QvVIag2mRfRq&limit=25&rating=R';
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_URL, $url);
      $result=curl_exec($ch);
      curl_close($ch);
      return (json_decode($result, true));
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }
}
