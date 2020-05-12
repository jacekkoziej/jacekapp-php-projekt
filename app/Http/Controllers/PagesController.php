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
            'title' => 'Usługi',
            'services' => ['Analiza biznesowa', 'Programowanie w języku Java', 'Analiza systemowa']
        );
        return view('pages.services')->with($data);
    }
}
