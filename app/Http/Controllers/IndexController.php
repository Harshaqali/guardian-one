<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Property;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() 
    {
        $logo = Logo::first();
        $properties = Property::get();

        return view('frontend.index', compact('logo', 'properties'));
    }
}
