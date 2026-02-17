<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DisciplineController extends Controller
{
     public function index()
    {
        return Inertia::render('Discipline/index');
    }
}
