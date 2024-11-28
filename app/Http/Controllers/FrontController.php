<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Inertia\Inertia;
use Inertia\Response;

class FrontController extends Controller
{
    public function accueil()
    {
        return Inertia::render('Accueil');
    }


    public function accueilRealisations()
    {
        return [
            // ''
        ];
    }
}
