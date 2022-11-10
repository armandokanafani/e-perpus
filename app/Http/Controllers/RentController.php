<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rent;
use mysqli;

class RentController extends Controller
{
    public function index() 
    {
        $data['data'] = Rent::all();
        return view ('pages/dashboard.dashboard', $data);
    }
}