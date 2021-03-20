<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GardenController extends Controller
{
    public function index($vaisius, $id) { //gates metodas

        $id = $id * 5;
        return view('garden.gates' ,compact('vaisius', 'id'));
    }

    

    public function sum($a, $b)
    {
        if(is_numeric($a) && is_numeric($b)) {
            $a = $a + $b;
            return view('operations.sum' ,compact('a'));
        } else {
            return 'Iveskite skaicius';
        }
    }

    public function multiply($a, $b)
    {
        if(is_numeric($a) && is_numeric($b)) {
            $a = $a * $b;
            return view('operations.multiply' ,compact('a'));
        } else{
            return 'Iveskite skaicius';
        }
    }

    public function divide($a, $b)
    {
        if(is_numeric($a) && is_numeric($b)) {
            $a = $a / $b;
            return view('operations.divide' ,compact('a'));
        } else {
            return 'Iveskite skaicius';
        }
    }

    public function substract($a, $b)
    {
        if(is_numeric($a) && is_numeric($b)) {
            $a = $a - $b;
            return view('operations.substract' ,compact('a'));
        } else {
            return 'Iveskite skaicius';
        }
    }
}