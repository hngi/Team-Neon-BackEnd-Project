<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\HttpFoundation\Session\Session;

class DashboardController extends Controller
{
    //

    public function Home(Request $request) {

        return view('dashboard.home');
    }

    public function ViewDoc(Request $request)
    {
        # code...
        return view('dashboard.documentation');
    }
}
