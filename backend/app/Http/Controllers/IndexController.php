<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\constled;

class IndexController extends Controller
{
    //
    public function  __construct(){

    }

    /*
    public function index(){
        return view('index');
    }
    */
  public function index() {
    /*
    $constled = new constled;
    */
    
    $constled = constled::first();

    /*
    $result = [
        'result'      => true,
        'const_no'     => $constled->const_no,
        'const_date' => $constled->const_date,
        'const_name' => $constled->const_name
    ];
    */

    $value = $constled->find(1);
    $arr = [$constled->const_no, $constled->const_date, $constled->const_name];
    return view('index', compact('value', 'arr'));
  }

}