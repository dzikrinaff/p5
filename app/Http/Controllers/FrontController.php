<?php

namespace App\Http\Controllers;
use App\Models\Destinasi;

class FrontController extends Controller
{
    public function index()
    {
        $destinasi = Destinasi::all();
        
        return view('welcome', compact('destinasi'));
    }

    public function destinasi()
    {
        $destinasi = Destinasi::all();
        
        return view('destinasi', compact('destinasi'));
    }

    
    
    public function filterByDestinasi($id)
    {
        $destinasi = Destinasi::all();
        return view('destinasi', compact('destinasi'));
    }
}