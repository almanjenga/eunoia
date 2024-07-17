<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnboardingController extends Controller
{
    public function step1()
    {
        return view('onboardingStep1');
    }
}
