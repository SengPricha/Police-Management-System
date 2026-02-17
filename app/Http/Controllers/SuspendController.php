<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class SuspendController extends Controller
{
    public function index()
    {
        return Inertia::render('Suspend/index');
    }
}
