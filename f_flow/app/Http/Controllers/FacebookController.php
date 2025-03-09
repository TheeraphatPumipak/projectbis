<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class FacebookController extends Controller
{
    public function getFacebookData(Request $request)
    {
        // กำหนด App ID, App Secret และ Graph API Version
        $appId = env('FACEBOOK_APP_ID');
        $appSecret = env('FACEBOOK_APP_SECRET');
        $version = 'v22.0';

        // สร้าง URL สำหรับเรียก Facebook Graph API
        $url = "https://graph.facebook.com/{$version}/me?access_token={$appId}|{$appSecret}";

        // เรียก Facebook API โดยใช้ Guzzle
        $client = new Client();
        $response = $client->get($url);

        // แปลงข้อมูลที่ได้จาก JSON
        $data = json_decode($response->getBody()->getContents(), true);

        return response()->json($data);
    }
}
