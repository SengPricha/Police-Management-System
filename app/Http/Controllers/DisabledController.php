<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DisabledController extends Controller
{
   public function index()
    {
        return Inertia::render('Disabled/index');
    }
}
