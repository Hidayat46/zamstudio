<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CityController extends Controller
{
    function welcome()
    {
        return view('welcome');
    }
    public function index()
    {
        $cities = City::all();
        return view('city.index', ['cities' => $cities]);
    } 

    public function store(Request $request)
{
        $request->validate([
        'state_province' => 'required|string',
        'postal_zip_code' => 'required|string',
        'country' => 'required|string',
        'registration_number' => 'required|string',
        'social_media_links' => 'nullable|string',
        'website_url' => 'nullable|url',
    ]);

    $city = new City();
    $city->state_province = $request['state_province'];
    $city->postal_zip_code = $request['postal_zip_code'];
    $city->country = $request['country'];
    $city->registration_number = $request['registration_number'];
    $city->social_media_links = $request['social_media_links'] ?? null;
    $city->website_url = $request['website_url'] ?? null;
    $city->save();
    return back();
    }
}