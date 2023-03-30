<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{

    use HasFactory, SoftDeletes;
    protected $fillable = ['name','registration_date','refferal','patient_type','age','gender','marital_status',
    'blood_group','email','phone','occupation','home_phone','home_address',
    'father_name','mother_name','payment_method','symptoms',
    'image'
];

}
