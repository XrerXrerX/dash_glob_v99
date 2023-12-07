<?php

namespace App\Http\Controllers;

use App\Models\ApiL21;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiL21Controller extends Controller
{
    public function index()
    {
        $data = ApiL21::all();
        return response()->json($data);
    }
}
