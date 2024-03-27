<?php

namespace App\Exports;

use App\Models\Prospect;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProspectExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Prospect::all();
    }
    public function headings(): array
    {
        return ["ID", "Link", "First Name" , "Last Name","Company Name","Company Size",'Industry','Contact No','Email'];
    }
}
