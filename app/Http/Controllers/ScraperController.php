<?php

namespace App\Http\Controllers;

use Dotenv\Util\Regex;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class ScraperController extends Controller
{
    public static function scamAlytics($ip)
    {
        $url = "https://scamalytics.com/ip/$ip";
        $data = Http::get($url);
        $jsonData = Str::of($data)->match('/<pre\s+style\s*=\s*"[^"]*">([\s\S]*?)<\/pre>/');
        $json = json_decode($jsonData, true);
        return $json;
    }

    public static function ipQualityScore($ip)
    {
        $apiKey = env('ipqualityscore');
        $url = "https://ipqualityscore.com/api/json/ip/$apiKey/$ip";
        $data = Http::get($url);
        $json = json_decode($data, true);
        return $json;
    }

    public static function ipData($ip)
    {
        $apiKey = env('ipdata');
        $url = "https://api.ipdata.co/$ip?api-key=$apiKey";
        $data = Http::get($url);
        $json = json_decode($data, true);
        return $json;
    }
}
