<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clinichistory extends Model
{
    use HasFactory;
    protected $table ='clinichistory';
    protected $primaryKey = 'id';

    protected $fillable=[
        'medical_background',
        'creation_date',
        'current_prescription',
        'current_x-ray'
    ];

}

