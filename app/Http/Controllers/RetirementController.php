<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RetirementController extends Controller
{
    public function index()
    {
         return Inertia::render('Retirement/index');
    }
}
