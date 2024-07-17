<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professional2 extends Model
{
    use HasFactory;

    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'specialization' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:20',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Example validation rule for image upload
    ]);

    // Handle image upload if included in the request
    if ($request->hasFile('image')) {
        $imagePath = $request->file('image')->store('professionals/images', 'public');
        // Assuming 'public' disk is configured for file storage in config/filesystems.php
    }

    // Create or update the Professional instance
    $professional = Professional::updateOrCreate(
        ['id' => $request->id], // Update if ID exists, otherwise create new
        [
            'name' => $request->name,
            'specialization' => $request->specialization,
            'email' => $request->email,
            'phone' => $request->phone,
            'image' => $imagePath ?? null, // Save image path if uploaded
        ]
    );
}

    // protected $fillable = ['name', 'specialization', 'email', 'phone', 'image'];

    // Define the relationship to User
    // public function user()
    // {
    //     return $this->belongsTo(User::class);
    // }

    // Define the relationship to Availability
    public function availability()
    {
        return $this->hasMany(Availability::class);
    }
}
