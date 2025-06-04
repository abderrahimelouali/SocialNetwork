<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class homeController extends Controller
{
    public function index()
    {
        $users = [
            [
                "id" => 1,
                "nom" => "Ahmed",
                "metier" => "Développeur"
            ],
            [
                "id" => 2,
                "nom" => "Fatima",
                "metier" => "Designer"
            ],
            [
                "id" => 3,
                "nom" => "Youssef",
                "metier" => "Chef de projet"
            ],
            [
                "id" => 4,
                "nom" => "Samira",
                "metier" => "Data Analyst"
            ]
        ];

        return view('home', compact('users'));
    }
}
