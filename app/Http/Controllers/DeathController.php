<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DeathController extends Controller
{
   public function index()
    {
        return Inertia::render('Death/index');
    }
}
