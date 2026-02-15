<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class OneController extends Controller
{
     public function index()
    {
        return Inertia::render('Staff/one');
    }
}
