<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TwoController extends Controller
{
    public function index()
    {
        return Inertia::render('Staff/two');
    }
}
