<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class ProfessionalController extends Controller
    {

        public function ShowAppointment()
        {
            $professionalId = Auth::user()->id; 
            $appointments = Appointment::where('professional_id', $professionalId)->get();
    
            return view('appointments', compact('appointments'));
        }

        public function show($id)
        {
            $professional = Professional::findOrFail($id);
            $professionals = Professional::all();
           
            return view('professional.show', compact('professional', 'professionals'));
        }
    
            public function index()
        {
            $professionals = Professional::all(); 
            return view('professional.index', compact('professionals'));
        }

}
        
    

