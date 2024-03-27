<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospect;
use App\Exports\ProspectExport;
use Excel;
class ProspectController extends Controller
{
function welcome()
{
    return view('welcome');
}
public function index()
{
    // Fetch data from the database
    $prospects = Prospect::all();
    // return Excel::download(new ProspectExport, 'users.xlsx');
    // Pass the data to the view
    return view('user.index', ['prospects' => $prospects]);
}

    public function store(Request $request)
    {  
        // $request->validate([
        //     'website' => 'required',
        //     'firstname' => 'required',
        //     'contactfirst' => 'required',
        //     'contactlast' => 'required',
        //     'contactemail' => 'email',
        //     'Linkedin' => 'url',
        //     'twitter' => 'url',
        //     'employee' => 'integer',
        // ]);
        

        $prospect = new Prospect();
        $prospect->website = $request->website;
        $prospect->company_name = $request->company_name;
        $prospect->contact_first_name = $request->contact_first_name;
        $prospect->contact_last_name = $request->contact_last_name;
        $prospect->contact_email = $request->contact_email;
        $prospect->linkedin = $request->Linkedin;
        $prospect->twitter = $request->twitter;
        $prospect->number_of_employees = $request->employee;
        $prospect->industry = $request->industary;
        $prospect->status = $request->status;
        $prospect->note = $request->note;
        $prospect->save();
        return redirect()->back()->with('success', 'Prospect created successfully');
    }
}
