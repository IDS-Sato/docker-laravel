<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\constled;
use GuzzleHttp\Psr7\Message;
use Symfony\Component\Mime\Message as MimeMessage;

class constledController extends Controller
{
    public function index()
    {
        return 'ok';
        /*
       try {
            $constled = constled::first();
            $result = [
                'result'      => true,
                'const_no'     => $constled->const_no,
                'const_date' => $constled->const_date,
                'const_name' => $constled->const_name
            ];
        } catch(\Exception $e){
            $result = [
                'result' => false,
                'error' => [
                    'messages' => [$e->getMessage()]
                ],
            ];
            return $this->resConversionJson($result, $e->getCode());
        }
        return $this->resConversionJson($result);
        */
    }

    private function resConversionJson($result, $statusCode=200)
    {
        if(empty($statusCode) || $statusCode < 100 || $statusCode >= 600){
            $statusCode = 500;
        }
        return response()->json($result, $statusCode, ['Content-Type' => 'application/json'], JSON_UNESCAPED_SLASHES);
    }
}
