<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('orario_partenza', 'like', '2023-05-12%')->get();
        return view('home', compact('trains'));
    }
}
