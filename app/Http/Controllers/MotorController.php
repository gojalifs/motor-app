<?php

namespace App\Http\Controllers;

use App\DataTables\MotorsDataTable;
use App\Models\Motor;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    public function index()
    {
        $motor = Motor::all();

        return view('home', [
            'motors'=> $motor
        ]);
    }

    public function indexData(MotorsDataTable $motorsDataTable)
    {
        return $motorsDataTable->render('home');
    }
}
