<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculator(Request $request)
    {
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');
        $operation = $request->input('operation');
        $result = 0;

        switch($operation) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'substract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Error, divide for zero";
                }
                break;
            default: 
                $result = "Operation not found!";
                break;
        }
        return view('calculator', compact('result'));
    }
}
