<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuildingDesignController extends Controller
{
    public function building()
    {
        return view('building');
    }
}
