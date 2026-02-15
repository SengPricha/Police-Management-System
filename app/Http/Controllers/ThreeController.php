<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class ThreeController extends Controller
{
        public function index()
        {
            return Inertia::render('Staff/three');
        }
}
