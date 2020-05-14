<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Witaj w aplikacji Jacka';
        return view('pages.index', compact('title'));
    }

    public function about(){
        $title = 'To jest strona o mnie';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Umiejętności',
            'services' => ['Analiza biznesowa', 'Analiza systemowa', 'Programowanie w języku Java', 'Programowanie w języku JavaScript (tak, to dwa różne języki)', 'Szczęśliwy mąż i wkrótce ojciec :)' ]
        );
        return view('pages.services')->with($data);
    }
}
