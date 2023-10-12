<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WebsiteController extends Controller
{

    public function index()
    {

        $response = Http::get('https://mundotvde.pt/api/stand-cars');

        if ($response->ok()) {
            $cars = $response->json();
            return view('home', compact('cars'));
        } else {
            return response()->json(['erro' => 'Não foi possível obter os carros do stand.'], $response->status());
        }

    }

    public function car($id, $slug)
    {

        $response1 = Http::get('https://mundotvde.pt/api/stand-cars');
        $response2 = Http::get('https://mundotvde.pt/api/stand-car/' . $id);

        if ($response1->ok() && $response2->ok()) {
            $cars = $response1->json();
            $car = $response2->json();
            return view('car', compact('cars', 'car'));
        } else {
            return response()->json(['erro' => 'Não foi possível obter os carros do stand.'], $response1->status());
        }
    }

    public function cars()
    {
        $response = Http::get('https://mundotvde.pt/api/stand-cars');
        $filter_elements = Http::get('https://mundotvde.pt/api/filter-elements');

        //return $filter_elements;

        $brands = $filter_elements['brands'];
        $models = $filter_elements['models'];
        $fuels = $filter_elements['fuels'];
        $origins = $filter_elements['origins'];
        $kilometers = $filter_elements['kilometers'];
        $prices = $filter_elements['prices'];

        if ($response->ok()) {
            $cars = $response->json();
            return view('cars', compact('cars', 'brands', 'models', 'fuels', 'origins', 'kilometers', 'prices'));
        } else {
            return response()->json(['erro' => 'Não foi possível obter os carros do stand.'], $response->status());
        }
    }
}