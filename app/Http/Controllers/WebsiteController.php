<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebsiteController extends Controller
{

    public function index()
    {

        $cars = Http::get('https://mundotvde.pt/api/stand-cars')->json();
        $pages = Http::get('https://mundotvde.pt/api/pages')->json();

        return view('home', compact('cars', 'pages'));

    }

    public function car($id, $slug)
    {

        $cars = Http::get('https://mundotvde.pt/api/stand-cars')->json();
        $car = Http::get('https://mundotvde.pt/api/stand-car/' . $id)->json();
        $pages = Http::get('https://mundotvde.pt/api/pages')->json();

        return view('car', compact('cars', 'car', 'pages'));
    }

    public function cars()
    {
        $cars = Http::get('https://mundotvde.pt/api/stand-cars')->json();
        $pages = Http::get('https://mundotvde.pt/api/pages')->json();
        $filter_elements = Http::get('https://mundotvde.pt/api/filter-elements');

        $brands = $filter_elements['brands'];
        $models = $filter_elements['models'];
        $fuels = $filter_elements['fuels'];
        $origins = $filter_elements['origins'];
        $kilometers = $filter_elements['kilometers'];
        $prices = $filter_elements['prices'];

        return view('cars', compact('cars', 'pages', 'brands', 'models', 'fuels', 'origins', 'kilometers', 'prices'));
    }

    public function page($id)
    {

        $cars = Http::get('https://mundotvde.pt/api/stand-cars')->json();
        $pages = Http::get('https://mundotvde.pt/api/pages')->json();
        $page = Http::get('https://mundotvde.pt/api/page/' . $id)->json();

        return view('page', compact('cars', 'pages', 'page'));
    }
}