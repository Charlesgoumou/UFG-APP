<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProfilesController extends Controller
{
    public function __construct()

    {
            $this->middleware('auth')->except('etudiant');

    }

    //Function de controle du Profile
    public function enseignant()
    {

        return view('ufg.enseignant');

    }

    //Function de Controle de l'étudiant 
    public function etudiant()
    {

        return view('ufg.etudiant'); 

    }
}
