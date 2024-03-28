<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'city';
    protected $fillable = [
        'state_province',
        'postal_zip_code',
        'country',
        'registration_number',
        'social_media_links',
        'website_url',
    ];
}
