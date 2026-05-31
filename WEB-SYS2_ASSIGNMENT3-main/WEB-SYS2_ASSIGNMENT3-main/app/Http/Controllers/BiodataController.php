<?php

namespace App\Http\Controllers;

class BiodataController extends Controller
{
    public function index()
    {
        $data = [
            'fullName' => 'Cedric Johanns C. Sorrera',
            'jobTitle' => 'Software Developer',
            'phone' => '09468482554',
            'email' => 'cedricjohanns122103@email.com',
            'address' => 'Guico Street, Canarvacanan, Binalonan, Pangasinan',
            'birthDate' => 'December 20,2003',
            'gender' => 'Male',
            'nationality' => 'Filipino',
            'experience' => 'N/A',
            'photo' => 'storage/biodata/profile.png'
        ];

        return view('biodata', compact('data'));
    }
}