<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class LandingController extends Controller
{
    public function index()
    {
        $account=Users::all();
        return view('landingpage', compact('account'));
    }
}
