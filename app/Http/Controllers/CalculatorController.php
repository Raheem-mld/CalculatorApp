<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $operation = $request->input('operation');
        $num1 = $request->input('num1');
        $num2 = $request->input('num2');

        switch ($operation) {
            case 'plus':
                $result = $num1 + $num2;
                break;
            case 'minus':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                $result = $num1 / $num2;
                break;
            default:
                $result = 'Invalid operation';
        }

        return response()->json(['result' => $result]);
    }
}
