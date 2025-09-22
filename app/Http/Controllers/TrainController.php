<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function getTrain()
    {
        $trains = Train::all();
        return view('index', compact('trains'));
    }
}
