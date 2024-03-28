<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CityImport;

class CityController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        $cities = City::all();
        return view('city.index', ['cities' => $cities]);
    } 

    public function uploadExcel(Request $request)
    {
        if ($request->hasFile('excel_file')) {
            $excelFile = $request->file('excel_file');
            Excel::import(new CityImport, $excelFile);
        }
        return back()->with('success', 'Excel file uploaded and imported successfully');
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
        $city->state_province = $request->state_province;
        $city->postal_zip_code = $request->postal_zip_code;
        $city->country = $request->country;
        $city->registration_number = $request->registration_number;
        $city->social_media_links = $request->social_media_links ?? null;
        $city->website_url = $request->website_url ?? null;
        $city->save();

        return back()->with('success', 'City added successfully');
    }
}
