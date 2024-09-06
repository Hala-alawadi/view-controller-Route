<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
       
        $data = [
            'name' => 'Halah Motea Alawadi',
            'birth' => '16/3/2001',
            'email' => 'hloooool125@gmail.com',
            'phonenumber' => '737926087',
            'skills' => [
                'HTML' => '85%',
                'CSS3' => '75%',
                'PHP' => '50%',
                'JAVASCRIPT' => '20%'
            ]
        ];

        
        return view('about', $data);
    }
}