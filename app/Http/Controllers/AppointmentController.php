<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Professional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentConfirmed;

class AppointmentController extends Controller
{
    public function book(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'professional_id' => 'required|exists:professionals,id',
            'appointment_date' => 'required|date|after_or_equal:today',
            'appointment_time' => 'required',
        ]);

        // Create a new Appointment instance
        $appointment = new Appointment();
        $appointment->user_id = auth()->user()->id; // Assuming authenticated user
        $appointment->professional_id = $validatedData['professional_id'];
        $appointment->appointment_datetime = $validatedData['appointment_date'] . ' ' . $validatedData['appointment_time'];
        $appointment->status = 'pending'; // Initial status

        // Save the appointment to the database
        $appointment->save();

        // Optionally, you can send an email notification here

        // Redirect back with success message
        return redirect()->back()->with('success', 'Appointment booked successfully! Check on the Status of your booking and the proffesional will contact soon!');
    }

public function userAppointments()
{
    $user = Auth::user();
    $appointments = Appointment::where('user_id', $user->id)->get();

    return view('view_appointments', compact('appointments'));
}



public function confirm($id)
{
    $appointment = Appointment::findOrFail($id);
    $appointment->status = 'confirmed';
    $appointment->save();

    // Send confirmation email to user
    Mail::to($appointment->user->email)->send(new AppointmentConfirmed($appointment));

    return redirect()->back()->with('success', 'Appointment confirmed successfully!');
}


public function requestReschedule(Request $request, $id)
{
    $appointment = Appointment::findOrFail($id);

    // Update the appointment status to 'reschedule requested'
    $appointment->status = 'reschedule requested';
    $appointment->save();

    // Redirect back with a success message or handle as needed
    return redirect()->back()->with('success', 'Reschedule request sent successfully.');
}
}


// class AppointmentController extends Controller
// {
//     public function bookAppointment(Availability $availability)
//     {

      
//         $appointment = new Appointment();
//         $appointment->user_id = auth()->id();
//         $appointment->professional_id = $availability->professional_id;
//         $appointment->availability_id = $availability->id;
//         $appointment->appointment_time = $availability->start_time; 
//         $appointment->save();

      
        
//         return redirect()->back()->with('success', 'Appointment booked successfully.');
//     }

//     public function viewAppointments()
//     {
//         $appointments = Appointment::with('professional', 'availability')
//             ->where('user_id', auth()->id())
//             ->orderBy('appointment_time', 'asc')
//             ->get();

//         return view('appointments.index', compact('appointments'));
//     }

//     public function cancelAppointment(Appointment $appointment)
//     {
       
//         $appointment->delete();

        
        
//         return redirect()->back()->with('success', 'Appointment canceled successfully.');
//     }
// }