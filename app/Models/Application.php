<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'applicant_name',
        'birthday',
        'grade_level',
        'guardian_name',
        'guardian_type',
        'country',
        'address1',
        'postal_code'
    ];
}
