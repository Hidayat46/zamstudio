<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'website',
        'firstname',
        'contactfirst',
        'contactlast',
        'contactemail',
        'Linkedin',
        'twitter',
        'employee',
        'industary',
        'status',
        'note',
    ];
}
