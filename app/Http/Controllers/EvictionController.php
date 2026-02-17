<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EvictionController extends Controller
{
    public function index()
    {
        return Inertia::render('Eviction/index');
    }
}
