<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class HashController extends Controller
{
    public function create(): View {
        return view('pages.breaker');
    }

    public function newJob(): View {
        return view('pages.new-job');
    }
}
