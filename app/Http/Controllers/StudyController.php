<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class StudyController extends Controller
{
     public function index()
    {
        return Inertia::render('Study/index');
    }
}
