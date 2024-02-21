<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ScraperController;

class DataController extends Controller
{
    public static function index($ip)
    {
        $data = ScraperController::scamAlytics($ip);
        $sclFraud = $data['score'];
        $data = ScraperController::ipQualityScore($ip);
        $iqsFraud = $data['fraud_score'];
        $data = ScraperController::ipData($ip);
        $idCity = $data['city'];
        $idType = $data['asn']['type'];
        $data = [
            'ip' => $ip,
            'ScamAlytic' => $sclFraud,
            'IpQuality' => $iqsFraud,
            'City' => $idCity,
            'Type' => $idType
        ];
        return $data;
    }
}
